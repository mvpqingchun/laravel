<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MemoController extends Controller
{
    /**
     * 实例化一个新的控制器实例。
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');

//        $this->middleware('log')->only('index');

//        $this->middleware('subscribed')->except('store');
    }
    
    public function index(Request $request, $id = 1) {

        return redirect()->route('show');
    }
}
