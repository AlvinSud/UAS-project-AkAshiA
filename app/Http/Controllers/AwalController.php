<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;
use Session;

class AwalController extends Controller
{
    public function index(){
        //echo "Halo Kamu ngakses Controller Awal pada function index";
        //return view('form');

        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function logout(Request $req){
        //HATI-HATI: menghancurkan session dan set session flash
        $hasLogin = $req->session()->has('login');
        if(isset($hasLogin)){
            Session::flush();
            Session::flash('success', 'Anda berhasil logout!');

            return redirect('/login');
        }
    }

    public function register(){
        return view('register');
    }

    public function daftar_baru(Request $req){
        $usr = new Pengguna();

        /*$data = [
            'username' => 'jwijaya',
            'password' => 'webdevjaya',
            'email'    => 'halo@jmswijaya.com',
            'phone'    => '081342469097',
            'gender'   => 'M',
        ];*/
        $data = [
            'nama'      => $req->input('nama_lengkap'),
            'username'  => $req->input('nama_user'),    
            'password'  => $req->input('kata_sandi'),
        ];

        //print_r($data);
        //die();
        $res = $usr->buat($data);
        if($res==1){
            //echo "Berhasil Insert Data User!";
            Session::flash('success', 'Anda berhasil membuat akun!');

            return redirect('/login');
        }
    }

    /*public function tangkap(Request $req){
        echo $req->input('nama_user');
        echo "<br>";
        echo $req->input('alamat_surat');
    }*/

    public function authentication(Request $req){
        //1. Get INPUT
        $usrname = $req->input('nama_user');
        $pass    = $req->input('kata_sandi');

        $data = [
            'username' => $usrname,
            'password' => $pass,
        ];

        //2. Check Username dan Password ke database
        $usr = new Pengguna();
        $flag_exist = $usr->isExist($data);

        if ($flag_exist){
            //2.a. Jika KETEMU, maka session LOGIN dibuat
            Session::put('login', $usrname);
            Session::flash('success', 'Anda berhasil Login!');

            return redirect('/');
        } else {
            //2.b. Jika TIDAK KETEMU, maka kembali ke LOGIN dan tampilkan PESAN
            Session::flash('error', 'Username dan Password tidak sesuai!');
            return redirect('/login');
        }
        /*if (isset($hasLogin)){
        
        }*/
    }



    public function ubah_profil(Request $req){
        //echo $req->session()->get('login');
        if($req->session()->has('login')){
            $data = [
                'email'     => $req->input('surel'),
                'phone'     => $req->input('telepon'),
                'gender'    => $req->input('jenis_kelamin'),
                'username'  => Session::get('login'),
            ];

            //print_r($data);
    
            $usr = new Pengguna();
            $res = $usr->ubah($data);
            echo $res;
            if($res==1){
            
                //echo "Berhasil Update Data User!";
                Session::flash('success', 'Anda berhasil mengupdate informasi akun!');
    
                return redirect('/profil');
            } else {
                Session::flash('warning', 'Anda tidak mengupdate informasi akun!');
    
                return redirect('/profil');
            }
        } else {
            //echo "tes";
            Session::flash('error', 'Anda belum Login!');
    
            return redirect('/login');
        }
    }

    public function hapus_account(Request $req){
        if ($req->has('hapus_akun') && $req->session()->has('login')){
            $data = [
                'username' => Session::get('login'),
            ];
            $usr = new Pengguna();
            $res = $usr->hapus($data);
            if ($res==1){
                //echo "Berhasil Hapus User!";
                Session::flush();
                Session::flash('success', 'Anda berhasil menghapus akun!');
                return redirect('/login');
            }
        }    
    }

    public function items(){
        return view('items');
    }

    public function about(){
        return view('about');
    }

    public function contact(){
        return view('contact');
    }

    public function forgot(){
        return view('forgot');
    }

    public function shopcart(){
        return view('shopcart');
    }

    public function checkout(){
        return view('checkout');
    }
}