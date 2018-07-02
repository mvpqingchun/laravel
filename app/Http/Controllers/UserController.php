<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
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
    
    public function show(Request $request, $id = 1) {
//        var_dump($request->isMethod('post'));
        if ($request->isMethod('post') && $request->filled('photo')) {
//            var_dump('1111');die;
            // Request $request, 
            echo '<pre />';
    //        var_dump($request->path());
    //        var_dump($request->is('user/show/*'));
    //        var_dump($request->url());
    //        var_dump($request->fullUrl());
    //        var_dump($request->method());
    //        var_dump($request->isMethod('get'));
    //        var_dump($id);
//            var_dump($request->a);
//            var_dump($request->has('name'));
//            var_dump($request->filled('name'));
            var_dump($request->file('photo'));
            var_dump($request->all());
            var_dump($request->photo);
            die;
            return view('user.profile', ['user' => User::findOrFail($id)]);
        } 
//        var_dump('2222');die;
        return view('user.show', ['id' => $id]);
    }
}
