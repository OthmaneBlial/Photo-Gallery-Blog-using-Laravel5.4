
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <form action="/tags/{{ $tag->id }}" method="POST" role="form">
        {{ csrf_field() }}
            <legend>Edit a tag</legend>

            <div class="form-group">
                <label for="">name</label>
                <input name="name" type="text" class="form-control" id="" value="{{ $tag->name }}">
            </div>

            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection
