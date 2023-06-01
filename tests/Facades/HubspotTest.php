<?php

use Illuminate\Config\Repository;
use InspiraPuntoDo\Hubspot\Facades\Hubspot;
use InspiraPuntoDo\Hubspot\ServiceProvider;
use SevenShores\Hubspot\Endpoints\Contacts;

it('resolves resources', function () {
    $app = app();

    $app->bind('config', fn () => new Repository([
        'hubspot' => [
            'access_token' => 'test',
            'use_oauth2' => true,
            'client_options' => [
                'http_errors' => true,
            ],
        ],
    ]));

    (new ServiceProvider($app))->register();

    Hubspot::setFacadeApplication($app);

    $contacts = Hubspot::contacts();

    expect($contacts)->toBeInstanceOf(Contacts::class);
});
