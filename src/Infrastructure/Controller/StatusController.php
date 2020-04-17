<?php

namespace App\Infrastructure\Controller;

use Symfony\Component\HttpFoundation\Response;

class StatusController
{
    public function __invoke()
    {
        return new Response("ok");
    }
}
