<?php

namespace App\Http\Controllers;


use App\Models\Formule;
use Illuminate\Http\Request;
use Paydunya\Paydunya;

class HomeController extends Controller
{
    public function index(){
        //echo config('services.paydunya.master_key');
        //echo config('services.paydunya.test_public_key');
        $formules = Formule::all();
        //dd($formules);
        return view("home.index",compact('formules'));
    }

    public function formule($id){
        $formule = Formule::find($id);

        return view('home.formule', compact('formule'));
    }
}
