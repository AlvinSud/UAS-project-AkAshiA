@extends('shared/base')

@section('judul','.::Checkout::.')

@section('isi_konten')

<section class="jumbotron text-center">
    <h1>THANK YOU!</h1>

    <hr>

    <div class="container">
        <h2>Your purchase already confirmed.</h2>
        <a href="/" class="btn btn-outline-info">Back to Home</a>
        <a href="/items" class="btn btn-outline-info">Continue Shopping</a>
    </div>
</section>
@endsection