<?php

namespace Scaleflex\LapTrinhPhp;

use Scaleflex\SegmentCommons\HyperServiceProvider;
use Illuminate\Support\Facades\Config;
use Illuminate\Database\Capsule\Manager as DB;

class TuanSegementServiceProvider extends HyperServiceProvider
{
    protected $commands = [];

    /**
     * Register commands, so that they are visible on the list
     * when you type "php artisan" on Hyperloop.
     *
     * Without this code, the Commands:
     * - will work in Segments
     * - BUT WON'T WORK in Hyperloop
     *
     * So this is really important to keep it for Hyperloop publishing.
     *
     * @return void
     */
    public function register()
    {
        parent::buildAllCommands(__DIR__, __NAMESPACE__);

        $this->commands($this->commands);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        /** Set connect DB */
        $config = Config::get('database_laptrinhphp');

        if ($config) {
            $db = new DB;
            $db->addConnection($config);
            $db->setAsGlobal();
            $db->bootEloquent();
        }

        parent::groupAllRouters(__DIR__, __NAMESPACE__);

        parent::mergeAllConfigs(__DIR__);

        parent::publishAllConfigs(__DIR__);
    }
}
