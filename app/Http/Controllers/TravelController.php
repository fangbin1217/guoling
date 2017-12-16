<?php

namespace App\Http\Controllers;

class TravelController extends Controller
{

    private $result = [];

    public function __construct() {
        $this->result = $this->modelCommon;
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index($id)
    {


        $travelInfo = \App\Models\Travel\Travel::getInfoById($id);
        if ($travelInfo) {
            $travelInfo['indexImage'] = config('local')['website'].'/'.$travelInfo['index_image'];
        }
        $this->result['sidebar'] = ['now' =>date('Y-m-d H:i:s', strtotime('-1 days'))];
        $this->result['data'] = ['travelInfo' => $travelInfo];
        $this->result['myview'] = 'index.travel.info';
        return view('index.index', $this->result);

    }
}
