<div class="navbar navbar-default navbar-static-top" role="navigation">
     <div class="container">

          <div class="navbar-header">
               <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
                    <span class="icon icon-bar"></span>
               </button>
               <a href="{{ url('/') }}" class="navbar-brand">Neuron</a>
          </div>

          <div class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{{url('/posts/')}}">Главная</a></li>
                    <li><a href="{{url('/posts/create')}}">Новый пост</a></li>
                    <li><a href="{{url('/categories/create')}}">Категории</a></li>
               </ul>

          </div>

  </div>
</div>
