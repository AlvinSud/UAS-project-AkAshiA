@extends('shared/base')

@section('judul','.::Register::.')

@section('isi_konten')
<div class="row">
    <div class='col-md-4 hidden-xs'>
    
    </div>
    <div class='col-md-4 col-xs-12'>
        <h3>Registrasi</h3>
        @if (Session::has('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ Session::get('success') }}</strong>
            </div>
        @endif
        @if (Session::has('error'))
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ Session::get('error') }}</strong>
            </div>
        @endif
        @if (Session::has('warning'))
            <div class="alert alert-warning alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{{ Session::get('warning') }}</strong>
            </div>
        @endif
        <form action='/register' method='POST'>
            @csrf
            <label for="Nama Lengkap">Nama Lengkap</label>
            <input class='form-control' type="text" name="nama_lengkap" id="nama_lengkap" placeholder="Nama Lengkap">
            <label for="Username">Username</label>
            <input class='form-control' type="text" name="nama_user" id="nama_user" placeholder="Username">
            <label for="Username">Password</label>
            <input class='form-control' type="password" name="kata_sandi" id="kata_sandi" placeholder="Password">
            <label for="Username">Confirm Password</label>
            <input class='form-control' type="password" name="kata_sandi" id="kata_sandi" placeholder="Confirm Password">
            <br>
            <button type='submit' class='btn btn-primary'>
                <i class='fa fa-sign-in'></i> Confirm
            </button>
            <button type='reset' class='btn btn-secondary'>
                <i class='fa fa-trash'></i> Reset
            </button>
            <br><a href='login'>Already have account?</a>
        </form>
    </div>
    <div class='col-md-4 hidden-xs'>
    
    </div>
</div>
<div class='row'>
    &nbsp;
</div>
@endsection