<?php

namespace App\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Response;

class StatusController
{
    public function __invoke(): Response
    {
        return new Response("ok");
    }
}
