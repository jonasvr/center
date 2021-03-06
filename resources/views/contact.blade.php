@extends('layouts.app')

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row margin-bottom-20">
            <div class="text-center">
                <h2>Contacteer ons</h2>
            </div>
        </div>
        <div class="row margin-bottom-20">
            <div class="col-md-offset-1 col-md-3 font-size-16">
               <strong>RVR - Business center</strong>  <br>
                Satenrozen 1 A <br>
                2550 Kontich <br>
                Belgium <br> <br>
                <strong>Tel :</strong>  00 32 3 489 02 06 <br>
                <strong>Email :</strong>  info@IRVR.be <br>
            </div>
            <div class="col-md-offset-1 col-md-6">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('contact/post') }}">
                {{ csrf_field() }}
                <input name="name" type="text" placeholder="Naam"  value="{{ old('name') }}" class="width-48 margin-auto input-style margin-right-75">
                <input name="mail" type="text" placeholder="E-mailadres" value="{{ old('mail') }}" class="width-48 margin-auto input-style">
                <textarea name="content" id="" cols="30" rows="5" value="{{ old('contents') }}" placeholder="Bericht" class="width-100 input-style"></textarea>
                <input type="submit" value="Indienen" class="input-style submit-button">
                </form>
            </div>

        </div>

    </div>
    <div class="row bg-purple">
    <div class="container">
        <div class="center-block">
        <div id="map" style="width:100%;height:400px;" class="margin-top-20 margin-bottom-20"></div>
        </div>
    </div>
    </div>
    <script>
        function myMap() {
            var mapCanvas = document.getElementById("map");
            var mapOptions = {
                center: new google.maps.LatLng(51.1277663,4.4258928),
                zoom: 17
            }
            var map = new google.maps.Map(mapCanvas, mapOptions);


            var myLatLng = {lat: 51.1277663, lng: 4.4258928};
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'RVR bussiness center'
            });
        }
    </script>

    <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
@endsection
