@extends('layouts.app')

@section('content')
<div class="w-100 h-100 d-flex justify-content-center align-items-center">
    <div class="width:100%">

        <h3 class="display-2">Todo App</h3>
        <h4 class="pt-5">Whats next? add somthing to your list</h4>
    <form action="{{route('todo.store')}}" method="POST">
            @csrf
            <div class="input-group mb-3 w-100">
                <input
                       type="text"
                       class="form-control-lg"
                       name="title"
                       placeholder="Type here"
                       autocomplete="title" autofocus>
                <div class="input-group-append">
                <button class="btn btn-success" type="submit">Add to the list</button>
                </div>
            </div>
            
        </form>

        <h2 class="pt-2">My Todo List</h2>
        <div class="">
            @foreach ($todos as $todo)

            <div class="w-100% d-flex align-items-center-between">
                <div class=""> @if($todo->completed == 0)
                    
                    
                @endif {{$todo->title}}</div>
            </div>
            @endforeach

        </div>

    </div>
</div>
@endsection
