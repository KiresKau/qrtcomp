<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Company;
use App\Contact;
use App\Driver;
use App\News;
use Illuminate\Http\Request;

class DriverController extends Controller
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
        $drivers = Driver::all();
        $contacts = Contact::all();
        $company = Company::all();
        $cargos = Cargo::all();

        return view('drivers', ['contacts' => $contacts, 'company' => $company, 'drivers' => $drivers, 'cargos' => $cargos]);
    }

    public function cargo($slug){
        $drivers = Driver::all();
        $contacts = Contact::all();
        $company = Company::all();
        $cargos = Cargo::all();

        $car = Driver::where('slug', '=', $slug)->first();
        $carg = Cargo::where('slug', '=', $slug)->first();

        return view('cargo', ['contacts' => $contacts, 'company' => $company, 'drivers' => $drivers, 'car' => $car,
            'cargos' => $cargos, 'carg' => $carg
            ]);
    }

}


