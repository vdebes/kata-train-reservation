<?php

namespace App\Domain;

class SimpleProvideBooking implements ProvideBooking
{
    public function provide(): Booking
    {
        return new Booking('1');
    }
}
