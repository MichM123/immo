<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_biens;
use App\Models\villes;
use App\Models\Biens;

class PageController extends Controller
{
    public function home(){
        $biens = Biens::all();
        return view('biens.index', compact('biens'));
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function publish(){
        $types = type_biens::all();
        $villes = villes::all();
        return view('biens.create', compact('types', 'villes'));
    }

}
