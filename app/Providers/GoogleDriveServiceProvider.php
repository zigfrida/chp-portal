<?php

namespace App\Providers;

use League\Flysystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class GoogleDriveServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        \Storage::extend('google', function($app, $config) {
            $client = new \Google_Client();
            $client->setClientId($config['clientId']);
            $client->setClientSecret($config['clientSecret']);
            $client->refreshToken($config['refreshToken']);
            $service = new \Google_Service_Drive($client);
            $options = [];
            if(isset($config['teamDriveId'])) {
                $options['teamDriveId'] = $config['teamDriveId'];
            }
            $adapter = new GoogleDriveAdapter($service, $config['folderId'], $options);
            return new \League\Flysystem\Filesystem($adapter);
        });
    }
}
