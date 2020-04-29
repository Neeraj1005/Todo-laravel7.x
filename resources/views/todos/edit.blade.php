@extends('layouts.layout')



@section('content')
<div class="flex justify-between">
    <h1 class="text-2xl px-2 pb-4">Update Todo:</h1>
    <a href="{{route('todos.index')}}" class="cursor-pointer text-gray-500 px-2">
        <span class="fas fa-arrow-left" />
    </a>

</div>

<x-alert />
<form action="{{route('todos.update',$todo->id)}}" method="post" class="py-5">
    @csrf
    @method('put')
    <div class="py-1">
        <input type="text" name="title" class="py-2 px-2 border rounded" value="{{$todo->title}}">
    </div>
    <div class="py-1">
        <textarea name="description" id="description" cols="30" rows="10" class="p-2 rounded border " placeholder="description">
            {{$todo->description}}
        </textarea>
    </div>
    <div class="py-2">
        @livewire('edit-step', ['steps' => $todo->steps])
    </div>
    <div class="py-1">
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            update
        </button>
    </div>
</form>
{{-- <a href="{{route('todos.index')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"">Back</a> --}}





@endsection



