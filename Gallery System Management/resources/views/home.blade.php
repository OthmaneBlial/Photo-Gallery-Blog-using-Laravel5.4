@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <div class="jumbotron">
            <div class="container">
            @if (Auth::check())
                <h1>Hello dear {{ Auth::user()->name }}</h1>
                <p>
                    <a href="/photos" class="btn btn-success btn-lg">Access the gallery</a>
                    <a href="/mygallery" class="btn btn-info btn-lg">Access your photos</a>
                </p>
            @endif
            </div>
        </div>


        </div>
    </div>
</div>
@endsection
