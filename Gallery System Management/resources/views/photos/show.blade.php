@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">


        <div class="col-md-8 col-md-offset-2">

        <div class="container"><img src="/images/{{ $photo->name }}" height="500" width="500"></div>
        <div class="container">
        <br>
        @if (Auth::check() && Auth::user()->id == $photo->user_id)
        <a href="/photos/edit/{{ $photo->id }}"><button type="button" class="btn btn-lg btn-default">Edit photo</button></a>
        <a href="/photos/delete/{{ $photo->id }}"><button type="button" class="btn btn-lg btn-default">Delete photo</button></a>
        @endif
        </div>

        <br><br>
        <div class="container">
        Tags :
        @foreach ($photo->tags as $tag)
             <a href="/tags/{{ $tag->id }}">{{ $tag->name }}</a>
        @endforeach
        </div>
        <hr><br>


        @foreach($photo->comments as $comment)
        <div class="panel panel-success">
            <div class="panel-heading">
                <h3 class="panel-title">{{ $comment->email }} has commented:</h3>
            </div>
            <div class="panel-body">
                {{ $comment->comment }}
            
            @if (Auth::check() && Auth::user()->email == $comment->email)
            <hr>
            <a href="/comments/edit/{{ $comment->id }}"><button type="button" class="btn btn-info">Edit</button></a>
            <a href="/comments/delete/{{ $comment->id }}"><button type="button" class="btn btn-info">Delete</button></a>
            @endif
            </div>
        </div>
        @endforeach

        <hr><br>


        @if (Auth::check())
        <div class="row">

        <div class="col-lg-6">
        
        <form action="/comments" method="POST" role="form">
            {{ csrf_field() }}
            <legend>Add a new comment</legend>
                    
        <input type="hidden" name="email" id="inputEmail" class="form-control" value="{{ Auth::user()->email }}">

        <div class="form-group">
        <textarea name="comment" id="inputComment" class="form-control" rows="3" required="required"></textarea>
        </div>

        <input type="hidden" name="user_id" id="inputEmail" class="form-control" value="{{ Auth::user()->id }}">


        <input type="hidden" name="photo_id" id="inputEmail" class="form-control" value="{{ $photo->id }}">

            
        
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>    
        </div>
        @endif


        </div>
    </div>
</div>
@endsection
