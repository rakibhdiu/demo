<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin_index(){
        return view('admin.dashboard');
    }
    public function category(){
        $cat=Category::all();
        return view('admin.category',compact('cat'));
    }
    public function addCategory(){
        return view('admin.addcategory');
    }
    public function categoryStore(Request $request){

        Category::insert([
            'category_name'=> $request->category_name
            
        ]);
        return redirect()->route('addcategory')->with('message','Category added succesfully');
    }
    public function categoryDelete($id){
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category')->with('message','Category Deleted Successfully');
    }
    public function product(){
        return view('admin.product');
    }
    public function addProduct(){
        return view('admin.addproduct');
    }
}
