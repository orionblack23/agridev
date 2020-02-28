<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Gloudemans\Shoppingcart\Facades\Cart;


Route::get('/', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/about', [
    'uses' => 'ProductController@getAbout',
    'as' => 'product.about'
]);

Route::get('/contact', [
    'uses' => 'ProductController@getContact',
    'as' => 'product.contact'
]);

Route::get('/boutique', [
    'uses' => 'ProductController@getShopIndex',
    'as' => 'product.shopIndex'
]);

Route::get('/signup', [
    'uses' => 'UserController@getSignup',
    'as' => 'user.signup'
]);

Route::post('/signup', [
    'uses' => 'UserController@postSignup',
    'as' => 'user.signup'
]);

Route::get('/signin', [
    'uses' => 'UserController@getSignin',
    'as' => 'user.signin'
]);

Route::post('/signin', [
    'uses' => 'UserController@postSignin',
    'as' => 'user.signin'
]);

Route::get('/logout', [
    'uses' => 'UserController@getLogout',
    'as' => 'user.logout'
]);

Route::get('/produits/{id}', [
    'uses' => 'ProductController@getShoppingView',
    'as' => 'product.shoppingView'
]);

Route::get('/produit-details/{shortName}', [
    'uses' => 'ProductController@getProductDetails',
    'as' => 'product.productDetails'
]);

Route::post('/addToCart', [
    'uses' => 'ProductController@postStore',
    'as' => 'product.addToCart'
]);

Route::get('/panier', [
    'uses' => 'ProductController@getShoppingCart',
    'as' => 'product.shoppingCart'
]);

Route::delete('/remove/{product}', [
    'uses' => 'ProductController@getRemove',
    'as' => 'product.remove'
]);

Route::patch('/panier/{id}', [
    'uses' => 'ProductController@getUpdate',
    'as' => 'product.update'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckOut',
    'as' => 'product.checkOut'
]);

Route::get('empty', function () {
    Cart::destroy();
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/coupon', [
    'uses' => 'CouponsController@store',
    'as' => 'coupon.store'
]);

Route::delete('/coupon', [
    'uses' => 'CouponsController@destroy',
    'as' => 'coupon.destroy'
]);
