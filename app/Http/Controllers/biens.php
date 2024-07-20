<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\type_biens;
use App\Models\ville;
use App\Models\annonces;
use App\Models\image;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class biens extends Controller
{
    public function index()
    {
        return view('biens.index',);
    }
    public function create()
    {
        $types = type_biens::all();
        $villes = ville::all();
        return view('biens.create', compact('types', 'villes'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'type_id' => 'required',
            'ville_id' => 'required',
            'code_postal' => 'required',
            'adresse' => 'required',
            'description' => 'required',
            'superficie' => 'required',
            'nombre_pieces' => 'required',
            'document' => 'required|file|mimes:pdf|max:2048',
            'statut' => 'required',
            'prix' => 'required',
            'urls.*' => 'required|url|mimes:jpeg,jpg,png|max:2048',
            'type' => 'required',
        ]);
        
        if ($request->hasFile('document')) {
            $DocumentPath = $request->file('document')->store('documents', 'public');
        }

        $bien = biens::create([
            'type_id' => $request->type_id,
            'ville_id' => $request->ville_id,
            'code_postal' => $request->code_postal,
            'adresse' => $request->adresse,
            'description' => $request->description,
            'superficie' => $request->superficie,
            'nombre_pieces' => $request->nombre_pieces,
            'document' => $DocumentPath,
            'statut' =>$request->statut,
            'prix' => $request->prix,
            'user_id' => Auth::id(),
        ]);
        dd($bien);
        if ($bien) {

            if ($request->hasFile('urls')) {
                foreach($request->file('urls') as $image) {
                    $Path = $image->store('images', 'public');
                }
            }
    
            $image = image::create([
                'urls' => $Path,
                'biens_id' => $bien->id,
            ]);

            $annonce = annonces::create([
                'type' => $request->type,
                'biens_id' => $bien->id,
            ]);  
        }
         
        return redirect()->route('home');
    }
    public function show($id)
    {

    }
    public function update()
    {

    }

    public function admin()
    {
        return view('admin.index');
    }
}
