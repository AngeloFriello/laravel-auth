@extends('layouts.app')

@section('content')
    <div class="container">
        <ul class="card my-4">
            <li>{{$project->name}}</li>
            <li>{{$project->type}}</li>
            <li>{{$project->admin}}</li>
            <li>{{$project->bio}}</li>
        </ul>
    </div>
@endsection