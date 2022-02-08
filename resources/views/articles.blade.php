@extends('layaouts.app')

@section('content')
<h1>mahdi articles</h1>
    @foreach($post as $post)
    <h2>{{ $post }}</h2>
    @endforeach

@endsection