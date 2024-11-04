@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Singolo progetto 
                    </h1>
                </div>
            </div>

            <div class="card w-100 mb-3 text-center">
              <div class="card-body">
                <h5 class="card-title">{{ $project->name}}</h5>
                <p class="card-text">{{ $project->id}}</p>
                <p class="card-text">{{ $project->slug}}</p>
                <a href="#" class="btn btn-warning">Modifica</a>
                <a href="#" class="btn btn-danger">Elimina</a>
              </div>
            </div>
        </div>
    </div>
@endsection
