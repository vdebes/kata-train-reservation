<?php

namespace App\Application\Providers;

use App\Application\BookingReferenceProvider;
use App\Domain\Booking;
use App\Application\ProvideBooking;

class SimpleProvideBooking implements ProvideBooking
{
    /** @var BookingReferenceProvider */
    private $bookingReferenceProvider;

    public function __construct(BookingReferenceProvider $bookingReferenceProvider)
    {
        $this->bookingReferenceProvider = $bookingReferenceProvider;
    }

    public function provide(): Booking
    {
        return new Booking($this->bookingReferenceProvider->get());
    }
}
