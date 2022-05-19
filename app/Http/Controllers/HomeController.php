<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Person;

class HomeController extends Controller
{
    public function HaloQwords(){

        $person = new Person();

        $allPerson = $person::all();

        return view("home", [
            "person" => $allPerson
        ]);

    }

    public function HaloQwordsAPI(){

        $person = new Person();

        $allPerson = $person::all();

        return response()->json([
            "person" => $allPerson
        ]);
    }
}
