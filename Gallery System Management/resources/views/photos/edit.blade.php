@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <form action="/photos/{{ $photo->id }}" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
            <legend>Edit a photo</legend>
        
            <div class="form-group">
            <label for="">upload a photo</label>
                <input type="file" name="image" />  
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input name="description" type="text" class="form-control" id="" value="{{ $photo->description }}">
            </div>
            <div class="form-group">
            <label for="">album</label>
                <select name="album_id" id="inputAlbum_id" class="form-control" required="required">
                    @foreach ($albums as $album)
                    @if ($photo->album_id == $album->id)
                    <option value="{{ $photo->album_id }}" selected>{{ $photo->album->name }}</option>
                    @else 
                    <option value="{{ $album->id }}" >{{ $album->name }}</option>
                    @endelse
                    @endif
                    @endforeach
                </select>
            </div>

            <input type="hidden" name="user_id" id="inputUser_id" class="form-control" value="{{ $user->id }}">

        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection
