<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RandomPick;
use App\Contact;
use App\Requests;
use App\Article;
use Alert;

class RandomPickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $randompick = RandomPick::
        join('articles','random_picks.id_article', '=', 'articles.id_article')
        ->select('articles.*','random_picks.*')->get();
        return view('article.desain', compact('randompick'));
    }

    public function indextable()
    {
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        $randompick = RandomPick::
        join('articles','random_picks.id_article', '=', 'articles.id_article')
        ->select('articles.*','random_picks.*')->get();

        return view('admin.tablerp', compact('randompick','contactcount','requestcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        $article = Article::all();
        return view('admin.createrp',compact('article','contactcount','requestcount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RandomPick::create([
            'id_article' => request('id_article')
        ]);

        Alert::success('Data Berhasil Diinputkan', 'Success');
        return redirect()->route('admin.rp');

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
    public function edit($id_rp)
    {
        $randompick = RandomPick::where('id_rp', $id_rp)
            ->join('articles','random_picks.id_article', '=', 'articles.id_article')
            ->select('articles.*','random_picks.*')->get();
        $article = Article::all();
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        return view('admin.editrp', compact('randompick', 'article', 'contactcount','requestcount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_rp)
    {
        $randompick = RandomPick::where('id_rp', $id_rp)->first();
        $randompick->id_article = $request->judul;
        $randompick->save();

        Alert::success('Data Berhasil Diupdate', 'Success');
        return redirect()->route('admin.rp');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_rp)
    {
        $randompick = RandomPick::where('id_rp', $id_rp)->first();
        $randompick->delete();

        return redirect()->route('admin.rp');
    }
}
