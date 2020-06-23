<?php

declare(strict_types=1);

namespace App\Domain;

interface ProvideBooking
{
    public function provide(): Booking;
}
