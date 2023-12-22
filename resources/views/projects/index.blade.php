@extends('layouts.app')

@section('content')
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>type</th>
                    <th>name</th>
                    <th>admin</th>
                    <th>bio</th>
                </tr>
                
            </thead>
    
            @foreach ($projects as $project)
            <tbody>
                <tr>
                    <td><a href="{{route('projects.show', $project)}}">{{$project->name}}</a></td>
                    <td>{{$project->id}}</td>
                    <td>{{$project->type}}</td>
                    <td>{{$project->admin}}</td>
                    <td>{{$project->bio}}</td>
                    <td><span><a href="{{route('projects.edit', $project)}}" class="btn btn-secondary">Edit</a></span></td>
                    <td><span>
                            <form action="{{route('projects.destroy', $project)}}" method="POST">
            
                                @csrf
            
                                @method('DELETE')
            
                                <input type="submit" value="Cancella" class="btn btn-primary">
            
                            </form>
                        </span>
                    </td>
                </tr>
            </tbody>
            
            @endforeach
        </table>
        
    </div>
    
@endsection