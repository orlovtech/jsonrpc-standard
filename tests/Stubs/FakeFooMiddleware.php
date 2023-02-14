<?php

namespace Tochka\JsonRpc\Standard\Tests\Stubs;

use Illuminate\Container\Container;
use Tochka\JsonRpc\Standard\Contracts\MiddlewareInterface;

class FakeFooMiddleware implements MiddlewareInterface
{
    public Container $container;
    public int $foo;
    public string $bar;

    public function __construct(Container $container, int $foo, string $bar)
    {
        $this->container = $container;
        $this->foo = $foo;
        $this->bar = $bar;
    }
}
