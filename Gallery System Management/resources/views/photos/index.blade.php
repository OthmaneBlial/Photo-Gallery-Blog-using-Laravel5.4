@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        @if (Auth::check())
        <a href="/photos/create"><button type="button" class="btn btn-default">Add a new photo</button></a>
        @endif

        <br><hr>

        <div class="row">
        @foreach ($photos as $photo)
        <div class="col-lg-6">
         <a href="/photos/{{ $photo->id }}"><img src="/images/{{ $photo->name }}" height="150" width="350"></a>
        </div>
        @endforeach
        </div>
        </div>
    </div>
</div>
@endsection
