<?php

namespace App\Tests;

use App\Domain\Booking;
use PHPUnit\Framework\TestCase;

class BookingTest extends TestCase
{
    public function testBooking(): void
    {
        $this->assertInstanceOf(Booking::class, new Booking());
    }
}
