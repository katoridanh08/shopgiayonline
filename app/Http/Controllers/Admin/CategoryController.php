<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use DateTime;
class CategoryController extends Controller
{
    public function getIndexAdmin(){
        return view('admin.index');
    }
    public function getAddCate()
    {

    	$cate = Category::all()->toArray();
    	
    	return view('admin.category.add_cate',compact('cate'));
    }

    public function postAddCate(Request $request)
    {

        $cate             = new Category;
        $cate->name       = $request->txtCateName;
        $cate->parent_id  = $request->parent_id;
        $cate->txtFullName  = $request->txtFullName;
        $cate->created_at = new DateTime;
    	$cate->save();

    	return redirect(route('themdanhmuc'))->with("message","Thêm thành công");
    }

    public function getListCate()
    {
        $cates = Category::all();
        
        return view("admin.category.list_cate",compact('cates'));
    }


}
