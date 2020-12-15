<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
//use PDO;

class Pengguna extends Model
{
    use HasFactory;

    private $tabel_terpilih = 'profil';

    public function get_data($data){
        $cmd = 'SELECT username, email, phone, gender '.
                'FROM '.$this->tabel_terpilih.' '.
                'WHERE username=:username;';

        //DB::setFetchMode(PDO::FETCH_ASSOC);
        $res = DB::select($cmd,$data);

        $data_res = [
            'username'  => $res[0]->username,
            'email'     => $res[0]->email,
            'phone'     => $res[0]->phone,
            'gender'    => $res[0]->gender,
        ];

        return $data_res;
    }

    public function isExist($data){
        $cmd = "SELECT count(*) is_exist ".
                "FROM ".$this->tabel_terpilih." ".
                "WHERE username=:username AND password=sha1(:password);";
        $res = DB::select($cmd,$data);
        if($res[0]->is_exist == 1){
            return true;
        }
        return false;
    }

    public function buat($data){
        //INSERT into pengguna(username, password, email, phone, gender) values (?, ?, ?, ?);
        $cmd = "INSERT INTO ".$this->tabel_terpilih."(nama, username, password) VALUES (:nama, :username, sha1(:password));";
        
        $res= DB::insert($cmd, $data);
        /*echo "<pre>";
        print_r($res);
        echo "</pre>";
        die();*/
        return $res;
    }

    public function ubah($data){
        $cmd = "UPDATE ".$this->tabel_terpilih.
                    " SET email=:email, phone=:phone, gender=:gender".
                    " WHERE username=:username;";
    
        $res = DB::update($cmd, $data);
        return $res;
    }

    public function hapus($data){
        $cmd = "DELETE FROM ".$this->tabel_terpilih." WHERE username=:username;";
        $res = DB::delete($cmd, $data);
        return $res;
    }

    public function cetak(){
        echo "Halo James";
    }
}
