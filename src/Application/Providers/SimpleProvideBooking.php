<?php

namespace App\Application\Providers;

use App\Domain\Booking;
use App\Application\ProvideBooking;

class SimpleProvideBooking implements ProvideBooking
{
    public function provide(): Booking
    {
        return new Booking('1');
    }
}
