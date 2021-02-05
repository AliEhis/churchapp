<?php

namespace App\Providers;



use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

use App\SiteSetting;
use App\GeneralDetail;
use App\DailyDevotion;
use App\Category;
use App\Program;
use App\Event;
use App\Post;
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
        Schema::defaultStringLength(191);

        View::composer('*', function ($view) {

            $view->with('site', \App\SiteSetting::first());
            $view->with('countdown', \App\Program::first());
            $view->with('general', \App\GeneralDetail::first());
            $view->with('devotion', \App\DailyDevotion::all());
            $view->with('categories', Category::get());
            $view->with('archives', \App\Post::archives());
            $view->with('eventsarchives', \App\Event::eventsarchives());
            $view->with('tags', \App\Tag::has('posts')->get());
            $view->with('popularposts', \App\Post::orderBy('view_count','desc')->take(5)->get());

        });
}
}
