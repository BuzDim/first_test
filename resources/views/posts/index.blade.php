@extends("layouts.app")
@section("content")
    @foreach($posts as $post)
        <h1><a href="{{url('/posts/'.$post['id'])}}">{{$post["name"]}}</a></h1>
        <p>{{$post["description"]}}</p>
        <img src="{{url('storage/app/public/posts/posters/'.$post["poster"])}}" alt="">

    @endforeach
@endsection
