@extends('layouts.app')

@section('content')

<div class="container my-3">

    <h2>I miei progetti</h2>

        <table class="table text-center">
        <thead>
            <tr>
                <th scope="col">#id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Inizio</th>
                <th scope="col">Fine</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{$project->id}}</td>
                    <td>{{$project->title}}</td>
                    <td>{{($project->start_date)->format('d/m/Y')}}</td>
                    <td>{{($project->end_date)->format('d/m/Y')}}</td>
                    <td>
                        <a href="{{route('admin.projects.show', $project)}}" class="btn btn-primary">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                        <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-warning">
                            <i class="fa-solid fa-pencil"></i>
                        </a>

                        <form  class="d-inline" onsubmit="return confirm('Vuoi proprio eliminare il progetto {{$project->title}} ?')" action="{{route('admin.projects.destroy', $project)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>


</div>

@endsection
