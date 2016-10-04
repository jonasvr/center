@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('welcome.carousel')
        </div>
        <div class="row margin-top-20">
            <div class="col-md-offset-2 col-md-4">
                @include('welcome.diensten')
            </div>
            <div class="col-md-offset-1 col-md-4">
                @include('welcome.tarieven')
            </div>
        </div>

        <div class="row margin-top-20 margin-bottom-20">
            <h2> Grondplan</h2>
            <div class="text-center margin-top-20">
                <img src="http://placehold.it/900x500" alt="">
            </div>
        </div>
    </div>
@endsection
