<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', ['articles' => $articles]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        // インスタンスの作成
        $article = new Article;

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        // インスタンスに値を設定して保存
        $article->save();

        // 登録後のデータを返す(idが追加される)
        return redirect('/articles');
    }

    public function show($id)
    {
        // articleモデルから1件を取得
        $article = Article::find($id);
        return view('articles.show', ['article'=>$article]);
    }

    public function edit(Request $request, $id)
    {
        $article = Article::find($id);
        return view('articles.edit', ['article'=>$article]);
    }

    public function update(Request $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $article = article::find($id);

        // 値の用意
        $article->title = $request->title;
        $article->body = $request->body;
        $article->timestamps = false;

        // 保存
        $article->save();

        // 更新後のデータを返す
        return redirect('/articles');
    }

    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect('/articles');
    }
}
