<?php

namespace App\Domain;

class Desk
{

    public function getBooking(string $trainId): Booking
    {
        return new Booking($trainId);
    }
}
