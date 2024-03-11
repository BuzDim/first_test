@extends("layouts.old")
@section("content")
    <div class="container">
        <div class="d-flex flex-wrap gap-3 justify-content-evenly">
            @foreach($posts as $post)
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/posts/posters/' . $post["poster"]) }}" class="card-img-top" alt="...">

                    <div class="card-body">
                        <h5 class="card-title"><a href="{{url('/posts/'.$post['id'])}}">{{$post["name"]}}</a></h5>
                        <p class="card-text">{{$post["description"]}}</p>
                        <a href="{{url('/posts/'.$post['id'])}}" class="btn btn-primary">Добавить комментарии</a>
                    </div>

                    <form method="post" class="text-center" action="{{route("posts.destroy", $post["id"])}}">
                        @csrf
                        @method("delete")
                        <button type="submit" class="btn btn-dark m-auto"
                                style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
                            Удалить
                        </button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
@endsection
