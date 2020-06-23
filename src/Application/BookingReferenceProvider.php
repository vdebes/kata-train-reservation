<?php

namespace App\Application;

interface BookingReferenceProvider
{
    public function get(): string;
}