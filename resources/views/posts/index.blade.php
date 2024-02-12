@extends("layouts.app")
@section("content")
    @foreach($posts as $post)
{{--        <h1><a href="{{url('/posts/'.$post['id'])}}">{{$post["name"]}}</a></h1>--}}
{{--        <p>{{$post["description"]}}</p>--}}
        @php
           $src=asset('storage/app/public/posts/posters/'.$post["poster"]);
           $counts=1;
           $src=preg_replace("/public/", "", $src, $counts);
        @endphp
{{--        <img src="{{$src}}" class="img-thumbnail w-25" alt="">--}}
        <div class="card mb-3" style="max-width: 940px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{$src}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{url('/posts/'.$post['id'])}}">{{$post["name"]}}</a></h5>
                        <p class="card-text">{{$post["description"]}}</p>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
