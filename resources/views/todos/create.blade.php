@extends('layouts.layout')



@section('content')
<h1 class="text-2xl border-b pb-4">Create Todo:</h1>
<x-alert />
<form action="{{route('todos.store')}}" method="post" class="py-5">
    @csrf
    <input type="text" name="title" class="border shadow appearance-none border rounded py-2 px-3">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        Create
    </button>
    {{-- <input type="submit" value="create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"> --}}
</form>
<a href="{{route('todos.index')}}" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"">Back</a>
@endsection



