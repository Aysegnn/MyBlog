@extends('admin.homepage')
@section('title','Tüm Kategoriler')
@section('content')


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="card shadow mb-4">
  
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Fotoğraf</th>
                                            <th>Makale Başlığı</th>
                                            <th>Kategori</th>
                                            <th>Oluşturulma Tarihi</th>
                                            <th>İşlemler</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($articles as $article)
                                       
                                        <tr>
                                            <td>
                                              <img src="{{$article->image}}" width="100" >
                                            </td>
                                            <td >{{$article->title}}</td>
                                            <td>{{$article->getCategoryName->name}}</td>
                                            <td>{{$article->created_at->diffForHumans()}}</td>
                                            <td >
                                                <a href="{{route('article.view',$article->id)}}" title="Görüntüle" class="btn btn-sm btn-success"> <i class="fa fa-eye"></i> </a>
                                                <a href="{{route('article.edit',$article->id)}}" title="Düzenle" class="btn btn-sm btn-primary"> <i class="fa fa-pen"></i> </a>
                                               <form action="{{route('article.delete',$article->id)}}" method="post">
                                               @method('DELETE')
                                               @csrf
                                                 <button title="Sil" class="btn btn-sm btn-danger" type="submit"> <i class="fa fa-times"></i></button>
                                               </form>
                                            </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
              
@endsection
@section('css')
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('js')
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>
   
</script>
@endsection