<?php

namespace App\Providers;

use App\Domains\Brand\BrandRepository;
use App\Domains\Brand\BrandRepositoryImpl;
use App\Domains\Brand\BrandService;
use App\Domains\Brand\BrandServiceImpl;
use App\Domains\Brand\BrandTranslator;
use App\Domains\Brand\BrandTranslatorImpl;
use App\Http\Responder\BrandResponder;
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
        $this->app->bind(BrandService::class,BrandServiceImpl::class);
        $this->app->bind(BrandTranslator::class,BrandTranslatorImpl::class);
        $this->app->bind(BrandRepository::class,BrandRepositoryImpl::class);
        $this->app->bind(BrandResponder::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
