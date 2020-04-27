<?php

namespace App\Application;

use App\Domain\Booking;

class OpenBookingHandler
{
    public function handle(OpenBooking $openBooking)
    {
        return new Booking($openBooking->getTrainId());
    }
}
