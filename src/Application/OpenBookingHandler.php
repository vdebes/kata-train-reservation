<?php

namespace App\Application;

use App\Domain\Booking;

class OpenBookingHandler
{
    public function handle(OpenBookingCommand $openBooking)
    {
        return $openBooking->getBookingId();
    }
}
