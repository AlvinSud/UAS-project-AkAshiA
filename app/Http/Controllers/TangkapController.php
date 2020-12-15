<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TangkapController extends Controller
{
    public function index(Request $req){
        echo $req->input('nama_user');
        echo "<br>";
        echo $req->input('alamat_surat');
    }
}