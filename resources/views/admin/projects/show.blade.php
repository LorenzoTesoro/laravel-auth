@extends('layouts.admin')

@section('content')

<img class="img-fluid" src="{{asset('storage/' . $project->cover_image)}}" alt="">
<h1>{{$project->title}}</h1>
<h5>{{$project->slug}}</h5>
<div class="description">
    {{$project->description}}
</div>

@endsection