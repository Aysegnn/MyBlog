@extends('user.masterpage')
@section('title')
Ayşe Gönen - BlogTask
@endsection
@section('content')

        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    
                        <h2>{{$posts->title}}</h2>
                        <img src="{{asset($posts->image)}}"  style="width:200px; height:200px">
                        <p>{!!$posts->content!!}</p>
                    
                    </div>
                </div>
            </div>
        </article>
@endsection
        