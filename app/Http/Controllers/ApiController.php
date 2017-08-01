<?php

namespace App\Http\Controllers;

use App\Model\Api;
use App\Model\Category;
use App\Model\RelUserPrivilege;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Auth;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id = '')
    {
        $category = Category::all();

        if ($id == '') {
            return view('api.index')->with([
                'category' => $category,
                'now' => null,
                'api' => Api::all()
            ]);
        } else {
            $validator = Validator::make(['id' => $id], [
                'id' => 'required|exists:category,id'
            ]);
            if (!$validator->fails()) {
                $now = Category::find($id);
                return view('api.index')->with([
                    'category' => $category,
                    'now' => $now,
                    'api' => Api::where(['category_id' => $id])->get()
                ]);
            }
            return abort(503);
        }

    }

    public function apply($id)
    {

        $user_id = Auth::id();
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|exists:privilege,id'
        ]);
        if (!$validator->fails()) {
            if (!RelUserPrivilege::where(["user_id" => $user_id, "privilege_id" => $id])->first()) {
                RelUserPrivilege::create([
                    "user_id" => $user_id,
                    "privilege_id" => $id
                ]);
            }
            return redirect('console/api');
        }
        return abort(503);
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
        $category = Category::all();

        $validator = Validator::make(['id' => $id], [
            'id' => 'required|exists:privilege,id'
        ]);
        if (!$validator->fails()) {
            $api = Api::find($id);
            $now = Category::find($api->category_id);
            return view('api.detail')->with([
                'category' => $category,
                'now' => $now,
                'api' => $api
            ]);
        }
        return abort(503);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
