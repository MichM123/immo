<?php

namespace App\Http\Controllers;

use App\Models\Biens;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (! Gate::allows('acces-admin')) {
            abort('403');
        }
        $biens = Biens::with('User')->orderBy('id','desc')->paginate(15);

        

        return view('admin.adminbiens',[
            'biens'=>$biens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (! Gate::allows('acces-admin')) {
            abort('403');
        }
        $bien = Biens::with(['type_biens','ville','User','images'])->findOrfail($id);
        
        return view('admin.admindisplaybien',[
            'bien'=>$bien
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if (! Gate::allows('acces-admin')) {
            abort('403');
        }
        $bien = Biens::findOrfail($id);
        $bien->update(['accept'=>1]);
        
        return to_route('admin.bien.index')->with('succes','publication effectué avec sucess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function propietaires() {
        if (! Gate::allows('acces-admin')) {
            abort('403');
        }

        $users = User::orderBy('id','desc')->where('admin',0)->paginate(15);

        return view('admin.admindisplayusers',[
            'users'=>$users
        ]);
    }
}
