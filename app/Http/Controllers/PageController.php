<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\type_biens;
use App\Models\villes;
use App\Models\Biens;

class PageController extends Controller
{
    public function home(){
        $biens = Biens::orderBy('id','desc')->where('accept',1)->paginate(3);

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
        $biens = Biens::with(['User','ville','type_biens'])->orderBy('id','desc')->where('accept',1)->paginate(6);
        
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
