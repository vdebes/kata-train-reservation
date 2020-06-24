<?php

namespace App\Test;

use App\Booking;
use PHPUnit\Framework\TestCase;

class BookingTest extends TestCase
{
    public function testBookingInstanciation(): void
    {
        $booking = new Booking(2);
        $this->assertInstanceOf(Booking::class, $booking);
    }
}
