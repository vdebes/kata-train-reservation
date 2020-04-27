<?php

namespace App\Tests;

use App\Domain\Booking;
use App\Domain\Desk;
use App\Infrastructure\BookingHttpClient;
use PHPUnit\Framework\TestCase;

class OpenBookingTest extends TestCase
{
    public function testBooking(): void
    {
        $bookingClient = new BookingHttpClient();
        $booking = $bookingClient->getBooking('express2000');

        $this->assertInstanceOf(Booking::class, $booking);
        $this->assertEquals($booking->getTrainId(), 'express2000');
    }
}
