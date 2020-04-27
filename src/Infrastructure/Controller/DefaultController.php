<?php

namespace App\Infrastructure\Controller;

use App\Application\OpenBooking;
use League\Tactician\CommandBus;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController
{
    private $commandBus;

    public function __construct(CommandBus $commandBus)
    {
        $this->commandBus = $commandBus;
    }

    public function __invoke()
    {
        $newBooking = $this->commandBus->handle(new OpenBooking('express2000'));

        return new JsonResponse($newBooking->getTrainId());
    }
}
