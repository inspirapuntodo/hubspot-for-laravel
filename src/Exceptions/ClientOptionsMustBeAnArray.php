<?php

declare(strict_types=1);

namespace InspiraPuntoDo\Hubspot\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
final class ClientOptionsMustBeAnArray extends InvalidArgumentException
{
    /**
     * Create a new exception instance.
     */
    public static function create(): self
    {
        return new self(
            'Client options must be an array. Please check [hubspot.php] configuration file and set the correct structure.',
        );
    }
}
