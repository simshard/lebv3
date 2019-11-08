@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">


            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <h1>Projects</h1>
                    <ul>
                        @forelse ($projects as $project)
                            <li>
                                <a href="{{$project->path()}}">
                                    <b>{{$project->projectName}}</b>
                                </a>
                                <em>{{$project->shortDescription}}</em>
                            </li>

                        @empty
                            <li>No Projects yet</li>
                        @endforelse
                    </ul>
                </div>
            </div>





        </div>
    </div>
</div>
@endsection
