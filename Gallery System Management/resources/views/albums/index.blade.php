@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/albums/create"><button type="button" class="btn btn-default">Add a new category</button></a>

        <br><hr>

        

        <table class="table table-striped table-hover">
                	<thead>
                		<tr>
                			<th>Name</th>
                            <th>Description</th>
                			<th>Edit</th>
                			<th>Delete</th>
                		</tr>
                	</thead>
                	<tbody>
                	@foreach (\App\Album::all() as $album)
                		<tr>
                			<td>{{ $album->name }}</td>
                			<td>{{ $album->description }}</td>
                			<td><a href="/albums/edit/{{ $album->id }}"><button type="button" class="btn btn-info">Edit</button></a></td>
                			<td><a href="/albums/delete/{{ $album->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                		</tr>
                	@endforeach
                	</tbody>
                </table>        
        


        </div>
    </div>
</div>
@endsection
