
@extends('layouts.app')
@section('content')
    <section id="blog">
     <div class="container">
          <div class="row">
               <div class="col-md-offset-1 col-md-10 col-sm-12">
                    @foreach($posts as $post)
                        @php
                            $src=asset('storage/app/public/posts/posters/'.$post["poster"]);
                            $counts=1;
                            $src=preg_replace("/public/", "", $src, $counts);
                        @endphp
                        <div class="blog-post-thumb">
                             <div class="blog-post-image">
                                  <a href="{{ url('/posts/'.$post['id']) }}">
                                       <img src="{{ $src }}" class="img-responsive" alt="Blog Image">
                                  </a>
                             </div>
                             <div class="blog-post-title">
                                  <h3><a href="{{ url('/posts/'.$post['id']) }}">{{ $post['name'] }}</a></h3>
                             </div>
                             <div class="blog-post-format">
                                  <span><a href="#"><img src="../public/assets/images/author-image1.jpg" class="img-responsive img-circle"> Jen Lopez</a></span>
                                  <span><i class="fa fa-date"></i> July 22, 2017</span>
                                  <span><a href="#"><i class="fa fa-comment-o"></i> Comments</a></span>
                             </div>
                             <div class="blog-post-des">
                                  <p>{{ $post["description"] }}</p>
                                  <a href="{{ url('/posts/'.$post['id']) }}" class="btn btn-default">Читать</a>
                             </div>
                        </div>
                    @endforeach
               </div>
          </div>
     </div>
     </section>
@endsection
