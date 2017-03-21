
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">


        <form action="/photos" method="POST" role="form" enctype="multipart/form-data">
        {{ csrf_field() }}
            <legend>Add a new photo</legend>
        
            <div class="form-group">
            <label for="">upload a photo</label>
                <input type="file" name="image" />
            </div>
            <div class="form-group">
                <label for="">description</label>
                <input name="description" type="text" class="form-control" id="" placeholder="Input field">
            </div>
            <div class="form-group">
            <label for="">album</label>
                <select name="album_id" id="inputAlbum_id" class="form-control" required="required">
                    @foreach ($albums as $album)
                    <option value="{{ $album->id }}">{{ $album->name }}</option>
                    @endforeach
                </select>
            </div>


            <!--
            <div class="form-group">
            <select name="tags_list" class="form-control"  multiple="multiple">
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
            </select>
            </div>
            -->
            <!--
            <div class="form-group">
            {{ Form::select('tags[]', $tags->pluck('id'), null, array('multiple')), array('class' => 'form-control')}}
            <div>
            -->

            <div class="form-group">
            <select name="tags[]" multiple="multiple">
                @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            <div>






            <input type="hidden" name="user_id" id="inputUser_id" class="form-control" value="{{ $user->id }}">

        
            
        
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        </div>
    </div>
</div>
@endsection
