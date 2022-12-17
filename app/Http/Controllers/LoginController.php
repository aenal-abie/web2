<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller {

    public function index(){
        if(session()->has('login')){
            $nama = session('name');
            echo "Halo $nama, Anda sudah login";
        } else { echo "Anda blm login"; }
    }


    public function create(Request $request){
        // cek data username dan password
        $username = $request->post('username');
        $password = $request->post('password');
        $passwordMd5 = md5($password);

        $data = User::where("username","=",$username)->first();
        if($data){
            if($passwordMd5 == $data->password){
                session(['login'=> true]);
                session(['name'=> $data->nama]);
                echo "Anda berhasil login";
            } else {
                echo "password anda salah";
            }
        } else {
            echo "Username dan password anda salah";
        }


    }

    public function destroy(){

        // cek data username dan password

        session()->forget('login');
    }



}


