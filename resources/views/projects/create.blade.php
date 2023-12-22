@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('projects.store')}}" method="POST">
                
            @csrf

            <div>
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="name">
            </div>

            <div>
                <label for="bio" class="form-label">bio</label>
                <input type="text" class="form-control" name="bio" id="bio" placeholder="bio">
            </div>

            <div>
                <label for="type" class="form-label">type</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="type">
            </div>

            <div>
                <label for="admin" class="form-label">admin</label>
                <input type="text" class="form-control" name="admin" id="admin" placeholder="admin">
            </div>

            <div>
                <input type="submit" class="btn btn-primary mt-4" value="crea">
            </div>
       </form>
    </div>
@endsection