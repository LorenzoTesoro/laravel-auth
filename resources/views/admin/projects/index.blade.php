@extends('layouts.admin')

@section('content')

<h1>Projects</h1>
<a class="btn btn-primary position-fixed bottom-0 end-0 m-3" href="{{route('admin.projects.create')}}" role="button">
    <i class="fas fa-plus fa-lg fa-fw"></i>
</a>
<div class="table-responsive">
    <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody class="table-group-divider">
            @forelse ($projects as $project)
            <tr class="table-primary">
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td>
                    <i class="fas fa-eye fa-sm fa-fw"></i>
                    <i class="fas fa-pencil fa-sm fa-fw"></i>
                    <i class="fas fa-trash fa-sm fa-fw"></i>
                </td>
            </tr>
            @empty
            <tr>
                <td>No projects yet!</td>
            </tr>
            @endforelse
        </tbody>
        <tfoot>

        </tfoot>
    </table>
</div>

@endsection