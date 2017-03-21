@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-md-8 col-md-offset-2">

        
        <form action="/comments/{{ $comment->id }}" method="POST" role="form">
            {{ csrf_field() }}
            <legend>Edit a comment</legend>
                    

        <div class="form-group">
        <textarea name="comment" class="form-control" rows="3" required>{{ $comment->comment }}</textarea>
        </div>
            
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>    
        </div>


        </div>
    </div>
</div>
@endsection
