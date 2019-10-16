@extends('layouts.app')

@section('title')
    single todo: {{ $todo->name }}
@endsection

@section('content')
	<h1 class="text-center my-5">TODOS APP</h1>
				
	<div class="row">
		<div class="col-md-6">
				<div class="alert alert-primary" role="alert">
					{{ $todo->name }}
				</div>
			<div class="card card-default">
				<div class="card-header">
					details:
				</div>
				<div class="card-body">
					{{ $todo->description }}
					
				</div>
				<div class="card-footer text-muted">
					created: {{ $todo->created_at }}
				</div>
			</div>
		</div>
	</div>
@endsection