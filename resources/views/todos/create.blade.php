@extends('layouts.app')

@section('title')
    create todo
@endsection

@section('content')
	<h1 class="text-center my-5">TODOS APP</h1>
				
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="alert alert-primary" role="alert">
				create todo
			</div>
			<form action="/store-todos" method="POST">
				@csrf
				<div class="form-group">
					<input type="text" class="form-control" name="name" placeholder="name">
				</div>
				<div class="form-group">
					<textarea name="description" id="" cols="5" rows="5" placeholder="description" class="form-control"></textarea>
				</div>
				<div class="form-group text-right">
					<button class="btn btn-success">submit</button>
				</div>
			</form>
		</div>
	</div>
@endsection