<?php

namespace MyVendor\Contactform\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MyVendor\Contactform\Models\ContactForm;

class HomeController extends Controller
{
    public function index(){
        return view('contact::form');
    }

    public function saveForm(Request $request){
        ContactForm::create($request->all());
        return redirect(route('contact'));
    }
}