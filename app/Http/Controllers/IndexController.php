<?php

namespace App\Http\Controllers;
use App\Models\User\User;

class IndexController extends Controller
{
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
        $data = ['now' => date('Y-m-d H:i:s'), 'website' => $website];

        return view('index.index.welcome', $data);

    }

    //
}
