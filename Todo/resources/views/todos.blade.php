@extends('layout')

@section('content')
    

    <div class="row">
        <div class="col-lg-6 mx-auto">
                 
            <form action="/create/todo" method="post">

                  {{ csrf_field() }}

                <input class="form-control input-lg" name="todo" placeholder="Create a new todo" type="text">
            </form>
        </div>
    </div>
    <hr>
   @foreach($todos as $todo)

   {{$todo->todo}}  <a href ="{{ route('todo.delete', ['id' => $todo->id]) }}" class=" btn btn-danger">X</a>

    <a href ="{{ route('todo.update', ['id' => $todo->id]) }}" class=" btn btn-info btn-xs">Update</a>
    
    @if(!$todo->completed)
        <a href ="{{ route('todo.completed', ['id' => $todo->id]) }}" class=" btn btn-success btn-xs">Mark as Completed</a>

    
        @else 

        <span class="text-success">Completed Task!</span>


    @endif

    <hr>

   @endforeach


@endsection
              
                 