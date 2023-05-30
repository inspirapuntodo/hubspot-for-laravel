<?php

declare(strict_types=1);

namespace InspiraPuntoDo\Hubspot\Facades;

use Illuminate\Support\Facades\Facade;

final class Hubspot extends Facade
{
    /**
     * Get the registered name of the component.
     */
    protected static function getFacadeAccessor(): string
    {
        return 'hubspot';
    }
}
