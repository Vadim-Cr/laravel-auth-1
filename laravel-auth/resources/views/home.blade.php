@extends("layouts.main-layout")


@section("content")

<div class="container text-center">
    <h1>HOME: Hello, World from Vadim</h1>
    <ul class="list-unstyled">
        @foreach ($projects as $project)
        <li>
            {{$project->name}}
        </li>
        @endforeach
    </ul>
</div>


@endsection
