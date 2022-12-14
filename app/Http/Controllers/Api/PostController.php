<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Throwable;

class PostController extends Controller
{
    //用於生成 JSON 字串
    private function makeJson($status, $data, $msg)
    {
        //轉 JSON 時確保中文不會變成 Unicode
        return response()->json(['status' => $status, 'data' => $data, 'message' => $msg])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::get();

        if (isset($posts) && count($posts) > 0) {
            $data = ['posts' => $posts];
            return $this->makeJson(1, $data, null);
        } else {
            return $this->makeJson(0, null, '找不到任何文章');
        }

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

        //$validated = $request->rule();

        //return $validated;

        //if ($validated->fails()) {
        // return $validated;
        //}
        //return 'OK';

        //$input = ['title' => $request->title, 'content' => $request->content];
        $input = $request->only(['title', 'content', 'pic', 'sort', 'enabled', 'status']);
        $post = Post::create($input);

        if (isset($post)) {
            $data = ['post_id' => $post->id];
            return $this->makeJson(1, $data, '新增文章成功');
        } else {
            return $this->makeJson(0, null, '新增文章失敗');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);

        if (isset($post)) {
            $data = ['post' => $post];
            return $this->makeJson(1, $data, null);
        } else {
            return $this->makeJson(0, null, '找不到該文章');
        }

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
        try {
            $post = Post::findOrFail($id);

            //$post->title = $request->title;
            //$post->content = $request->content;
            //$post->save();

            $input = $request->only(['title', 'content', 'pic', 'sort', 'enabled', 'status']);

            if ($input['enabled'] == "1") {
                $input['enabled'] = true;
            } else {
                $input['enabled'] = false;
            }
            $post->update($input);
        } catch (Throwable $e) {
            //更新失敗
            $data = ['post' => $post];
            return $this->makeJson(0, null, '更新文章失敗');
        }

        $data = ['post' => $post];
        return $this->makeJson(1, $data, '更新文章成功');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();
        } catch (Throwable $e) {
            //刪除失敗
            return $this->makeJson(0, null, '刪除文章失敗');
        }
        return $this->makeJson(1, null, '刪除文章成功');

    }
}