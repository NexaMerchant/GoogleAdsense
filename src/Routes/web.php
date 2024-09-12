<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-09-02 15:35:03
 * @link https://github.com/xxxl4
 * 
 */
use Illuminate\Support\Facades\Route;
use NexaMerchant\GoogleAdsense\Http\Controllers\Web\ExampleController;
use NexaMerchant\GoogleAdsense\Http\Controllers\Web\GoogleAdsenseController;

Route::group(['middleware' => ['locale', 'theme', 'currency'], 'prefix'=>'googleadsense'], function () {

    Route::controller(ExampleController::class)->prefix('example')->group(function () {

        Route::get('demo', 'demo')->name('googleadsense.web.example.demo');

    });

    Route::controller(GoogleAdsenseController::class)->group(function () {

        Route::get('index', 'index')->name('googleadsense.web.googleadsense.index');
        Route::get('callback/{uid}', 'callback')->name('googleadsense.web.googleadsense.callback');

    });

});

include "admin.php";