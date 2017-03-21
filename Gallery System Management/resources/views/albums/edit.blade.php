
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <form action="/albums/{{ $album->id }}" method="POST" role="form">
        {{ csrf_field() }}
            <legend>Edit an album</legend>

            <div class="form-group">
                <label for="">name</label>
                <input name="name" type="text" class="form-control" id="" value="{{ $album->name }}">
            </div>

            <div class="form-group">
                <label for="">description</label>
                <input name="description" type="text" class="form-control" id="" value="{{ $album->description }}">
            </div>

            <div class="form-group">
            <label for="">category</label>
                <select name="category_id" id="inputCategory_id" class="form-control" required="required">
                @foreach (\App\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
                </select>
            </div>
        
        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection
