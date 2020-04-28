@extends('layouts.layout')



@section('content')
<div class="flex justify-between">
    <h1 class="text-2xl pb-4 px-2">Create Todo:</h1>
    <a href="{{route('todos.index')}}" class="cursor-pointer text-gray-500 px-2">
        <span class="fas fa-arrow-left" />
    </a>
</div>
<x-alert />
<form action="{{route('todos.store')}}" method="post" class="py-5">
    @csrf
    <div class="py-1">
        <input type="text" name="title" class="border shadow appearance-none border rounded py-2 px-3" placeholder="Title">

    </div>
    <div class="py-1">
        <textarea name="description" id="description" class="p-2 rounded border " placeholder="Description"></textarea>
    </div>


    <div class="py-2">

        @livewire('step')

    </div>
    <div class="py-1">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Create
        </button>

    </div>
</form>


@endsection



