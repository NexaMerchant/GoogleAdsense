<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-09-02 15:35:03
 * @link https://github.com/xxxl4
 * 
 */
return [
    /**
     * 
     * The name of the package
     */
    'name' => 'GoogleAdsense',
    /**
     * 
     * The version of the package
     */
    'version' => '1.0.0',
    /**
     * 
     * The version number of the package
     */
    'versionNum' => '100',

    /**
     *
     * Enabled
     */
     'enable' => env('GoogleAdsense.ENABLED', true),

     /*
      * Composer Package Name
     */
    'composer' => 'nexa-merchant/googleadsense',

    /**
     * 
     * The description of the package
     */
    'description' => '',

    /**
     * 
     * The author of the package
     */
    'author' => 'Steve',

    /**
     * 
     * The email of the author
     */
    'email' => 'email@example.com',

    /**
     * 
     * The homepage of the package
     */
    'homepage' => 'https://github.com/xxl4',

    /**
     * 
     * The keywords of the package
     */
    'keywords' => [],

    /**
     * 
     * The license of the package
     */
    'license' => 'MIT',

    /**
     * 
     * The type of the package
     */
    'type' => 'library',

    /**
     * 
     * The support of the package
     */
    'support' => [
        'email' => 'email@example.com',
        'issues' => 'https://github.com/xxl4'
    ],

    /**
     * 
     * Auth Config for google adsense
     * 
     */
    'AuthConfig' => storage_path('app/googleadsense.json'),

    /**
     * 
     * Access Type for google adsense
     *
     */
    'AccessType' => 'offline',

    /**
     * 
     * Scopes for google adsense
     *
     */
    'Scopes' => [
        'https://www.googleapis.com/auth/adsense.readonly',
        'https://www.googleapis.com/auth/adsense'
    ],

    /**
     * 
     * Redirect URI for google adsense
     *
     */

    'RedirectUri' => 'http://localhost:8000/googleadsense/callback',

    /**
     * 
     * Google Adsense Auth Config File
     * 
     */
    'auth_config_file' => storage_path('app/client_secret_33839582772-7bqi2gto92jms75ujbhvfo22je2haold.apps.googleusercontent.com.json'),
];