<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Requests\ArticleRequest;
use Illuminate\HttpResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;



class ArticlesController extends Controller{

    public function index(){
        //return 'get all';

        $articles = Article::latest('published_at')->published()->get();

        return view ('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(ArticleRequest $request){
        //validation

        Article::create($request->all());

        return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request){
        $article = Article::findOrFail($id);

        $article->update($request->all());
        return redirect('articles');
    }

    public function delete($id){
        $article = Article::findOrFail($id);

        $article->delete();
        return redirect('articles');
    }

}
