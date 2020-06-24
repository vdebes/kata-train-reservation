<?php

namespace App\Test;

use App\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    public function testBar(): void
    {
        $foo = new Foo();
        $this->assertTrue($foo->bar());
    }
}
