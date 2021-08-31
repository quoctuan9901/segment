<?php

use Scaleflex\SegmentCommons\HyperCli;
use Scaleflex\LapTrinhPhp\Controllers\TuanSegementController;
use Illuminate\Database\Capsule\Manager as DB;
$cli = new HyperCli;

/** CLI */
$cli->expose('demo', 'TuanSegementCli');

/** HTTP API */
$router->get('index', [TuanSegementController::class, 'index']);
