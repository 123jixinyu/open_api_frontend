<?php

namespace App\Http\Controllers;

use App\Model\RelUserPrivilege;
use App\Model\UserPrivilegeV;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Hash;

class ConsoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('console.index');
    }

    /**
     * 显示控制台中的我的接口
     * @return $this
     */
    public function api()
    {
        $user_id = Auth::id();
        $my_api = UserPrivilegeV::where(['user_id' => $user_id])->get();
        return view('console.api')->with(['api' => $my_api]);
    }

    /**
     * 显示控制台api密钥页
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function apikey()
    {
        return view('console.key');
    }

    public function updateKey()
    {
        $user=User::find(Auth::id());
        $user->apikey=md5(uniqid() . time());
        $user->save();
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $user = User::find(Auth::id());
        return view('user.edit')->with(['user' => $user]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'name' => 'required|between:1,255'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $user = User::find(Auth::id());
        $user->name = $request->input('name');
        $user->save();
        return back();
    }

    public function showPass(Request $request)
    {
        return view('console.password');
    }

    public function password(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
            'password' => 'required|between:1,255',
            'new_password' => 'required|min:6|confirmed|between:1,255',
        ]);
        $validator->after(function ($validator) use ($request) {
            $user = User::find(Auth::id());
            $old_password = $user->password;
            $new_password = $request->input('password');
            if (!Hash::check($new_password, $old_password)) {
                $validator->errors()->add('old_password', '原密码输入不正确');
            }

        });
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
        }
        $user = User::find(Auth::id());
        $user->password = Hash::make($request->input('new_password'));
        $user->save();
        return redirect('console/api');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
