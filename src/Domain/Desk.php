<?php

namespace App\Domain;

class Desk
{
    public function openBooking()
    {
        return new Booking();
    }
}
