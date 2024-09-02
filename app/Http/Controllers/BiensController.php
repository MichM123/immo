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
        $types = type_biens::all();
        $biens = Biens::with('images')->get()->where('accept',1);
        return view('biens.index', compact('types','biens'));
    }
    public function create()
    {
        $types = type_biens::all();
        $villes = villes::all();
        return view('biens.create', compact('types', 'villes'));
    }
    public function edit( string $id){
        $bien = Biens::find($id);
        $types = type_biens::all();
        $villes = villes::all();
        if($bien){
            return view('biens.edit', compact('bien', 'types', 'villes'));
        }
    }
    public function store(StoreAnnonceRequest $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('document')) {
            $DocumentPath = $request->file('document')->store('documents', 'public');
            $bien = Biens::create([
                'nom' => $request->nom,
                'adresse' => $request->adresse,
                'type_id' => $request->type_id,
                'superficie' => $request->superficie,
                'statut' => $request->statut,
                'description' => $request->description,
                'nombre_pieces' => $request->nombre_pieces,
                'prix' => $request->prix,
                'salle_bains' => $request->salle_bains,
                'ville_id' => $request->ville_id,
                'piscine' => $request->piscine,
                'garage' => $request->garage,
                'meuble' => $request->meuble,
                'document' => $DocumentPath,
                'user_id' => Auth::id(),
            ]);
            $documentname = time() . '_' . $request->file('document')->getClientOriginalName();
            $DocumentPath = $request->file('document')->storeAs('documents',$documentname ,'public');
            $validated['document'] = $DocumentPath;
            $validated['user_id'] =Auth::user()->id;

            $bien = Biens::create($validated);
        }
            
        if($bien && $bien->accept=1){
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
    public function delete(Biens $bien){
        $bien->delete();
        return redirect()->route('profile');
    }

    public function show($id)
    {
        $user = User::findorfail($id);
        $bien = $user->biens()->with('type_biens')->get();
        $nombres = $user->biens()->select('type_id',DB::raw('count(*) as total'))->groupedBy('type_id')->with('type_biens')->get();
        return view('biens.detail' , compact('nombres', 'bien'));
    }

}
