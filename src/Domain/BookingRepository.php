<?php

namespace App\Domain;

interface BookingRepository
{
    public function generateBooking(): Booking;
}
