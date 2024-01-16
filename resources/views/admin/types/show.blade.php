@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>
            {{ $type->name }}
        </h1>
        @foreach ($type->projects as $project)
            <h2>{{ $project->title }}</h2>
        @endforeach
        <a href="{{ route('admin.types.index') }}" class="btn btn-danger">Return</a>
    </section>
@endsection
