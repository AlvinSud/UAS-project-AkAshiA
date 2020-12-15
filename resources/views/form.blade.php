<form method='POST' action='/tangkap'>
    {{ csrf_field() }}
    Username: <input type="text" name="nama_user" id="">
    <br>
    Email: <input type="text" name="alamat_surat" id="">
    <br>
    <input type="submit" value="Kirim Gan!">
</form>