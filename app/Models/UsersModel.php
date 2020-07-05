<?php
namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
class UsersModel{
    public static function get_all(){
        $users = DB::table('users')->get();
        return $users;
    }
    public static function getById($id){
        $user = DB::table('users')->where('id',$id)->first();
        return $user;
    }
}