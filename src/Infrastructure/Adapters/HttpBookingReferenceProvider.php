<?php

namespace App\Infrastructure\Adapters;

use App\Application\BookingReferenceProvider;

class HttpBookingReferenceProvider implements BookingReferenceProvider
{
    public function get(): string
    {
        return file_get_contents('http://localhost:8082/booking_reference');
    }
}