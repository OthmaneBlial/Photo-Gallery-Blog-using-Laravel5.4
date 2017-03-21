
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <form action="/tags" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
            <legend>Add a new tag</legend>

            <div class="form-group">
                <label for="">name</label>
                <input name="name" type="text" class="form-control" id="" placeholder="Input field">
            </div>
     
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection
