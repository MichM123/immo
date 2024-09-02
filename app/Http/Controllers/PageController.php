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
        return view('client.about');
    }
    public function contact(){
        return view('client.contact');
    }
    public function all(Request $request){
        $types = type_biens::all();
        $villes = villes::all();
        $biens = Biens::all();
        // Filtrage
        if ($request->filled('ville_id')) {
            $biens->where('ville_id', $request->ville_id);
        }
        if ($request->filled('type_id')) {
            $biens->where('type_id', $request->type_id);
        }
        if ($request->filled('prix')) {
            $biens->where('prix', '>=', $request->prix);
        }
        if ($request->filled('prix_max')) {
            $biens->where('prix', '<=', $request->prix_max);
        }
        if ($request->filled('surface_min')) {
            $biens->where('superficie', '>=', $request->surface_min);
        }
        if ($request->filled('surface_max')) {
            $biens->where('superficie', '<=', $request->surface_max);
        }
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
