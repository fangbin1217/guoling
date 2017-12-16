<?php

namespace App\Http\Controllers;

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
        $travelList = \App\Models\Travel\Travel::getList();
        if ($travelList) {
            foreach ($travelList as $key=>$val) {
                $travelList[$key]['tagName'] = '';
                $travelList[$key]['content'] = mb_substr($val['content'], 0, 70, 'utf-8').'..';

                if (isset(config('local')['travel_tag'][$val['tag']])) {
                    $travelList[$key]['tagName'] = config('local')['travel_tag'][$val['tag']];
                }

                $travelList[$key]['indexImage'] = config('local')['website'].'/'.$val['index_image'];

                $travelList[$key]['utime'] = \App\Models\Common\Date::getDateToString($val['utime']);

                $travelList[$key]['travelLink'] = config('local')['website'].'/travel/index/'.$val['id'];
            }
        }
        //$user = User::getUserById(1);
        $this->result['sidebar'] = ['now' =>date('Y-m-d H:i:s', strtotime('-1 days'))];
        $this->result['data'] = ['travelList' => $travelList];
        $this->result['myview'] = 'index.index.welcome';
        return view('index.index', $this->result);

    }

    public function resume()
    {
        $this->result['sidebar'] = ['now' =>date('Y-m-d H:i:s', strtotime('-1 days'))];
        //$this->result['data'] = ['article1'=>'杭州西湖'];
        $this->result['myview'] = 'index.about.resume';
        return view('index.index', $this->result);
    }

    //
}
