<?php

namespace App\Application;

interface BookingClient
{
    public function getBooking(string $trainId): string;
}