<?php

namespace App\Http\Controllers;

use App\Models\Article; // ①コントローラからモデルに問い合わせます。
 
class ArticlesController extends Controller {
 
  public function index() {
    $articles = Article::all();
    return view('articles.index', compact('articles'));
  }
 
  public function show($id) {
    $article = Article::findOrFail($id); // ②モデルがDBからデータを取得します。
    return view('articles.show', compact('article'));
  }
}