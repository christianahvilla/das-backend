<?php

namespace App\Providers;

use Faker\Provider\KindProdiver;
use Faker\Provider\RoleProdiver;
use Faker\{Factory, Generator};
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register(): void
    {
        // $this->app->singleton(Generator::class, function () {
        //     $faker = Factory::create();
        //     $faker->addProvider(new RoleProdiver($faker));
        //     $faker->addProvider(new KindProdiver($faker));
        //     return $faker;
        // });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
