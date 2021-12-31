<?php

namespace Sansu\SaveModel\Contracts;

interface CanBeSavedContract
{
    public function saveableFields(): array;
}
