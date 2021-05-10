<?php

namespace App\Http\Controllers;


use App\Models\Formule;
use Illuminate\Http\Request;
use Paydunya\Paydunya;

class HomeController extends Controller
{
    public function index()
    {
        $formules = Formule::all();

        return view("home.index",compact('formules'));
    }

    public function formule($id){
        $formule = Formule::find($id);

        return view('home.formule', compact('formule'));
    }
}
