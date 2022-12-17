<?php

namespace App\Http\Controllers;

class CalculatorController extends Controller {

    public function hitung($operator, $bil1, $bil2) {
        $hasil = 0;
        if($operator == "tambah") {
            $hasil = $bil1 + $bil2;
        } else if($operator == "kurang") {
            $hasil = $bil1 - $bil2;
        } else if($operator == "kali") {
            $hasil =  $bil1 * $bil2;
        } else if($operator == "bagi") {
            $hasil =  $bil1 / $bil2;
        }
        return view("hasil_operator", compact("hasil","operator", "bil1", "bil2"));
    }

}
