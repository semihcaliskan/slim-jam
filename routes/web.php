<?php


use Illuminate\Support\Facades\Route;
use Shopify\Clients\Rest;
use Google\Cloud\Translate\V2\TranslateClient;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('shopifytest/products', function(Rest $client){
    // . Show results of shopify api's /products uri

    $response = $client->get('products');
    return $response->getDecodedBody();
});

Route::get('shopifytest/orders', function(Rest $client){
    // . Show results of shopify api's /orders uri

    $response = $client->get('orders');
    return $response->getDecodedBody();
});

Route::get('translatetest', function(TranslateClient $translate){
    

    // Translate text from english to french.
    $result = $translate->translate('Dear friends');

    echo $result['text'];
});
