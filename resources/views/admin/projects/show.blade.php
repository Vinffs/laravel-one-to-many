@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>
            {{ $project->title }}
        </h1>
        <div><img src="{{ asset("storage/$project->thumb") }}" alt="{{ $project->title }}"></div>
        <p>{{ $project->description }}</p>
        <div>{{ $project->type ? $project->type->name : 'Uncategorized' }}</div>
        <a href="{{ route('admin.projects.index') }}" class="btn btn-danger">Return</a>
    </section>
@endsection
