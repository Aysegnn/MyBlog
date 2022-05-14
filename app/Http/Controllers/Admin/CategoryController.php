<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Input;

use App\Models\Category;

class CategoryController extends Controller
{
  
    public function index()
    {
        $categories=Category::get();
        return view('admin.categories.index',compact('categories'));
    }


    public function create(Request $request){
         

        $category=new Category;
        $category->name=$request->category;
        $category->slug=Str::slug($request->category);
        $category->save();
        
        return redirect()->route('categories')->with('succes','Kategori başarı ile oluşturuldu');
    }

    public function update(Request $request,$id){
    
  
        $category = Category::find($id);
        $category->name=$request->category;
        $category->slug=Str::slug($request->slug);
        $category->save();
        return redirect()->back();
      }
  
    public function delete(Request $request){
        $category=Category::findOrFail($request->id);
        $category->delete();
        return redirect()->back();
      }
}
