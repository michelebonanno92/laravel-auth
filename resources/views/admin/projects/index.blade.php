@extends('layouts.app')

@section('page-title', 'Tutti i progetti')

@section('main-content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1 class="text-center text-info">
                        Tutti i progetti 
                    </h1>
                </div>
            </div>

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Slug</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($projects as $project )
                    <tr>
                      <th scope="row">{{ $project->id}}</th>
                      <td>{{ $project->name}}</td>
                      <td>{{ $project->slug}}</td>
                    </tr>
                  @endforeach
                
    
                </tbody>
              </table>
        </div>
    </div>
@endsection
