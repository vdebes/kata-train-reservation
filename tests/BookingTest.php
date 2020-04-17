<?php

namespace App\tests;

use App\Domain\Booking;
use PHPUnit\Framework\TestCase;

class BookingTest extends TestCase
{
    public function testBooking(): void
    {
        $booking = new Booking('bookingNumber');
        $this->assertFalse($booking->isConfirmed());
    }
}
