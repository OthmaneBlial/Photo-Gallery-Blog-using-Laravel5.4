
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <form action="/albums" method="POST" role="form">
        {{ csrf_field() }}
            <legend>Add a new album</legend>

            <div class="form-group">
                <label for="">name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="">description</label>
                <input name="description" type="text" class="form-control" id="" placeholder="Input field">
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
