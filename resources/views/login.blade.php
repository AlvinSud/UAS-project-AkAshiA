@extends('shared/base')

@section('judul','.::Login::.')

@section('isi_konten')
<div class="row">
    <div class='col-md-4 hidden-xs'>
    
    </div>
    <div class='col-md-4 col-xs-12'>
        <h3>Masuk</h3>
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
        <form action='/authenticate' method='POST'>
            @csrf
            <label for="Username">Username</label>
            <input class='form-control' type="text" name="nama_user" id="nama_user">
            <label for="Username">Password</label>
            <input class='form-control' type="password" name="kata_sandi" id="kata_sandi">
            <a href='forgot'>Forgot Password?</a><br><br>
            <button type='submit' class='btn btn-primary'>
                <i class='fa fa-sign-in'></i> Masuk
            </button>
            <button type='reset' class='btn btn-secondary'>
                <i class='fa fa-trash'></i> Clear
            </button>
            <br>
            <p>Don't have account?</p><a href='register'>Click Here</a>
        </form>
    </div>
    <div class='col-md-4 hidden-xs'>
    
    </div>
</div>
<div class='row'>
    &nbsp;
</div>
@endsection