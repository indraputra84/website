<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\RandomPick;
use Alert;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $article = Article::join('category','articles.id_category','=','category.id_category')
        ->select('articles.*','category.category')->latest()->paginate(5);
        $most_popular = Article::inRandomOrder()->paginate(5);
        $randompick = RandomPick::
        join('articles','random_picks.id_article', '=', 'articles.id_article')
        ->select('articles.*','random_picks.*')->inRandomOrder()->get();
        return view('article.index',compact('article','randompick','most_popular','category'));
    }

    public function article($id_article)
    {
        $category = Category::all();
        $article = Article::where('id_article',$id_article)
        ->join('category','articles.id_category','=','category.id_category')
        ->select('articles.*','category.*')->get();
        $most_popular = Article::inRandomOrder()->paginate(5);
        $randompick = RandomPick::
        join('articles','random_picks.id_article', '=', 'articles.id_article')
        ->select('articles.*','random_picks.*')->inRandomOrder()->get();
        return view('article.article',compact('article','randompick','most_popular','category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $article = Article::all();
        return view('admin.create',compact('article'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cover = $request->file('cover')->store('cover');

        Article::create([
            'judul'=>request('judul'),
            'cover'=>$cover,
            'article'=>request('article'),
            'author'=>request('author'),
            'id_category'=>request('category'),
            'no_category'=>request('category')
        ]);

        Alert::success('Data Berhasil Diinputkan', 'Success');
        return redirect()->route('admin.article');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_article)
    {
        $article = Article::where('id_article', $id_article)->get();
        return view('admin.editarticle', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_article)
    {
        $cover = $request->file('cover')->store('cover');

        $article = Article::where('id_article', $id_article)->first();
        $article->judul = $request->judul;
        $article->cover = $cover;
        $article->article = $request->article;
        $article->id_category = $request->category;
        $article->no_category = $request->category;
        $article->author = $request->author;
        $article->save();
        Alert::success('Data Berhasil Diupdate', 'Success');
        return redirect()->route('admin.tablearticle')->with('alert-success', 'Data berhasil diubah!');
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

     public function search(Request $request)
    {
      $category = Category::all();
      $search = $request->get('Search-box');
      $result = Article::where('judul','like','%'.$search.'%')
        ->orWhere('author','like','%'.$search.'%')
        ->join('category','articles.id_category','=','category.id_category')
        ->select('articles.*','category.*')
        ->paginate(5);
      $most_popular = Article::inRandomOrder()->paginate(5);
      $randompick = RandomPick::
      join('articles','random_picks.id_article', '=', 'articles.id_article')
      ->select('articles.*','random_picks.*')->inRandomOrder()->get();
      return view('article.result', compact('result','most_popular','randompick','category'));
    }
}
