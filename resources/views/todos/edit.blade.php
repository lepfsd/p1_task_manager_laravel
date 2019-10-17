@extends('layouts.app')

@section('title')
    edit todo
@endsection

@section('content')
	<h1 class="text-center my-5">TODOS APP</h1>
				
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="alert alert-info" role="alert">
				edit todo
			</div>
			@if($errors->any())
				<div class="alert alert-danger">
					<div class="list-group">
						@foreach($errors->all() as $error)
							<li class="list-group-item"> {{ $error }} </li>
						@endforeach
					</div>
				</div>
			@endif
			<form action="/todos/{{ $todo->id }}/update" method="POST">
			
				@csrf 
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="name" value="{{$todo->name}}">
				</div>
				<div class="form-group">
					<textarea name="description" id="" cols="5" rows="5" placeholder="description" class="form-control">{{$todo->description}}</textarea>
				</div>
				<div class="form-group text-right">
					<button class="btn btn-warning">update</button>
				</div>
			</form>
		</div>
	</div>
@endsection