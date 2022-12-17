<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class MahasiswaController extends Controller {
    public function view_form(){
        return view("form_mahasiswa");
    }

    public function form_request(Request $request){
        // print_r($_POST);
        // echo $_POST['nama'];
        // print_r($request);
        echo $request->nama;
    }
}
