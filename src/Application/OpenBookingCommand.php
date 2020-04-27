<?php

namespace App\Application;

use App\Domain\Booking;

class OpenBookingCommand
{

    /** @var BookingClient */
    private $bookingClient;

    public function __construct(BookingClient $bookingClient)
    {
        $this->bookingClient = $bookingClient;
    }

    public function getBookingId(string $trainId): string
    {
        return new Booking($this->bookingClient->getBooking($trainId));
    }
}
