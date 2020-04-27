<?php

namespace App\Tests;

use App\Domain\Booking;
use App\Domain\Desk;
use App\Infrastructure\BookingClientHttpClient;
use PHPUnit\Framework\TestCase;

class OpenBookingTest extends TestCase
{
    public function testBooking(): void
    {
        $bookingClient = new BookingClientHttpClient();
        $booking = $bookingClient->getBooking('express2000');

        $this->assertInstanceOf(Booking::class, $booking);
        $this->assertEquals($booking->getTrainId(), 'express2000');
    }
}
