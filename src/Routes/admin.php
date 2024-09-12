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
use NexaMerchant\GoogleAdsense\Http\Controllers\Admin\ExampleController;
use NexaMerchant\GoogleAdsense\Http\Controllers\Api\GoogleAdsenseController;

Route::group(['middleware' => ['admin','admin_option_log'], 'prefix' => config('app.admin_url')], function () {
    Route::prefix('googleadsense')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('googleadsense.admin.example.demo');

        });

        // Google Adsense
        Route::get('/google/adsense/accounts/list', [GoogleAdsenseController::class, 'AccountsList']);
        Route::get('/google/adsense/accounts/get', [GoogleAdsenseController::class, 'AccountsGet']);

        Route::get('/google/adsense/accounts/adclients/list', [GoogleAdsenseController::class, 'AccountsAdclientsList']);
        Route::get('/google/adsense/accounts/adclients/get', [GoogleAdsenseController::class, 'AccountsAdclientsGet']);

        Route::get('/google/adsense/accounts/adclients/adunits/list', [GoogleAdsenseController::class, 'AccountsAdclientsAdunitsList']);
        Route::get('/google/adsense/accounts/adclients/adunits/get', [GoogleAdsenseController::class, 'AccountsAdclientsAdunitsGet']);
        Route::get('/google/adsense/accounts/adclients/adunits/get-ad-code', [GoogleAdsenseController::class, 'AccountsAdclientsAdunitsGetAdCode']);
        
        Route::get('/google/adsense/accounts/adclients/adunits/custom-channels/list', [GoogleAdsenseController::class, 'AccountsAdclientsAdunitsCustomChannelsList']);

        // Account Reports Generate
        Route::get('/google/adsense/accounts/reports/generate', [GoogleAdsenseController::class, 'AccountsReportsGenerate']);

    });
});