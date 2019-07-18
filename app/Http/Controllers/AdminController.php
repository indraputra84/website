<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Contact;
use App\Article;
use App\Requests;
use App\RandomPick;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function admin()
    {
    	$contactcount = Contact::count();
        $requestcount = Requests::count();
        return view('admin.home', compact('contactcount','requestcount'));
    }
}
