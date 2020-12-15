@extends('shared/base')

@section('judul','.::Profil::.')

@section('isi_konten')
<div class="row">
    <div class='col-md-4 hidden-xs'>
    
    </div>
    <div class='col-md-4 col-xs-12'>
        <h3>Profil</h3>
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
        <form action='/ubah-profil' method='POST'>
            @csrf
            <label for="Username">Username</label>
            <input class='form-control' type="text" name="username" id="nama_user" placeholder='Nama User' value='{{ $username }}' disabled>
            <hr>
            <label for="Username">Email</label>
            <input class='form-control' type="email" name="surel" id="surel" placeholder='Alamat Email' value='{{ $email }}'>
            <label for="Username">Phone</label>
            <input class='form-control' type="text" name="telepon" id="telepon" placeholder='Telepon' value='{{ $phone }}'>
            <hr>
            <label for="Username">Gender</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="M" {{ $gender==='M' ? 'checked' : '' }}>
                <label class="form-check-label" for="">
                    Male
                </label>
            </div>
            <div class='form-check'>
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="" value="F" {{ $gender==='F' ? 'checked' : '' }}>
                <label class="form-check-label" for="">
                    Female
                </label>
            </div>
            <br>
            <button type='submit' class='btn btn-primary'>
                <i class='fa fa-edit'></i> Ubah
            </button>
        </form>
        <br>
        <button type='button' class='btn btn-danger btn-block' data-toggle="modal" data-target="#deleteAccountModal">
            <i class='fa fa-trash'></i> Hapus Akun
        </button>
    </div>
    <div class='col-md-4 hidden-xs'>
    
    </div>
</div>
<div class='row'>
    &nbsp;
</div>

<!-- Modal -->
<div class="modal fade" id="deleteAccountModal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Akun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Anda yakin untuk menghapus akun?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
        <form action='/delete-account' method='POST'>
            @csrf
            <input type='hidden' name='hapus_akun' value='hapus'>
            <button type="submit" class="btn btn-primary">Ya</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection