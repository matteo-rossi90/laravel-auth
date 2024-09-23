@extends('layouts.app')

@section('content')

<div class="container my-3">

    <h2>{{$project->title}}</h2>

    <img class="my-2" src="{{$project->image}}" alt="{{$project->title}}">

    <div>{{$project->description}}</div>

</div>

@endsection
