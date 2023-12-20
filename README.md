<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://tenancyforlaravel.com/docs/v3/quickstart">Multi Tenancy</a>
</p>

## Laravel Multi-tenancy Demo

This tutorial focuses on getting you started with stancl/tenancy 3.x quickly. It implements multi-database tenancy & domain identification. If you need a different implementation, then that's absolutely possible with this package and it's very easy to refactor to a different implementation.

We recommend following this tutorial just to get things working so that you can play with the package. Then if you need to, you can refactor the details of the multi-tenancy implementation (e.g. single-database tenancy, request data identification, etc).

## Quickstart Tutorial

### Installation
First, require the package using composer:

composer require stancl/tenancy

Then, run the tenancy:install command:

php artisan tenancy:install

This will create a few files: migrations, config file, route file and a service provider.

Let's run the migrations:

php artisan migrate

Register the service provider in config/app.php. Make sure it's on the same position as in the code snippet below:

/*
 * Application Service Providers...
 */
App\Providers\AppServiceProvider::class,
App\Providers\AuthServiceProvider::class,
// App\Providers\BroadcastServiceProvider::class,
App\Providers\EventServiceProvider::class,
App\Providers\RouteServiceProvider::class,
App\Providers\TenancyServiceProvider::class, // <-- here


