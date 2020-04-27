<?php

namespace App\Infrastructure;

use App\Application\BookingClient;

class BookingClientHttpClient implements BookingClient
{
    public function getBooking(string $trainId): string
    {
        return $trainId;
    }
}
