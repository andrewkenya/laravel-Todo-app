@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12 mx-auto">
             
        <form action="{{ route('todo.save', ['id' => $todo->id ]) }}" method="post">

              {{ csrf_field() }}

            <input class="form-control input-lg" name="todo" value="{{$todo->todo}}"" type="text">
        </form>
    </div>
</div>

<hr>

@endsection