<?php

namespace App\Http\Controllers;

use App\Category;
use DateTime;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    function getAddCate(){
        return view('admin.category.add_cate');
    }
    function postAddCate(Request $request){

        $cate=new Category();
        $cate->name=$request->name;
        $cate->order_display=$request->order_display;
        $cate->created_at = new DateTime;
        $cate->save();
        return redirect(route('listdanhmuc'));

    }
    function getListCate(){
        $cates = Category::all();
        return view('admin.category.list_cate',compact('cates'));

    }
}
