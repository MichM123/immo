<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\type_biens;
use App\Models\villes;
use App\Models\Annonce;
use App\Models\Images;
use App\Models\User;
use App\Models\Biens;
use App\Http\Requests\StoreAnnonceRequest;
use Illuminate\Support\Facades\Auth;

class BiensController extends Controller
{
    public function index()
    {
        $biens = Biens::all();
        return view('biens.index', compact('biens'));
    }
    public function create()
    {
        $types = type_biens::all();
        $villes = villes::all();
        return view('biens.create', compact('types', 'villes'));
    }
    public function store(StoreAnnonceRequest $request)
    {
        if ($request->hasFile('document')) {
            $DocumentPath = $request->file('document')->store('documents', 'public');
            $bien = Biens::create([
                'nom' => $request->nom,
                'adresse' => $request->adresse,
                'description' => $request->description,
                'code_postal' => $request->code_postal,
                'superficie' => $request->superficie,
                'nombre_pieces' => $request->nombre_pieces,
                'prix' => $request->prix,
                'type_id' => $request->type_id,
                'ville_id' => $request->ville_id,
                'document' => $DocumentPath,
                'statut' => $request->statut,
                'user_id' => Auth::id(),
            ]);
        }
            
        if($bien){
            $annonces = $bien->annonces()->create([
                'type' => $request->type,
            ]);
            if ($request->hasFile('images')) {
                foreach($request->file('images') as $image) {
                    $Path = $image->store('images', 'public');
                    $bien->images()->create([
                    'biens_id' => $bien->id,
                    'url' => $Path,
                    ]);
                }
            }
        }
           
        return redirect()->route('home');
    }

}
