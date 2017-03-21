
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <form action="/categories/{{ $category->id }}" method="POST" role="form">
        {{ csrf_field() }}
            <legend>Edit a category</legend>

            <div class="form-group">
                <label for="">name</label>
                <input name="name" type="text" class="form-control" id="" value="{{ $category->name }}">
            </div>

            <div class="form-group">
                <label for="">description</label>
                <input name="description" type="text" class="form-control" id="" value="{{ $category->description }}">
            </div>
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection
