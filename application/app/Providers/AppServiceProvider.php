<?php

namespace App\Providers;

use App\Domains\Brand\BrandRepository;
use App\Domains\Brand\BrandRepositoryImpl;
use App\Domains\Brand\BrandService;
use App\Domains\Brand\BrandServiceImpl;
use App\Domains\Brand\BrandTranslator;
use App\Domains\Brand\BrandTranslatorImpl;
use App\Domains\Category\CategoryRepository;
use App\Domains\Category\CategoryRepositoryImpl;
use App\Domains\Category\CategoryService;
use App\Domains\Category\CategoryServiceImpl;
use App\Domains\Category\CategoryTranslator;
use App\Domains\Category\CategoryTranslatorImpl;
use App\Domains\MyBest\MyBestRepository;
use App\Domains\MyBest\MyBestRepositoryImpl;
use App\Domains\MyBest\MyBestService;
use App\Domains\MyBest\MyBestServiceImpl;
use App\Domains\MyBest\MyBestTranslator;
use App\Domains\MyBest\MyBestTranslatorImpl;
use App\Domains\Product\ProductRepository;
use App\Domains\Product\ProductRepositoryImpl;
use App\Domains\Product\ProductService;
use App\Domains\Product\ProductServiceImpl;
use App\Domains\Product\ProductTranslator;
use App\Domains\Product\ProductTranslatorImpl;
use App\Domains\Purchase\PurchaseRepository;
use App\Domains\Purchase\PurchaseRepositoryImpl;
use App\Domains\Purchase\PurchaseService;
use App\Domains\Purchase\PurchaseServiceImpl;
use App\Domains\Purchase\PurchaseTranslator;
use App\Domains\Purchase\PurchaseTranslatorImpl;
use App\Domains\Research\ResearchRepository;
use App\Domains\Research\ResearchRepositoryImpl;
use App\Domains\Research\ResearchService;
use App\Domains\Research\ResearchServiceImpl;
use App\Domains\Research\ResearchTranslator;
use App\Domains\Research\ResearchTranslatorImpl;
use App\Domains\Shop\ShopRepository;
use App\Domains\Shop\ShopRepositoryImpl;
use App\Domains\Shop\ShopService;
use App\Domains\Shop\ShopServiceImpl;
use App\Domains\Shop\ShopTranslator;
use App\Domains\Shop\ShopTranslatorImpl;
use App\Domains\ToDo\ToDoRepository;
use App\Domains\ToDo\ToDoRepositoryImpl;
use App\Domains\ToDo\ToDoService;
use App\Domains\ToDo\ToDoServiceImpl;
use App\Domains\ToDo\ToDoTranslator;
use App\Domains\ToDo\ToDoTranslatorImpl;
use App\Domains\Trademark\TrademarkRepository;
use App\Domains\Trademark\TrademarkRepositoryImpl;
use App\Domains\Trademark\TrademarkService;
use App\Domains\Trademark\TrademarkServiceImpl;
use App\Domains\Trademark\TrademarkTranslator;
use App\Domains\Trademark\TrademarkTranslatorImpl;
use App\Domains\User\UserRepository;
use App\Domains\User\UserRepositoryImpl;
use App\Domains\User\UserService;
use App\Domains\User\UserServiceImpl;
use App\Domains\User\UserTranslator;
use App\Domains\User\UserTranslatorImpl;
use App\Http\Responders\Brand\BrandContentResponder;
use App\Http\Responders\Brand\BrandListResponder;
use App\Http\Responders\Brand\BrandPagingListResponder;
use App\Http\Responders\Brand\BrandUpdateResponder;
use App\Http\Responders\Category\CategoryContentResponder;
use App\Http\Responders\Category\CategoryListResponder;
use App\Http\Responders\Category\CategoryPagingListResponder;
use App\Http\Responders\Category\CategoryUpdateResponder;
use App\Http\Responders\MyBest\MyBestContentResponder;
use App\Http\Responders\MyBest\MyBestListResponder;
use App\Http\Responders\MyBest\MyBestPagingListResponder;
use App\Http\Responders\MyBest\MyBestUpdateResponder;
use App\Http\Responders\Product\ProductContentResponder;
use App\Http\Responders\Product\ProductListResponder;
use App\Http\Responders\Product\ProductPagingListResponder;
use App\Http\Responders\Product\ProductUpdateResponder;
use App\Http\Responders\Purchase\PurchaseContentResponder;
use App\Http\Responders\Purchase\PurchaseListResponder;
use App\Http\Responders\Purchase\PurchasePagingListResponder;
use App\Http\Responders\Purchase\PurchaseUpdateResponder;
use App\Http\Responders\Research\ResearchContentResponder;
use App\Http\Responders\Research\ResearchListResponder;
use App\Http\Responders\Research\ResearchPagingListResponder;
use App\Http\Responders\Research\ResearchUpdateResponder;
use App\Http\Responders\Shop\ShopContentResponder;
use App\Http\Responders\Shop\ShopListResponder;
use App\Http\Responders\Shop\ShopPagingListResponder;
use App\Http\Responders\Shop\ShopUpdateResponder;
use App\Http\Responders\ToDo\ToDoContentResponder;
use App\Http\Responders\ToDo\ToDoListResponder;
use App\Http\Responders\ToDo\ToDoPagingListResponder;
use App\Http\Responders\ToDo\ToDoUpdateResponder;
use App\Http\Responders\Trademark\TrademarkContentResponder;
use App\Http\Responders\Trademark\TrademarkListResponder;
use App\Http\Responders\Trademark\TrademarkPagingListResponder;
use App\Http\Responders\Trademark\TrademarkUpdateResponder;
use App\Http\Responders\User\UserContentResponder;
use App\Http\Responders\User\UserListResponder;
use App\Http\Responders\User\UserPagingListResponder;
use App\Http\Responders\User\UserUpdateResponder;
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
        $this->app->bind(BrandListResponder::class,BrandListResponder::class);
        $this->app->bind(BrandContentResponder::class,BrandContentResponder::class);
        $this->app->bind(BrandPagingListResponder::class,BrandPagingListResponder::class);
        $this->app->bind(BrandUpdateResponder::class,BrandUpdateResponder::class);

        $this->app->bind(CategoryService::class,CategoryServiceImpl::class);
        $this->app->bind(CategoryTranslator::class,CategoryTranslatorImpl::class);
        $this->app->bind(CategoryRepository::class,CategoryRepositoryImpl::class);
        $this->app->bind(CategoryListResponder::class,CategoryListResponder::class);
        $this->app->bind(CategoryContentResponder::class,CategoryContentResponder::class);
        $this->app->bind(CategoryPagingListResponder::class,CategoryPagingListResponder::class);
        $this->app->bind(CategoryUpdateResponder::class,CategoryUpdateResponder::class);

        $this->app->bind(MyBestService::class,MyBestServiceImpl::class);
        $this->app->bind(MyBestTranslator::class,MyBestTranslatorImpl::class);
        $this->app->bind(MyBestRepository::class,MyBestRepositoryImpl::class);
        $this->app->bind(MyBestListResponder::class,MyBestListResponder::class);
        $this->app->bind(MyBestContentResponder::class,MyBestContentResponder::class);
        $this->app->bind(MyBestPagingListResponder::class,MyBestPagingListResponder::class);
        $this->app->bind(MyBestUpdateResponder::class,MyBestUpdateResponder::class);

        $this->app->bind(ProductService::class,ProductServiceImpl::class);
        $this->app->bind(ProductTranslator::class,ProductTranslatorImpl::class);
        $this->app->bind(ProductRepository::class,ProductRepositoryImpl::class);
        $this->app->bind(ProductListResponder::class,ProductListResponder::class);
        $this->app->bind(ProductContentResponder::class,ProductContentResponder::class);
        $this->app->bind(ProductPagingListResponder::class,ProductPagingListResponder::class);
        $this->app->bind(ProductUpdateResponder::class,ProductUpdateResponder::class);

        $this->app->bind(PurchaseService::class,PurchaseServiceImpl::class);
        $this->app->bind(PurchaseTranslator::class,PurchaseTranslatorImpl::class);
        $this->app->bind(PurchaseRepository::class,PurchaseRepositoryImpl::class);
        $this->app->bind(PurchaseListResponder::class,PurchaseListResponder::class);
        $this->app->bind(PurchaseContentResponder::class,PurchaseContentResponder::class);
        $this->app->bind(PurchasePagingListResponder::class,PurchasePagingListResponder::class);
        $this->app->bind(PurchaseUpdateResponder::class,PurchaseUpdateResponder::class);

        $this->app->bind(ResearchService::class,ResearchServiceImpl::class);
        $this->app->bind(ResearchTranslator::class,ResearchTranslatorImpl::class);
        $this->app->bind(ResearchRepository::class,ResearchRepositoryImpl::class);
        $this->app->bind(ResearchListResponder::class,ResearchListResponder::class);
        $this->app->bind(ResearchContentResponder::class,ResearchContentResponder::class);
        $this->app->bind(ResearchPagingListResponder::class,ResearchPagingListResponder::class);
        $this->app->bind(ResearchUpdateResponder::class,ResearchUpdateResponder::class);

        $this->app->bind(ShopService::class,ShopServiceImpl::class);
        $this->app->bind(ShopTranslator::class,ShopTranslatorImpl::class);
        $this->app->bind(ShopRepository::class,ShopRepositoryImpl::class);
        $this->app->bind(ShopListResponder::class,ShopListResponder::class);
        $this->app->bind(ShopContentResponder::class,ShopContentResponder::class);
        $this->app->bind(ShopPagingListResponder::class,ShopPagingListResponder::class);
        $this->app->bind(ShopUpdateResponder::class,ShopUpdateResponder::class);

        $this->app->bind(ToDoService::class,ToDoServiceImpl::class);
        $this->app->bind(ToDoTranslator::class,ToDoTranslatorImpl::class);
        $this->app->bind(ToDoRepository::class,ToDoRepositoryImpl::class);
        $this->app->bind(ToDoListResponder::class,ToDoListResponder::class);
        $this->app->bind(ToDoContentResponder::class,ToDoContentResponder::class);
        $this->app->bind(ToDoPagingListResponder::class,ToDoPagingListResponder::class);
        $this->app->bind(ToDoUpdateResponder::class,ToDoUpdateResponder::class);

        $this->app->bind(TrademarkService::class,TrademarkServiceImpl::class);
        $this->app->bind(TrademarkTranslator::class,TrademarkTranslatorImpl::class);
        $this->app->bind(TrademarkRepository::class,TrademarkRepositoryImpl::class);
        $this->app->bind(TrademarkListResponder::class,TrademarkListResponder::class);
        $this->app->bind(TrademarkContentResponder::class,TrademarkContentResponder::class);
        $this->app->bind(TrademarkPagingListResponder::class,TrademarkPagingListResponder::class);
        $this->app->bind(TrademarkUpdateResponder::class,TrademarkUpdateResponder::class);

        $this->app->bind(UserService::class,UserServiceImpl::class);
        $this->app->bind(UserTranslator::class,UserTranslatorImpl::class);
        $this->app->bind(UserRepository::class,UserRepositoryImpl::class);
        $this->app->bind(UserListResponder::class,UserListResponder::class);
        $this->app->bind(UserContentResponder::class,UserContentResponder::class);
        $this->app->bind(UserPagingListResponder::class,UserPagingListResponder::class);
        $this->app->bind(UserUpdateResponder::class,UserUpdateResponder::class);
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
