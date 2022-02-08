@extends('layaouts.app')

@section('content')
<h3>mahdi articles</h3>

    @if($posts->count()>0)
        @foreach($posts as $post)
        <h2> <a href="{{ route('posts.show',['id'=>$post->id]) }}">{{ $post->title }}</a></h2>
        @endforeach
    @else
      <span>aucun post en base de donnes </span>
    @endif
@endsection