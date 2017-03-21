@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/tags/create"><button type="button" class="btn btn-default">Add a new tag</button></a>

        <br><hr>

        

        <table class="table  table-striped table-hover">
                	<thead>
                		<tr>
                			<th>Name</th>
                			<th>Edit</th>
                			<th>Delete</th>
                		</tr>
                	</thead>
                	<tbody>
                	@foreach ($tags as $tag)
                		<tr>
                			<td>{{ $tag->name }}</td>
                			<td><a href="/tags/edit/{{ $tag->id }}"><button type="button" class="btn btn-info">Edit</button></a></td>
                			<td><a href="/tags/delete/{{ $tag->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                		</tr>
                	@endforeach
                	</tbody>
                </table>        
        


        </div>
    </div>
</div>
@endsection
