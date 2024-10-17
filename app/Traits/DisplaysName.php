<?php

namespace App\Traits;

trait DisplaysName
{
    public function getDisplayName(): string
    {
        return ucwords(strtolower(str_replace('_', ' ', $this->name)));
    }
}
