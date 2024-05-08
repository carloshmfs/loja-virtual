<?php

namespace LojaVirtual\Shared\Domain;

interface Query
{
    public function handle(): array;
}