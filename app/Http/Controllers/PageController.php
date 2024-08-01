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
    public function all(){
        $types = type_biens::all();
        $villes = villes::all();
        $biens = Biens::all();
        return view('biens.allbiens', compact('biens', 'villes','types'));
    }

    public function location(){
        $biens = Biens::all();
        return view('biens.location', compact('biens'));
    }
    public function vente(){
        $biens = Biens::all();
        return view('biens.vente', compact('biens'));
    }
    public function publish(){
        $types = type_biens::all();
        $villes = villes::all();
        return view('biens.create', compact('types', 'villes'));
    }

}
