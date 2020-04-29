@extends('layouts.layout')



@section('content')
<div class="flex justify-between border-b pb-4 px-4">
    <h1 class="text-2xl pb-4 px-2">{{$todo->title}}</h1>
    <a href="{{route('todos.index')}}" class="cursor-pointer text-gray-500 px-2">
        <span class="fas fa-arrow-left" />
    </a>

</div>
<x-alert />
    <div class="py-1">
    <p>Discription:: {{$todo->description}}</p>
    </div>
    <div>

        @forelse ($todo->steps as $step)
            <h3>Steps{{$loop->index + 1}}</h3>
            <p>{{$step->name}}</p>
        @empty
        <p>No steps for this</p>
        @endforelse
    <div>

    </div>
@endsection



