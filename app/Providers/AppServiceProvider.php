<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use PhpParser\Builder;
use Psy\Util\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Illuminate\Database\Query\Builder::macro('search', function ($field, $string){
            return $string ? $this->where($field, 'like', '%'.$string."%") : $this;
        });
    }
}
