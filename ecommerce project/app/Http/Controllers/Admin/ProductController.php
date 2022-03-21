<?php

namespace App\Http\Controllers\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
       return view ('admin.product.index',compact('products'));
    }
    public function add()
    {
        $category = Category::all();
return view('admin.product.add',compact('category'));
    }
    public function insert(Request $request)

    {
 

         $products = new Product();
      
        if($request->hasFile('image'))
        {
           
            $file=$request->file('image');
            $ext=$file->getClientOriginalExtension();
            $filename= time().'.'.$ext;
            $file->move('assets/uploads/product',$filename);
            $products->image = $filename;
        }
      
        
       $products-> cate_id=$request->input('cate_id');
       $products-> name=$request->input('name');
       $products-> slug=$request->input('slug');
       $products-> small_desc=$request->input('small_desc');
       $products-> qty=$request->input('qty');
       $products-> selling_price=$request->input('selling_price');
       $products-> original_price=$request->input('original_price');
       $products-> description=$request->input('description');
       $products-> status=$request->input('status')== TRUE?'1':'0';
       $products-> trending=$request->input('trending')== TRUE?'1':'0';
       
       $products-> save();
       return redirect('products')->with('status',"product Added Succesfully");
    } 
    public function edit($id){
        $products= Product::find($id);
        return view('admin.product.edit',compact('products'));
        $category = Category::all();
    }



    public function update(Request $request, $id)
    {
        $products = Product::find($id);
          if($request->hasFile('image'))
          {
              $file=$request->file('image');
              $ext=$file->getClientOriginalExtension();
              $filename= time().'.'.$ext;
              $file->move('assets/uploads/product/',$filename);
              $products->image = $filename;
          }

       
       $products-> name = $request->input('name');
       $products-> slug = $request->input('slug');
       $products-> small_desc=$request->input('small_desc');
       $products-> qty=$request->input('qty');
       $products-> selling_price=$request->input('selling_price');
       $products-> original_price=$request->input('original_price');
       $products-> description=$request->input('description');
      
       $products-> status=$request->input('status')== TRUE?'1':'0';
       $products-> trending=$request->input('trending')== TRUE?'1':'0';
       $products->update();
       return redirect('/products')->with('status',"Product Updated Succesfully");

    }
    public function destroy($id)
    { 
        $products= Product::find($id);
           $products->delete();
           return redirect('/products')->with('status',"Product Deleted");
    }
                 
}
