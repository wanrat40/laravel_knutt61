<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Article;
use Auth;
use App\Tag;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'show']]);

    }

    public function index(){
        $articles = Article::published()->get();
        return view('articles.index', compact('articles'));
    }

    public function show($id){
        $article = Article::find($id);
        if(empty($article))
            abort(404);
        return view('articles.show', compact('article'));
    }

    public function create(){
        $tag_list = Tag::pluck('name', 'id');
        return view('articles.create', compact('tag_list'));
    }

    public function store(ArticleRequest $request) {
        $article = Article::create($request->all());
        $article->user_id = Auth::user()->id;
        $article->save();
        $tagsId = $request->input('tag_list');
        if(!empty($tagsId))
            $article->tags()->sync($tagsId);
        return redirect('articles');
    }



    public function edit($id){ $article = Article::find($id);
        if(empty($article))
            abort(404);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);
        $article->update($request->all());
        $tagsId = $request->input('tag_list');
        if(!empty($tagsId))
            $article->tags()->sync($tagsId);
        else
            $article->tags()->detach();
        return view('articles.edit',compact('article', 'tag_list'));
    }

    public function destroy($id){
        $article = Article::findOrFail($id); $article->delete();
        return redirect('articles');
    }



}
