@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/photos/create"><button type="button" class="btn btn-default">Add a new photo</button></a>

        <br><hr>

        <div class="row">
        @foreach ($photos as $photo)
        <div class="col-lg-12">
         <a href="/photos/{{ $photo->id }}"><img src="/images/{{ $photo->name }}" height="250" width="450"></a>
         <br>
         <a href="/photos/edit/{{ $photo->id }}"><button type="button" class="btn btn-sm btn-default">Edit photo</button></a>
        <a href="/photos/delete/{{ $photo->id }}"><button type="button" class="btn btn-sm btn-default">Delete photo</button></a>
        </div>
        @endforeach
        </div>
        </div>
    </div>
</div>
@endsection
