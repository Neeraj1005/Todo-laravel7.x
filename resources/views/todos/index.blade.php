@extends('layouts.layout')


@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl">Todo List:</h1>
    <a href="{{route('todos.create')}}" class="mx-2 py-2 text-blue-400 cursor-pointer text-white">
        <span class="fas fa-plus-circle"></span>
    </a>

</div>
<x-alert />
<ul class="my-5">
    @foreach ($todos as $todo)
    <li class="flex justify-between py-2 px-2">

        <div>
            @include('todos.complete-button')
        </div>

        @if ($todo->completed)
        <p class="line-through">{{$todo->title}}</p>
        @else
        <p>{{$todo->title}}</p>
        @endif

        <div>
            <a href="{{route('todos.edit',$todo->id)}}" class="text-orange-400 text-white cursor-pointer"><span class="fas fa-edit px-2" /></a>

            <span onclick="event.preventDefault();
                            if(confirm('Are you sure!')){
                            document.getElementById('form-delete-{{$todo->id}}')
                            .submit()}"
                            class="fas fa-trash cursor-pointer text-red-500 px-2" />
            <form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todos.destroy',$todo->id)}}">
                @csrf
                @method('delete')
            </form>
        </div>

    </li>

    @endforeach
</ul>

@endsection
