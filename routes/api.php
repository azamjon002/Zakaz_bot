<?php

use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Users
    Route::apiResource('users', 'UsersApiController');

    // Category
    Route::apiResource('categories', 'CategoryApiController');

    // Sub Category
    Route::apiResource('sub-categories', 'SubCategoryApiController');

    // Product
    Route::apiResource('products', 'ProductApiController');

    // Order
    Route::apiResource('orders', 'OrderApiController');

    // Payment
    Route::apiResource('payments', 'PaymentApiController');

    // Location
    Route::apiResource('locations', 'LocationApiController');

    // Yetkazib Berish
    Route::apiResource('yetkazib-berishes', 'YetkazibBerishApiController');

    // About
    Route::apiResource('abouts', 'AboutApiController');

    // Contact
    Route::apiResource('contacts', 'ContactApiController');
});

Route::post('/bot/getupdates', function() {
    $updates = Telegram::getUpdates();
    return (json_encode ($updates));
});


Route::post('bot/sendmessage', function() {
    Telegram::sendMessage([
        'chat_id' => 'RECIPIENT_CHAT_ID',
        'text' => 'Salom dunyo!'
    ]);
    return;
});
