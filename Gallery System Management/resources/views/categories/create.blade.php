
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <form action="/categories" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
            <legend>Add a new category</legend>

            <div class="form-group">
                <label for="">name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Input field">
            </div>

            <div class="form-group">
                <label for="">description</label>
                <input name="description" type="text" class="form-control" id="" placeholder="Input field">
            </div>
        
        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection
