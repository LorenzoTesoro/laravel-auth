@extends('layouts.admin')

@section('content')

<div class="container mb-5">
    <h1 class="py-5">Update Comic: {{$project->title}}</h1>

    <form action="{{route('admin.projects.update', $project->slug)}}" method="post" class="card p-3">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="" aria-describedby="titleHlper" value="{{old('title', $project->title)}}">
            <small id="titleHlper" class="text-muted">Add the comic title here</small>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="4">{{old('description'), $project->description}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection