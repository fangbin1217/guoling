<?php

namespace App\Http\Controllers;
use App\Models\User\User;


/**
 * 首页入口
 * Class IndexController
 * @package App\Http\Controllers
 */
class IndexController extends Controller
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
    public function index()
    {
        //$user = User::getUserById(1);
        $local = config('local');
        $website = $local['website'];
        $this->result['sidebar'] = ['now' =>date('Y-m-d H:i:s', strtotime('-1 days'))];
        $this->result['data'] = ['article1'=>'杭州西湖'];
        $this->result['myview'] = 'index.index.welcome';
        return view('index.index', $this->result);

    }

    //
}
