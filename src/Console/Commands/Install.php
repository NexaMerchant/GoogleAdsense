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

class Install extends CommandInterface 

{
    protected $signature = 'GoogleAdsense:install';

    protected $description = 'Install GoogleAdsense an app';

    public function getAppVer() {
        return config("GoogleAdsense.ver");
    }

    public function getAppName() {
        return config("GoogleAdsense.name");
    }

    public function handle()
    {
        $this->info("Install app: GoogleAdsense");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App GoogleAdsense Install cannelled");
            return false;
        }
    }
}