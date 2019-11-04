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

Route::get("/brand","Brand\BrandPagingListAction");
Route::get("/brand/{id}","Brand\BrandContentAction");
Route::post("/brand","Brand\BrandInsertAction");
Route::put("/brand/{id}","Brand\BrandUpdateAction");
Route::delete("/brand/{id}","Brand\BrandDeleteAction");

Route::get("/category","Category\CategoryPagingListAction");
Route::get("/category/{id}","Category\CategoryContentAction");
Route::post("/category","Category\CategoryInsertAction");
Route::put("/category/{id}","Category\CategoryUpdateAction");
Route::delete("/category/{id}","Category\CategoryDeleteAction");

Route::get("/my_best","MyBest\MyBestPagingListAction");
Route::get("/my_best/{id}","MyBest\MyBestContentAction");
Route::post("/my_best","MyBest\MyBestInsertAction");
Route::put("/my_best/{id}","MyBest\MyBestUpdateAction");
Route::delete("/my_best/{id}","MyBest\MyBestDeleteAction");

Route::get("/product","Product\ProductPagingListAction");
Route::get("/product/{id}","Product\ProductContentAction");
Route::post("/product","Product\ProductInsertAction");
Route::put("/product/{id}","Product\ProductUpdateAction");
Route::delete("/product/{id}","Product\ProductDeleteAction");

Route::get("/purchase","Purchase\PurchasePagingListAction");
Route::get("/purchase/{id}","Purchase\PurchaseContentAction");
Route::post("/purchase","Purchase\PurchaseInsertAction");
Route::put("/purchase/{id}","Purchase\PurchaseUpdateAction");
Route::delete("/purchase/{id}","Purchase\PurchaseDeleteAction");

Route::get("/research","Research\ResearchPagingListAction");
Route::get("/research/{id}","Research\ResearchContentAction");
Route::post("/research","Research\ResearchInsertAction");
Route::put("/research/{id}","Research\ResearchUpdateAction");
Route::delete("/research/{id}","Research\ResearchDeleteAction");

Route::get("/shop","Shop\ShopPagingListAction");
Route::get("/shop/{id}","Shop\ShopContentAction");
Route::post("/shop","Shop\ShopInsertAction");
Route::put("/shop/{id}","Shop\ShopUpdateAction");
Route::delete("/shop/{id}","Shop\ShopDeleteAction");

Route::get("/todo","ToDo\ToDoPagingListAction");
Route::get("/todo/{id}","ToDo\ToDoContentAction");
Route::post("/todo","ToDo\ToDoInsertAction");
Route::put("/todo/{id}","ToDo\ToDoUpdateAction");
Route::delete("/todo/{id}","ToDo\ToDoDeleteAction");

Route::get("/trademark","Trademark\TrademarkPagingListAction");
Route::get("/trademark/{id}","Trademark\TrademarkContentAction");
Route::post("/trademark","Trademark\TrademarkInsertAction");
Route::put("/trademark/{id}","Trademark\TrademarkUpdateAction");
Route::delete("/trademark/{id}","Trademark\TrademarkDeleteAction");

Route::get("/user","User\UserPagingListAction");
Route::get("/user/{id}","User\UserContentAction");
Route::post("/user","User\UserInsertAction");
Route::put("/user/{id}","User\UserUpdateAction");
Route::delete("/user/{id}","User\UserDeleteAction");