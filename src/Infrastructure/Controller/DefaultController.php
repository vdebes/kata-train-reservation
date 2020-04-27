<?php

namespace App\Infrastructure\Controller;

use App\Application\BookingClient;
use App\Application\OpenBookingCommand;
use League\Tactician\CommandBus;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController
{
    private $commandBus;
    private $bookingClient;

    public function __construct(CommandBus $commandBus, BookingClient $bookingClient)
    {
        $this->commandBus = $commandBus;
        $this->bookingClient = $bookingClient;
    }

    public function __invoke()
    {
        $newBooking = $this->commandBus->handle(new OpenBookingCommand($this->bookingClient));

        return new JsonResponse($newBooking->getTrainId());
    }
}
