@extends('layouts.master')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Detail</h1>

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h4 class="m-0 font-weight-bold text-primary">{{$artikel->judul}} </h4>
    <small class="font-italic">slug: {{$artikel->slug}}</small>
  </div>
  <div class="card-body">
    <p style="white-space: pre-line">{{$artikel->isi}}</p>
    
    <footer class="blockquote-footer">Created At: {{$artikel->created_at}} |
        @if ($artikel->created_at!=$artikel->updated_at)
        Updated At: {{$artikel->updated_at}}
        @endif |
    <cite title="Source Title" class="font-weight-bold"> by {{$user->name}}</cite></footer>
        <p>@foreach ($artikel->tag as $tag)
            <button class="btn btn-sm btn-warning float-right mx-1"><i class="fas fa-hashtag"></i>
            {{$tag}}</button> 
            @endforeach</p>
  </div>
</div>

@endsection