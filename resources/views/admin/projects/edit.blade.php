@extends('layouts.app')

@section('content')

<div class="container my-3">

    @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error )
                <ul>
                    <li>
                        {{$error}}
                    </li>
                </ul>
            @endforeach
        </div>

    @endif

    <form action="{{route('admin.projects.update', $project)}}" method="POST">
        @csrf
        @method('PUT')

            <h2 class="my-3">Modifica {{$project->title}}</h2>
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title', $project->title)}}" placeholder="Inserisci il titolo">
                @error('title')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="theme" class="form-label">Argomento</label>
                <input type="text" class="form-control @error('theme') is-invalid @enderror" id="theme" name="theme" value="{{old('theme', $project->theme)}}" placeholder="Inserisci l'argomento">
                @error('theme')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
                    <div class="mb-3">
                <label for="company" class="form-label">Azienda/responsabile</label>
                <input type="text" class="form-control @error('company') is-invalid @enderror" id="company" name="company" value="{{old('company', $project->company)}}" placeholder="Inserisci l'argomento">
                @error('company')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Data di inizio</label>
                <input type="date" class="form-control @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{old('start_date', $project->start_date)}}" placeholder="Inserisci la data d'inizio">
                @error('start_date')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">Data di fine</label>
                <input type="date" class="form-control @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{old('end_date', $project->end_date)}}" placeholder="Inserisci la data di fine">
                @error('end_date')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" cols="30" rows="5" id="description" name="description" placeholder="Inserisci una descrizione">{{old('description', $project->description)}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <a href="{{route('admin.projects.index')}}" class="btn btn-warning">Indietro</a>


    </form>


</div>

@endsection
