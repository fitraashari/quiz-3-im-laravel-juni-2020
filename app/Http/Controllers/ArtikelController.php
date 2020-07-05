<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ArtikelModel;
use App\Models\UsersModel;
class ArtikelController extends Controller
{
    //
    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }
    public function create(){
        $users = UsersModel::get_all();
        return view('artikel.form',compact('users'));
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'judul' => ['required','max:255'],
            'isi' => ['required','max:255'],
            'tag' => ['required','max:255'],
            'user_id' => ['required'],
        ]);
        $insert = ArtikelModel::save($request->all());
        if($insert){
            return redirect('/artikel');
        }
    }
    public function detail($id){
        $artikel = ArtikelModel::getById($id);
        $user = UsersModel::getById($artikel->user_id);
        //dd($user);
        return view('artikel.detail',['artikel'=>$artikel,'user'=>$user]);
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
        $validatedData = $request->validate([
            'judul' => ['required','max:255'],
            'isi' => ['required','max:255'],
            'tag' => ['required','max:255'],
        ]);
        $artikel = ArtikelModel::update($id,$request->all());
        return redirect('/artikel');
    }
}
