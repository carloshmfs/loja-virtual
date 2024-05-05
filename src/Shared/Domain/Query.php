<?php

namespace App\Shared\Domain;

interface Query
{
    public function handle(): array;
}