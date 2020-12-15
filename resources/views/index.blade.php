@extends('shared/base')

@section('judul','.::Home::.')

@section('navigasi')

@endsection

@section('isi_konten')
<div class="row">
    <div class="col-sm-12">
        
        <?php /* <h3><span data-toggle="tooltip" title="Some useful links">Tautan</span></h3>
        <ul class="nav nav-pills flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="http://uc.ac.id/isb" target='_blank'>ISB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://w3schools.com" target='_blank'>w3schools.com</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="http://malasngoding.com" target='_blank'>malasngoding.com</a>
            </li>
        </ul> */ ?>
        <hr class="d-sm-none">
    </div>
    <div class="col-sm-4">
        <img src="assets/img/dairy-cows.jpg" style="height: 200px; weight:16px">
    </div>
    <div class="col-sm-4">
        <img src="assets/img/chickens-poultry-farm.jpg" style="width: 300px; height:16">
    </div>
    <div class="col-sm-4">
        <img src="assets/img/fish-farm.jpg" style="width: 300px; height:16">
    </div>
</div>
@endsection