<?php

namespace Scaleflex\LapTrinhPhp\Controllers;

use Scaleflex\SegmentCommons\HyperWeb;
use Scaleflex\LapTrinhPhp\Manager\TuanSegementManager;
use Illuminate\Http\Request;
use Illuminate\Database\Capsule\Manager as DB;

class TuanSegementController extends HyperWeb
{
    private $manager;

    /**
     * LapTrinhPhpController constructor.
     */
    public function __construct(TuanSegementManager $manager)
    {
        $this->manager = $manager;
    }

    public function index ()
    {
        echo 'HTTP API Segment <br>';
        return json_encode($this->manager->data());
    }
}
