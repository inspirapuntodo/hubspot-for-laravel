<?php

use Illuminate\Config\Repository;
use InspiraPuntoDo\Hubspot\Exceptions\AccessTokenIsMissing;
use InspiraPuntoDo\Hubspot\Exceptions\ClientOptionsMustBeAnArray;
use InspiraPuntoDo\Hubspot\ServiceProvider;
use SevenShores\Hubspot\Factory;

it('requires an access token', function () {
    $app = app();

    $app->bind('config', fn () => new Repository([]));

    (new ServiceProvider($app))->register();
})->throws(
    AccessTokenIsMissing::class,
    'The hubspot access token is missing. Please publish the [hubspot.php] configuration file and set the [access_token].',
);

it('requires client_options to be an array', function () {
    $app = app();

    $app->bind('config', fn () => new Repository([
        'hubspot' => [
            'access_token' => 'test',
            'client_options' => 'random',
        ],
    ]));

    (new ServiceProvider($app))->register();
})->throws(
    ClientOptionsMustBeAnArray::class,
    'Client options must be an array. Please check [hubspot.php] configuration file and set the correct structure.',
);

it('provides', function () {
    $app = app();

    $provides = (new ServiceProvider($app))->provides();

    expect($provides)->toBe([
        Factory::class,
        'hubspot',
    ]);
});
