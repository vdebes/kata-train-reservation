<?php

namespace App\Domain;

class Desk
{
    public function openBooking(string $trainId): Booking
    {
        return new Booking($trainId);
    }
}
