<?php

namespace USpeedo\Tests;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response as HttpResponse;
use GuzzleHttp\Psr7\Request as HttpRequest;
use PHPUnit\Framework\TestCase;
use USpeedo\Core\Client;
use USpeedo\Core\Exception\USpeedoException;
use USpeedo\Core\Logger\DisabledLogger;
use USpeedo\Core\Middleware\Context;
use USpeedo\Core\Middleware\Middleware;
use USpeedo\Core\Request\Request;
use USpeedo\Core\Response\Response;
use USpeedo\Core\Transport\Transport;

/**
 * Check that credential package is worked.
 */
class ClientTest extends TestCase
{
    /**
     * Check, that signature algorithm is correct for example
     */
    public function testClientInvoke()
    {
        $cases = [
            [
                "req" => [
                    "Action" => "GetRegion",
                ],
                "resp" => [
                    "RetCode" => 0,
                    "DataSet" => [["Region" => "cn-bj2"]]
                ],
                "has_exception" => false,
            ],
            [
                "req" => [
                    "Action" => "NotFound",
                ],
                "resp" => [
                    "RetCode" => 161,
                    "Message" => "Action [NotFound] not found"
                ],
                "has_exception" => true,
            ],
            [
                "req" => [
                    "Action" => "GetRegion",
                ],
                "resp" => new RequestException('Error Communicating with Server', new HttpRequest('GET', 'test')),
                "has_exception" => true,
            ],

        ];

        $ua = "UnitTest";
        $client = new Client([
            "publicKey" => getenv("USPEEDO_PUBLIC_KEY"),
            "privateKey" => getenv("USPEEDO_PRIVATE_KEY"),
            "userAgent" => $ua,
        ]);

        foreach ($cases as $i => $case) {
            // mock with response
            $mock = $case["resp"];
            if (!($mock instanceof HttpResponse || $mock instanceof RequestException)) {
                $mock = new HttpResponse(200, ['Content-Type' => 'application/json'], json_encode($mock));
            }
            $handlerStack = HandlerStack::create(new MockHandler([$mock]));
            $client->setTransport(new Transport(
                $client->getConfig()->getBaseUrl(), $ua,
                ['handler' => $handlerStack],
            ));

            // invoke action
            try {
                $resp = $client->invoke(new Request($case["req"]));
            } catch (USpeedoException $e) {
                $this->assertEquals(True, $case["has_exception"]);
                continue;
            }

            $this->assertEquals(False, $case["has_exception"]);
            $this->assertNotEmpty($resp);
        }
    }

    public function testMiddleware()
    {
        $client = new Client([
            "publicKey" => getenv("USPEEDO_PUBLIC_KEY"),
            "privateKey" => getenv("USPEEDO_PRIVATE_KEY"),
            "logger" => new DisabledLogger(),
        ]);
        $client->setTransport(new Transport(
            $client->getConfig()->getBaseUrl(), "UnitTest",
            ['handler' => HandlerStack::create(new MockHandler([
                new RequestException('Error Communicating with Server', new HttpRequest('GET', 'test')),
            ]))],
        ));
        $m = new DummyMiddleware();
        $client->useMiddleware($m);

        $req = new Request([]);
        $req->setAction("Foo");
        $this->assertEquals("Foo", $req->getAction());

        try {
            $client->invoke($req);
        } catch (USpeedoException $e) {
            // do nothing
        }
        $this->assertEquals(True, $m->flag);
    }
}

class DummyMiddleware extends Middleware
{
    /** @var bool */
    public bool $flag;

    public function handleException(Context $ctx)
    {
        $this->flag = True;
    }
}
