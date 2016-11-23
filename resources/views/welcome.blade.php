@extends('layouts.app')

@section('content')
    <div class="">
        <div class="row">
            @include('welcome.carousel')
        </div>
        <div class="row margin-top-20 bg-purple white">
            <div class="col-md-offset-1 margin-bottom-20">
                <div class="row">
                    <div id="service" class="row">
                        <h2>services en faciliteiten</h2>
                    </div>
                    <div class="row">
                        @include('welcome.services')
                    </div>
                    <div class="row">
                        @include('welcome.parking')
                    </div>
                    <div class="row">
                        @include('welcome.mobiliteit')
                    </div>
                    <div class="row">
                        @include('welcome.building')
                    </div>
                </div>
            </div>
        </div>

        <div class="row margin-top-20 margin-bottom-20">
            <div class="col-md-offset-1 col-md-10">
                <div class="row"><h2> Grondplan</h2></div>

            </div>
            <div id="grondplan"  class="text-center margin-top-20 maxheight-70">
                <img class="img-responsive" src="{{asset('img/layout.jpg')}}" alt="">
            </div>
        </div>
    </div>
@endsection
