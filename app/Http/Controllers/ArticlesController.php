<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article;
use Illuminate\Http\Request;
use Input;
use App\Http\Requests\ArticleFormRequest;
class ArticlesController extends Controller {

	public function index(){

		$articles = Article::all();
		return view('articles.index', compact('articles'));
	}

	public function show($id){
		$article = Article::find($id);
		return view('articles.show')->with('article',$article);
	}

	public function create(){
		return view('articles.create');
	}

	public function store(ArticleFormRequest $request){
		$title = $request->input('title');
		$content =$request->input('content');

		Article::create([
			'title' => $title,
			'content' => $content
			]);

		return redirect()-> route('article.index');
	}
}
