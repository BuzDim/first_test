@extends("layouts.old")
@section("content")

<h1>{{$post["name"]}}</h1>

@php
    $src=asset('storage/app/public/posts/posters/'.$post["poster"]);
    $counts=1;
    $src=preg_replace("/public/", "", $src, $counts);
@endphp

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

                <h4>Комментарии: </h4>
                @foreach($post['comments'] as $comment)
                    <div class="mb-3">
                        <label style="font-weight: bold;" for="user" class="form-label">{{ $comment['user']['name'] }}</label>
                        <p id="user" style="padding-left: 20px;">{{ $comment['content'] }}</p>
                        @if(Auth::id() == $comment['user_id'])
                            <form method="post" action="{{ route('commentary.destroy') }}">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $comment['id'] }}">
                                <button type="submit" class="btn btn-secondary">Удалить</button>
                            </form>
                        @endif
                    </div>
                @endforeach

                @if(Auth::check())
                <form method="post" action="{{ route('commentary.store') }}">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post['id'] }}">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Текст комментария</label>
                        <textarea required class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Сохранить</button>
                @else
                    <div class="mb-3">
                        <p>Для добавления комментария необходимо <a href="{{ route('login') }}">авторизоваться</a></p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
