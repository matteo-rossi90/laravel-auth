@extends('layouts.app')

@section('content')

<div class="container my-3">

    <h2>I miei progetti</h2>

        <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Data</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{$project->date}}</td>
                    <td>
                        <a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="" class="btn btn-warning">
                            <i class="fa-solid fa-pencil"></i>
                        </a>
                        <a href="" class="btn btn-danger">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>


</div>

@endsection
