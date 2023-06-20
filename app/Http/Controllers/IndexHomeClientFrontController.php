<?php

namespace App\Http\Controllers;

use App\Models\Partenaire;
use Illuminate\Http\Request;

class IndexHomeClientFrontController extends Controller
{
    //

    public function index()
    {

        //$partenaire
        //$team
        //$projets   for concat in the view function in order to get them on the client side

        return view('welcome');
    }
}
