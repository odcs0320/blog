<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        // return $request->path();
        //return $request->url();
        //return $request->fullurl();
        //return $request->method();

        //return $request->header('5555');
        //return $request->header('5555');
        //return $request->bearerToken();

        //return $request->ip();

        // 取得完整檔名
        //$filenameWithExt = $request->file('pic')->getClientOriginalName();

        // 只取檔名
        //$filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

        // 只取副檔名
        //$extension = $request->file('pic')->getClientOriginalExtension();

        // 生成新檔名
        //$fileNameToStore = $filename . '_' . time() . '.' . $extension;

        // 儲存圖片
        //$path = $request->file('pic')->storeAs('public/storage/images', $fileNameToStore);

        //return $path;

        //$validator = Validator::make($request->all(), [
        //  'title' => 'required|max:10',
        //  'body' => 'required',
        //]);

        //if ($validator->fails()) {
        //  return $validator;
        //}
        //return 'OK';

        $validated = $request->rule();

        //return $validated;

        if ($validated->fails()) {
            return $validated;
        }
        return 'OK';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}