<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contact;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(5);
        $contacts = Contact::all();
        $company = Company::all();

        return view('news', ['news' => $news, 'contacts' => $contacts, 'company' => $company]);
    }

    public function solonew($slug)
    {
        $news = News::all();
        $contacts = Contact::all();
        $company = Company::all();

        $new = News::where('slug', '=', $slug)->first();

        return view('new', ['new' => $new, 'news' => $news, 'contacts' => $contacts, 'company' => $company]);
    }

}
