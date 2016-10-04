@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {!! Form::open(['url' => 'contact/post']) !!}
            //
            {!! Form::close() !!}
        </div>
    </div>
@endsection
