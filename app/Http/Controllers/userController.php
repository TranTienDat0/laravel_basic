<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\userModel;


class userController extends Controller
{
    public $model;
    public function __construct()
    {
        $this->model = new userModel();
    }
    //
    public function index(){
        $data = $this->model->GetAllUser();
        return view('user/list', compact('data'));
    }

    public function create(){
        
        return view('user/formAdd');
    }

    public function createPost(Request $request){
        $request->validate([
            'nam' => 'required|max:255',
            'mail_address' => 'required|email|max:100|unique:user',
            'password' => 'required|max:255',
            'password_confirmation' => 'required|same:password',
            'address' => 'max:255',
            'phone'=>'numeric|max:15'
        ],
        [
            'nam.required'=>'Tên không được bỏ trống',
            'nam.max:255'=>'Tên không được quá 255 kí tự',

            'mail_address.required'=>'Địa chỉ email không được để trống',
            'mail_address.email'=>"Địa chỉ email không đúng định dạng"
        ]
    );

        $this->model->create_user();

        return redirect()->route('user');
    }
}
