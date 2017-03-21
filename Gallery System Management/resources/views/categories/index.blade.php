@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

        <a href="/categories/create"><button type="button" class="btn btn-default">Add a new category</button></a>

        <br><hr>

        

        <table class="table  table-striped table-hover">
                	<thead>
                		<tr>
                			<th>Name</th>
                			<th>Description</th>
                			<th>Edit</th>
                			<th>Delete</th>
                		</tr>
                	</thead>
                	<tbody>
                	@foreach ($categories as $category)
                		<tr>
                			<td>{{ $category->name }}</td>
                			<td>{{ $category->description }}</td>
                			<td><a href="/categories/edit/{{ $category->id }}"><button type="button" class="btn btn-info">Edit</button></a></td>
                			<td><a href="/categories/delete/{{ $category->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                		</tr>
                	@endforeach
                	</tbody>
                </table>        
        


        </div>
    </div>
</div>
@endsection
