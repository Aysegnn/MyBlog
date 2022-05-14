<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\File;


class ArticleController extends Controller
{
 
    public function index()
    {
        $articles=Article::orderBy('created_at','ASC')->get();
        return view('admin.articles.index',compact('articles'));
    }

    public function create()
    {
        $categories=Category::all();
        return view('admin.articles.create',compact('categories'));
    }

  
    public function store(Request $request)
    {
        $request->validate([
          
            'title'=>'min:3',
            'image'=>'required|image|mimes:jpeg,png,jpg|max:2048'


        ]);


        $article=new Article;
        $article->title=$request->title;
        $article->category_id=$request->category;
        $article->content=$request->content;
        $article->slug=Str::slug($request->title);

        if($request->hasFile('image')){
            $imageName=Str::slug($request->title). ".". $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $article->image='uploads/'.$imageName;
        }


        $article->save();
       return redirect()->route('article.index');
    }


    public function show($id)
    {
        print_r($id);exit;
        $article=Article::find($id);
        echo "<pre>";print_r($article);exit;
        return view('admin.articles.create',compact('categories'));
    }

    public function edit($id)
    {
        $article=Article::findOrFail($id);
        $categories=Category::all();   
        return view('admin.articles.edit',compact('categories','article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
          
            'title'=>'min:3',
            'image'=>'image|mimes:jpeg,png,jpg|max:2048'


        ]);


        $article=Article::findOrFail($id);
        $article->title=$request->title;
        $article->category_id=$request->category;
        $article->content=$request->content;
        $article->slug=Str::slug($request->title);

        if($request->hasFile('image')){
            $imageName=Str::slug($request->title). ".". $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads'),$imageName);
            $article->image='uploads/'.$imageName;
        }


        $article->save();
       return redirect()->route('article.index');
      
    }


    public function destroy($id)
    {
        Article::find($id)->delete();
        return redirect()->route('article.index');
    }
}
