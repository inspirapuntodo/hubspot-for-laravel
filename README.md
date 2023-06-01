<p align="center">
    <p align="center">
        <a href="https://packagist.org/packages/inspirapuntodo/hubspot-for-laravel"><img alt="Total Downloads" src="https://img.shields.io/packagist/dt/inspirapuntodo/hubspot-for-laravel"></a>
        <a href="https://packagist.org/packages/inspirapuntodo/hubspot-for-laravel"><img alt="Latest Version" src="https://img.shields.io/packagist/v/inspirapuntodo/hubspot-for-laravel"></a>
        <a href="https://packagist.org/packages/inspirapuntodo/hubspot-for-laravel"><img alt="License" src="https://img.shields.io/github/license/inspirapuntodo/hubspot-for-laravel"></a>
    </p>
</p>

------
# Hubspot for Laravel
 
Hubspot for Laravel is wrapper for the Hubspot CRM API allowing you to access the library in a convenient way through a `facade`. For a complete list of allowed methods visit the following repository [HubSpot/hubspot-php](https://github.com/HubSpot/hubspot-php).

## Installation
 
Here's how you track your website with Hubspot for Laravel:

> **Requires [PHP 8.1+](https://php.net/releases/)**

First, install Hubspot for Laravel via the [Composer](https://getcomposer.org/) package manager:

```bash
composer require inspirapuntodo/hubspot-for-laravel
```

Next, publish the configuration file:

```bash
php artisan vendor:publish --provider="InspiraPuntoDo\Hubspot\ServiceProvider"
```

This will create a `config/hubspot.php` configuration file in your project, which you can modify to your needs
using environment variables: 

```env
HUBSPOT_ACCESS_TOKEN=...
HUBSPOT_USE_OAUTH2=true
```

Now you will be able to use de Hubspot facade:
```php
use InspiraPuntoDo\Hubspot\Facades\Hubspot;

$contact = Hubspot::contacts()->getByEmail("email@example.com");

echo $contact->properties->email->value;
```

## Usage
 
For usage examples, take a look at the [HubSpot/hubspot-php](https://github.com/HubSpot/hubspot-php) repository.
 
## Contributing
 
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D
 
## Contributors
 
Cesar Mendez (@Activ3mined) 

---

Hubspot for Laravel is an open-sourced software licensed under the **[MIT license](https://opensource.org/licenses/MIT)**.