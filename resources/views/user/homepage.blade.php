@extends('user.masterpage')
@section('title')
Ayşe Gönen - BlogTask
@endsection
@section('content')

                <div class="col-md-8">
                @foreach($articles as $article)
                    <div class="post-preview">
                        <a href="{{route('post.view',$article->id)}}">
                            <h2 class="post-title">{{$article->title}}</h2>
                            <img src="{{$article->image}}" alt="" style="width:100px; height:100px">
                            <h3 class="post-subtitle">{!!$article->content!!}</h3>
                        </a>
                        <p class="post-meta">
                            <a href="#!"> </a> <span style="float:right">{{$article->created_at->diffForHumans()}}</span>
                        </p>

                @if(!$loop->last)
                  <hr>
                  @endif
              </div>
              @endforeach
             
              <br>  
              {{ $articles->links() }}
                </div>
<style>
    .col-md-8{
        display:inline;
    }
</style>
                <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Kategoriler</h2>
                    </div>
                    @foreach($categories as $category)
                    <ul class="list-group">
                        <li class="list-group-item">{{$category->name}}<span class="badge bg-success rounded-pill">{{$category->articleCount()}}</span></li>
                       
                    </ul>
                @endforeach
                    </div>
                </div>

@endsection
          