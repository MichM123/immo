<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function home(){
        return view('admin.index');
    }
    public function profile(){
        return view('admin.profile');
    }
    public function biens(){
        return view('admin.biens');
    }

    public function profil(){
        return view('admin.profile');
    }

}
