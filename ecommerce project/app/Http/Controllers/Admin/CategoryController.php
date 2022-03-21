<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::all();
       return view ('admin.category.index',compact('category'));
    }
    public function add()
    {
     return view('admin.category.add');
     // return view('admin.category.add', ['categories' => Category::all()]);
    }
    public function insert(Request $request)
    {
       $category = new Category();
         
       if($request->hasFile('image'))
        {
           
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/category',$filename);
            $category->image = $filename;
        }
      
      
       $category-> name=$request->input('name');
       $category-> slug=$request->input('slug');
       $category-> description=$request->input('description');
       $category-> status = $request->input('status') == TRUE?'1':'0';
       $category-> popular = $request->input('popular') == TRUE?'1':'0';
       $category-> save();
       return redirect('/dashboard')->with('status',"category Added Succesfully");
       
              

    }
    public function edit($id){
        $category= Category::find($id);
        return view('admin.category.edit',compact('category'));
    }



    public function update(Request $request, $id)
    {


        if($request->hasFile('image'))
        {
            $category = Category::find($id);
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/category/',$filename);
            $category->image = $filename;
        }
       
       $category-> name=$request->input('name');
       $category-> slug=$request->input('slug');
       $category-> description=$request->input('description');
       $category-> status=$request->input('status')== TRUE?'1':'0';
       $category-> popular=$request->input('popular')== TRUE?'1':'0';
       $category->update();
       return redirect('/categories')->with('status',"Category Updated Succesfully");

    }
    public function destroy($id)
    {
           $category = Category::find($id);
           
           $category->delete();
           return redirect('/categories')->with('status',"Category Deleted");
    }
    
}
