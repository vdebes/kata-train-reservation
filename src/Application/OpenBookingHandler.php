<?php

namespace App\Application;

use App\Domain\Booking;

class OpenBookingHandler
{
    public function __invoke(OpenBooking $openBooking)
    {
        return new Booking($openBooking->getTrainId());
    }
}
