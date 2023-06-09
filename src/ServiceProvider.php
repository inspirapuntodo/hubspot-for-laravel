<?php

declare(strict_types=1);

namespace InspiraPuntoDo\Hubspot;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use InspiraPuntoDo\Hubspot\Exceptions\AccessTokenIsMissing;
use InspiraPuntoDo\Hubspot\Exceptions\ClientOptionsMustBeAnArray;
use SevenShores\Hubspot\Factory;

/**
 * @internal
 */
final class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(Factory::class, static function (): Factory {
            $access_token = config('hubspot.access_token');
            $use_oauth2 = config('hubspot.use_oauth2');

            if (! is_string($access_token)) {
                throw AccessTokenIsMissing::create();
            }

            $client_options = config('hubspot.client_options', []);

            if (! is_array($client_options)) {
                throw ClientOptionsMustBeAnArray::create();
            }

            return new Factory(
                [
                    'key' => $access_token,
                    'oauth2' => $use_oauth2,
                ],
                null,
                $client_options
            );
        });

        $this->app->alias(Factory::class, 'hubspot');
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/hubspot.php' => config_path('hubspot.php'),
        ]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return [
            Factory::class,
            'hubspot',
        ];
    }
}
