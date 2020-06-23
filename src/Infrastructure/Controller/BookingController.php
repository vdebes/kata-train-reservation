<?php

namespace App\Infrastructure\Controller;

use App\Application\ProvideBooking;
use Symfony\Component\HttpFoundation\Response;

class BookingController
{
    /** @var \App\Application\ProvideBooking $provideBooking */
    private $provideBooking;

    public function __construct(ProvideBooking $provideBooking)
    {
        $this->provideBooking = $provideBooking;
    }

    public function __invoke(): Response
    {
        $booking = $this->provideBooking->provide();

        return new Response($booking->getId());
    }
}
