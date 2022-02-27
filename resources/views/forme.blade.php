    @extends('layaouts.app')
    
    @section('content')

    <form action="{{ route('posts.create') }}" method="post">
            @csrf
            <input type="text" name ="title">
            <textarea name="content" id="" cols="30" rows="10"></textarea>
            <button type="submit" class="bg-green-500">creer</button>
    </form>

    @endsection
   