@extends('layouts.app')

@section('title')
    todos list
@endsection

@section('content')
    <h1 class="text-center my-5">TODOS APP</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">view</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
