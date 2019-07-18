<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Contact;
use App\Article;
use App\Requests;
use App\RandomPick;
use Alert;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        return view('admin.tablecategory', compact('category','contactcount','requestcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createmultiple()
    {
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        return view('admin.createmcategory', compact('contactcount','requestcount'));
    }

    public function storemultiple(Request $request)
    {
        $index = 0;
        $id = request('id[]')
        for ($index = 0;$index < $id;$index++) {
            Category::create([
                'id'=>$id,
                'category'=>request('category[$index]')
            ]);
        }

        Alert::success('Data Berhasil Diinputkan', 'Success');
        return redirect()->route('admin.category');
    }

    public function create()
    {
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        $category = Category::all();
        return view('admin.createcategory',compact('category','contactcount','requestcount'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Category::create([
            'category'=>request('category')
        ]);

        Alert::success('Data Berhasil Diinputkan', 'Success');
        return redirect()->route('admin.category');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_category)
    {
        $article = Article::
        with('category')
        ->where('id_category', $id_category)
        ->latest()->paginate(5);
        $test = Article::where('no_category',$id_category)
        ->join('category','articles.id_category','=','category.id_category')
        ->select('articles.*','category.*')->get();
        $category = Category::all();
        $most_popular = Article::inRandomOrder()->paginate(5);
        $randompick = RandomPick::
        join('articles','random_picks.id_article', '=', 'articles.id_article')
        ->select('articles.*','random_picks.*')->inRandomOrder()->get();
        return view('article.showcategory', compact('article','most_popular','randompick','category','test'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_category)
    {
        $contactcount = Contact::count();
        $requestcount = Requests::count();
        $category = Category::where('id_category', $id_category)->get();
        return view('admin.editcategory', compact('category','requestcount','contactcount'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_category)
    {
        $category = Category::where('id_category',$id_category)->first();
        $category->category = $request->category;
        $category->save();

        Alert::success('Data Berhasil Diupdate', 'Success');
        return redirect()->route('admin.category')->with('alert-success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_category)
    {
        $category = Category::where('id_category',$id_category)->first();
        $category->delete();

        return redirect()->route('admin.category');
    }
}
