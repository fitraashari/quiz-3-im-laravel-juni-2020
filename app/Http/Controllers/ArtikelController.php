<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ArtikelModel;
class ArtikelController extends Controller
{
    //
    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }
    public function create(){
        return view('artikel.form');
    }
    public function store(Request $request){
        $data = $request->all();
        //dd($data);
        $insert = ArtikelModel::save($data);
        if($insert){
            return redirect('/artikel');
        }
    }
    public function detail($id){
        $artikel = ArtikelModel::getById($id);
        return view('artikel.detail',['artikel'=>$artikel]);
    }
    public function delete($id){
        $hapus = ArtikelModel::delete($id);
        return redirect('/artikel');
    }
    public function edit($id){
        $artikel = ArtikelModel::getById($id);
        return view('artikel.edit',['artikel'=>$artikel]);
    }
    public function update($id,Request $request){
        $artikel = ArtikelModel::update($id,$request->all());
        return redirect('/artikel');
    }
}
