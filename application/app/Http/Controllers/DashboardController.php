<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Contact;
use App\Requests;
use App\Category;
use Auth;
use Alert;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        $article = Article::
        join('category','articles.id_category','=','category.id_category')
        ->select('articles.*','category.*')
        ->get();
        $id = Auth::id();
        $user = User::where('id',$id);
        return view('admin.home',compact('article','user','contactcount','requestcount'));
    }

    public function articletable()
    {
        $article = Article::
        join('category','articles.id_category','=','category.id_category')
        ->select('articles.*','category.*')
        ->get();
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        return view('admin.tablearticle',compact('article','contactcount','requestcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        $article = Article::all();
        return view('admin.create2',compact('article','contactcount','requestcount','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        $article = Article::where('id_article', $id_article)->get();
        return view('admin.editarticle', compact('article','requestcount','contactcount'));
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
        $article->id_category = $request->category;
        $article->article = $request->article;
        $article->author = $request->author;
        $article->save();
        Alert::success('Data Berhasil Diupdate', 'Success');
        return redirect()->route('admin.article')->with('alert-success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_article)
    {
        $article = Article::where('id_article', $id_article)->first();
        $article->delete();

        return redirect()->route('admin.article')->with('alert-success', 'Data berhasil dihapus');
    }

    public function setting($id)
    {
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        $id = Auth::id();
        $user = User::where('id',$id)->get();
        return view('admin.settings',compact('user','contactcount','requestcount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function settingconfirm(Request $request, $id)
    {
        $request->user()->where('id', $id)->first()->fill([
            'password' => Hash::make($request->password),
            'name' => $request->name,
            'email' => $request->email
        ])->save();

        return redirect()->route('admin.home');
    }
}
