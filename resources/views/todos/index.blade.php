@extends('layouts.app')

@section('title')
    todos list
@endsection

@section('content')
    <h1 class="text-center my-5">TODOS APP</h1>
    <div class="row">
        <div class="col-md-9">
            <div class="card card-default">
                <div class="card-header">
                    todos
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach($todos as $todo)
                            <li class="list-group-item">
                                {{ $todo->name }}
                                @if(!$todo->completed)
                                    <a href="/todos/{{ $todo->id }}/complete" style="color:white" class="btn btn-warning btn-sm float-right">complete</a>
                                @endif
                                <a href="/todos/{{ $todo->id }}" class="btn btn-primary btn-sm float-right mr-2">view</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
