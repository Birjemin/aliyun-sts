<?php
/**
 * Created by PhpStorm.
 * User: birjemin
 * Date: 2019/10/23
 * Time: 18:20
 */

namespace Birjemin\AliyunSts;


use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Class ServiceProvider
 * @package Birjemin\AliyunCdn
 */
class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Boot the provider.
     */
    public function boot()
    {
    }

    /**
     * Setup the config.
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/../config/aliyun-sts.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('aliyun-sts.php')], 'aliyun-sts');
        }
        $this->mergeConfigFrom($source, 'aliyun-sts');
    }

    /**
     * Register the provider.
     */
    public function register()
    {
        $this->setupConfig();
    }

    /**
     * @return mixed
     */
    protected function getRouter()
    {
        return $this->app->router;
    }
}
