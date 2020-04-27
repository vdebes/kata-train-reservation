<?php

namespace App\Infrastructure;

use App\Domain\Booking;

class BookingHttpClient
{
    public function getBooking(string $trainId): Booking
    {
        return new Booking($trainId);
    }
}
