<?php

namespace App\Tests;

use App\Domain\Booking;
use App\Domain\Desk;
use PHPUnit\Framework\TestCase;

class DeskTest extends TestCase
{
    public function testBooking(): void
    {
        $desk = new Desk();
        $booking = $desk->openBooking('express2000');

        $this->assertInstanceOf(Booking::class, $booking);
        $this->assertEquals($booking->getTrainId(), 'express2000');
    }
}
