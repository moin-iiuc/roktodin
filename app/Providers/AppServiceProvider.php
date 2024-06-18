<?php

namespace App\Providers;

use Illuminate\Database\Events\ModelsPruned;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Model::preventLazyLoading();
        //Define Gate
        Gate::define('access_user',function(User $user)
        {
            $user= Auth::user()->id;
            $user_is=User::find($user)->id;
            return $user_is==$user;
        });
    }
}
