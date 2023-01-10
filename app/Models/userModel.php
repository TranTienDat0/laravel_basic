<?php

namespace App\Models;



use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class userModel extends Model
{
    use HasFactory;
    protected $table = 'user';

    public function GetAllUser(){
        $data = DB::table("user")->orderBy("id","asc")->paginate(20);

        return $data;
    }

    public function create_User(){
        
       $email = Request::get("mail_address");
       $password = Request::get("password");
       $name = Request::get("nam");
       $address = Request::get("address");
       $phone = Request::get("phone");
       
       DB::table("user")->insert(["mail_address"=>$email, "password"=>$password, "nam"=>$name, "address"=>$address, "phone"=>$phone]);
    }
}
