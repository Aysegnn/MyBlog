@extends('admin.homepage')
@section('title',$article->title . ' Makalesini Görüntülüyorsunuz')
@section('content')


                <!-- Begin Page Content -->
                <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    
                        <h2>{{$article->title}}</h2>
                        <img src="{{asset($article->image)}}"  style="width:200px; height:200px">
                        <p>{!!$article->content!!}</p>
                    
                    </div>
                </div>
            </div>
        </article>
              
@endsection
@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
   
</script>
@endsection