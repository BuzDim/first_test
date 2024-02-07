
@foreach($posts as $post)
    <h1><a href="{{url('/posts/'.$post['id'])}}">{{$post["name"]}}</a></h1>
    <p>{{$post["description"]}}</p>






@endforeach
