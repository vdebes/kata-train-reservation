<?php

namespace phpboilerplate\tests;

use PHPUnit\Framework\TestCase;
use vdebes\phpboilerplate\Foo;

class FooTest extends TestCase
{
    public function testBar(): void
    {
        $foo = new Foo();
        $this->assertTrue($foo->bar());
    }
}
