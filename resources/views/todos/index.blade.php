@extends('layouts.layout')


@section('content')
<div class="flex justify-center">
    <h1 class="text-2xl">Todo List:</h1>
    <a href="{{route('todos.create')}}" class="mx-2 py-1 px-1 bg-blue-500 text-white rounded-full">Create</a>
</div>
<ul class="my-5">
    @foreach ($todos as $item)
    <li class="flex justify-center py-2">
        <p>{{$item->title}}</p>
        <a href="{{route('todos.edit',$item->title)}}" class="mx-2 py-1 px-1 bg-blue-500 text-white rounded">Edit</a>
    </li>

    @endforeach
</ul>

@endsection
