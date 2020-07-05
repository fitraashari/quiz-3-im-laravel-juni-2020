<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    //
    public function index(){
        return view('artikel.index');
    }
    public function create(){
        return view('artikel.form');
    }
    public function store(Request $request){
        $data = $request->all();
        $data['slug'] = str_replace(' ','-',Str::lower($data['judul']));
        
        dd($data);
    }
}
