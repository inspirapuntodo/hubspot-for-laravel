<?php

declare(strict_types=1);

namespace InspiraPuntoDo\Hubspot\Exceptions;

use InvalidArgumentException;

/**
 * @internal
 */
final class ApiKeyIsMissing extends InvalidArgumentException
{
    /**
     * Create a new exception instance.
     */
    public static function create(): self
    {
        return new self(
            'The hubspot access token is missing. Please publish the [hubspot.php] configuration file and set the [access_token].'
        );
    }
}
