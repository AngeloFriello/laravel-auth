@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('projects.update', $project)}}" method="POST">
                
            @csrf
        
            @method('PUT')

            <div>
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{$project->name}}">
            </div>
        
            <div>
                <label for="bio" class="form-label">bio</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="bio" value="{{$project->bio}}">
            </div>
        
            <div>
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="type" value="{{$project->type}}">
            </div>
        
            <div>
                <label for="admin" class="form-label">admin</label>
                <input type="text" class="form-control" name="admin" id="admin" placeholder="admin" value="{{$project->admin}}">
            </div>
        
            <div>
                <input type="submit" value="modifica" class="btn btn-primary my-2">
            </div>

        </form>
    </div>
@endsection


