<?php
namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class ArtikelModel{
    public static function get_all(){
        $artikel = DB::table('artikel')->get();
        return $artikel;
    }
    public static function save($data){
        $data['slug'] = str_replace(' ','-',Str::lower($data['judul']));
        //$data['user_id'] = 1;
        unset($data['_token']);
        //dd($data);
        $insert = DB::table('artikel')->insert($data);
        return $insert;
    }
    public static function getById($id){
        $artikel = DB::table('artikel')->where('id',$id)->first();
        $artikel->tag = explode(',',$artikel->tag);
        //dd($artikel->tag);
        return $artikel;
    }
    public static function delete($id){
        $hapus = DB::table('artikel')->where('id','=',$id)->delete();
        return $hapus;
    }
    public static function update($id,$data){
        $data['slug'] = str_replace(' ','-',Str::lower($data['judul']));
        //dd($data);
        $artikel = DB::table('artikel')
                    ->where('id',$id)
                    ->update([
                        'judul'=>$data['judul'],
                        'isi'=>$data['isi'],
                        'slug'=>$data['slug'],
                        'tag'=>$data['tag'],
                        'updated_at'=>$data['updated_at'],
                    ]);
                    return $artikel;
    }
}