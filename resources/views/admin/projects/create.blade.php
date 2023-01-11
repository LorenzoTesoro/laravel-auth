@extends('layouts.admin')

@section('content')
<h1>Create a new Project</h1>
<form action="{{route('admin.projects.store')}}" method="post">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="learn larevel auth" aria-describedby="titleHelper">
        <small id="titleHelper" class="text-muted">Add a title for the current project, max 100 characters, it must be unique!</small>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label"></label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection