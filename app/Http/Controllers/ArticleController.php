<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $articles = Article::all();

        //$articles = Article::where('id', 2)->get();

        //return $articles;

        //查詢多筆多條件資料
        $articles = Article::where('id', '<=', 8)->orderBy('id', 'desc')->get();

        /*first() firstOrFall() //只回傳第一筆資料,Fail為如果沒資料會跳出錯誤
        find(id) findOrFail(id) //根據id來查詢結果,Fail為如果沒資料會跳出錯誤
        value(colName) //只從第一列的指定欄位取值
        min(colName) max(colName) //回傳特定欄位的最小/最大值
        sum(colName) //回傳特定欄位所有值的總和
        avg(colName) //回傳特定欄位所有值的平均值
        with(colName) //同時回傳所參考的資料*/

        //查詢指定時間
        //$date = Carbon::createFromFormat('Y-m-d h:i:s', '2020-12-8 00:00:00');
        //$articles = Article::where('created_at', '>', $date)->get();

        return $articles;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = ['class1' => '分類1', 'class2' => '分類2', 'class3' => '分類3'];
        return view('articles.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        /* if ($request->hasFile('pic')) {
        $file = $request->file('pic'); //獲取UploadFile例項
        if ($file->isValid()) { //判斷檔案是否有效
        //$filename = $file->getClientOriginalName(); //檔案原名稱
        $extension = $file->getClientOriginalExtension(); //副檔名
        $filename = time() . "." . $extension; //重新命名
        $data['pic'] = $filename;
        $file->move('D:\xampp8\htdocs\form\storage\app\public\images', $filename); //移動至指定目錄
        }
        }

        return 'OK';*/

        Article::create($request->all()); //取出所有欄位資料後新增

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //$article = Article::find($id); //找到id為$id的資料
        //$article = Article::findOrFail($id); //同上,找不到會拋出錯誤

        //$article = Article::where('id', $id);

        //設定查詢條件並回傳第一筆資料(where,orderBy:SQL語句建構,first():進行查詢)
        //$article = Article::where('id', $id)->orderBy('created_at', 'asc')->first();
        //dd($article);

        //查詢多筆資料
        //$article = Article::all();

        //pluck
        $article = Article::pluck('author', 'id');

        //查詢多筆多條件資料
        //$article = Article::where('id', '<=', 8)->orderBy('id', 'desc')->get();

        return $article;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
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
        $article = Article::find($id);
        //$article->subject = $request[('subject')];
        $article->subject = '999';
        $article->save();
        return redirect('/');

        // 取得欲更新的文章
        $article = Article::find($id);

// 將 $request 中的資料填入 $article 中
        $article->fill($request->all());

// 儲存 $article
        $article->save();

// 重新導向到文章列表頁面
        return redirect()->route('articles.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
    }
}