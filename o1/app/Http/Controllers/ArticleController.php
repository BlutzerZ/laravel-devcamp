<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article.index', [
            'article' => Article::get()
        ]);
    }
    
    public function create(){
        return view('article.form');
    }
    public function store(Request $request){
        $input = $request->only(['title', 'description']);
        $create = Article::create($input);

        if($create) {
            return redirect()->route('article.index');
        }

        return abort(500);
    }

    public function edit($id){
        $article = Article::find($id);
        return view('article.form', [
            'article' => Article::find($id)
        ]);
    }

    public function update(Request $request, $id){
        $input = $request->only(['title', 'description']);
        $article = Article::find($id);
        $update = $article->update($input);

        if($update) {
            return redirect()->route('article.index');
        }

        return abort(500);
    }

    public function destroy($id){
        $article = Article::find($id);
        $delete = $article->delete();

        if($delete) {
            return redirect()->route('article.index');
        }

        return abort(500);
    }
}
