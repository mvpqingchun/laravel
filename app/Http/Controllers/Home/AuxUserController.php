<?php

namespace App\Http\Controllers\Home;

use Validator;
use App\User;
use App\Model\AuxUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Home\AppController;

class AuxUserController extends AppController
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
    
    public function index() {
        echo '<pre />';
//        $aux_users = DB::select('select * from aux_users');
//        var_dump($aux_users);
        $aux_user = AuxUser::find([40]);
//        $aux_users = DB::table('aux_users')->get();
        var_dump($aux_user);
        die;
        return view('home.auxUser.create');
    }
    
    public function create() {
//        var_dump('111');
//        die;
        return view('home.auxUser.create');
    }
    
    public function store(Request $request) {
//        $this->validate($request, [
//            'nickname' => 'required|max:21',
//            'avatar' => 'required',
//        ]);
        echo '<pre />';
        $messages = [
            'nickname.max' => '数字21!',
            'status.integer' => '数字!',
            'status.max' => '不能超过20!',
            'avatar.required' => '不能为空!',
        ];
        $validator = Validator::make($request->all(), [
            'nickname' => 'required|string',
            'status' => 'required|integer|max:20',
            'avatar' => 'required',
        ], $messages);
        
//        $validator->after(function ($validator) {
//            if ($validator->errors()) {
//                $errors = $validator->errors();
//                $validator->errors()->add('nickname', 'Something is wrong with this field!');
//                var_dump($errors);
//            }
//        });
        
         if ($validator->fails()) {
            return redirect('home/auxUser/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
//        DB::table('aux_users')->insert([
//            ['nickname' => $request->nickname, 'status' => $request->status, 'avatar' => $request->avatar]
//        ]);
//        die;
        $aux_user = new AuxUser();
        $aux_user->nickname = $request->nickname;
        $aux_user->status = $request->status;
        $aux_user->avatar = $request->avatar;
        $res = $aux_user->save();
        var_dump($res);
        die;
    }
    
}
