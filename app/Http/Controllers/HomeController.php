<?php

namespace App\Http\Controllers;

use App\Company;
use App\Contact;
use App\Home;
use App\Photo;
use Faker\Provider\Image;
use Illuminate\Http\Request;

class HomeController extends Controller
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
        $homes = Home::orderBy('id', 'desc')->get();
        $id = Home::all()->max('id');
        $homess = Home::all()->where('id', '=', $id)->first();
        $company = Company::all();
        $contacts = Contact::all();
        return view('home', ['contacts' => $contacts, 'company' => $company, 'homes' => $homes, 'homess' => $homess]);
    }

    public function get(){

        $homes = Home::all();
        return $homes;
    }

}
