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

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Автор</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Имя автора">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Текст комментария</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Сохранить</button>



            </div>
        </div>
    </div>
</div>
@endsection
