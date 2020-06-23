<?php

namespace App\Infrastructure\Controller;

use App\Domain\Booking;
use App\Domain\ProvideBooking;
use Symfony\Component\HttpFoundation\Response;

class BookingController
{
    /** @var ProvideBooking $provideBooking */
    private $provideBooking;

    public function __construct(ProvideBooking $provideBooking)
    {
        $this->provideBooking = $provideBooking;
    }

    public function __invoke(): Response
    {
        $booking = $this->provideBooking->provide();

        return new Response($booking->bookingNumber);
    }
}
