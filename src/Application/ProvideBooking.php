<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\Booking;

interface ProvideBooking
{
    public function provide(): Booking;
}
