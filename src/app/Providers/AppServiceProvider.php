<?php

namespace App\Providers;

use App\Validators\CustomValidator;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

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
        Validator::resolver(function ($translator, $data, $rules, $messages, array $customAttributes) {
            return new CustomValidator($translator, $data, $rules, $messages, $customAttributes);
        });
    }
}
