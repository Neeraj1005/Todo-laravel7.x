@extends('layouts.layout')


@section('content')

<h1 class="text-2xl">Todo List:</h1>
<ul class="">
    @foreach ($todos as $item)
    <li class="">
        <a class="" href="#">{{$item->title}}</a>
    </li>

    @endforeach
</ul>

@endsection
