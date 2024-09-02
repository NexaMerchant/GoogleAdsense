<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-09-02 15:35:03
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\GoogleAdsense\Console\Commands;

use NexaMerchant\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'GoogleAdsense:uninstall';

    protected $description = 'Uninstall GoogleAdsense an app';

    public function getAppVer() {
        return config("GoogleAdsense.ver");
    }

    public function getAppName() {
        return config("GoogleAdsense.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App GoogleAdsense UnInstall cannelled");
            return false;
        }
    }
}