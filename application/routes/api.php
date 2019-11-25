<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get("/brand","Brand\BrandPagingListAction")->middleware('auth:api');
Route::get("/brand/{id}","Brand\BrandContentAction")->middleware('auth:api');
Route::post("/brand","Brand\BrandInsertAction")->middleware('auth:api');
Route::put("/brand/{id}","Brand\BrandUpdateAction")->middleware('auth:api');
Route::delete("/brand/{id}","Brand\BrandDeleteAction")->middleware('auth:api');

Route::get("/category","Category\CategoryPagingListAction")->middleware('auth:api');
Route::get("/category/{id}","Category\CategoryContentAction")->middleware('auth:api');
Route::post("/category","Category\CategoryInsertAction")->middleware('auth:api');
Route::put("/category/{id}","Category\CategoryUpdateAction")->middleware('auth:api');
Route::delete("/category/{id}","Category\CategoryDeleteAction")->middleware('auth:api');

Route::get("/my_best","MyBest\MyBestPagingListAction")->middleware('auth:api');
Route::get("/my_best/{id}","MyBest\MyBestContentAction")->middleware('auth:api');
Route::post("/my_best","MyBest\MyBestInsertAction")->middleware('auth:api');
Route::put("/my_best/{id}","MyBest\MyBestUpdateAction")->middleware('auth:api');
Route::delete("/my_best/{id}","MyBest\MyBestDeleteAction")->middleware('auth:api');

Route::get("/product","Product\ProductPagingListAction")->middleware('auth:api');
Route::get("/product/{id}","Product\ProductContentAction")->middleware('auth:api');
Route::post("/product","Product\ProductInsertAction")->middleware('auth:api');
Route::put("/product/{id}","Product\ProductUpdateAction")->middleware('auth:api');
Route::delete("/product/{id}","Product\ProductDeleteAction")->middleware('auth:api');

Route::get("/purchase","Purchase\PurchasePagingListAction")->middleware('auth:api');
Route::get("/purchase/{id}","Purchase\PurchaseContentAction")->middleware('auth:api');
Route::post("/purchase","Purchase\PurchaseInsertAction")->middleware('auth:api');
Route::put("/purchase/{id}","Purchase\PurchaseUpdateAction")->middleware('auth:api');
Route::delete("/purchase/{id}","Purchase\PurchaseDeleteAction")->middleware('auth:api');

Route::get("/research","Research\ResearchPagingListAction")->middleware('auth:api');
Route::get("/research/{id}","Research\ResearchContentAction")->middleware('auth:api');
Route::post("/research","Research\ResearchInsertAction")->middleware('auth:api');
Route::put("/research/{id}","Research\ResearchUpdateAction")->middleware('auth:api');
Route::delete("/research/{id}","Research\ResearchDeleteAction")->middleware('auth:api');

Route::get("/shop","Shop\ShopPagingListAction")->middleware('auth:api');
Route::get("/shop/{id}","Shop\ShopContentAction")->middleware('auth:api');
Route::post("/shop","Shop\ShopInsertAction")->middleware('auth:api');
Route::put("/shop/{id}","Shop\ShopUpdateAction")->middleware('auth:api');
Route::delete("/shop/{id}","Shop\ShopDeleteAction")->middleware('auth:api');

Route::get("/todo","ToDo\ToDoPagingListAction")->middleware('auth:api');
Route::get("/todo/{id}","ToDo\ToDoContentAction")->middleware('auth:api');
Route::post("/todo","ToDo\ToDoInsertAction")->middleware('auth:api');
Route::put("/todo/{id}","ToDo\ToDoUpdateAction")->middleware('auth:api');
Route::delete("/todo/{id}","ToDo\ToDoDeleteAction")->middleware('auth:api');

Route::get("/trademark","Trademark\TrademarkPagingListAction")->middleware('auth:api');
Route::get("/trademark/{id}","Trademark\TrademarkContentAction")->middleware('auth:api');
Route::post("/trademark","Trademark\TrademarkInsertAction")->middleware('auth:api');
Route::put("/trademark/{id}","Trademark\TrademarkUpdateAction")->middleware('auth:api');
Route::delete("/trademark/{id}","Trademark\TrademarkDeleteAction")->middleware('auth:api');

Route::get("/user","User\UserPagingListAction")->middleware('auth:api');
Route::get("/user/{id}","User\UserContentAction")->middleware('auth:api');
Route::post("/user","User\UserInsertAction")->middleware('auth:api');
Route::put("/user/{id}","User\UserUpdateAction")->middleware('auth:api');
Route::delete("/user/{id}","User\UserDeleteAction")->middleware('auth:api');