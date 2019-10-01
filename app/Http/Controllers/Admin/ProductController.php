<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DateTime;
class ProductController extends Controller
{
    public function getAddProduct()
    {
        $product = product::all()->toArray();

        return view('admin.product.add_product',compact('product'));

    }
    public function postAddProduct(Request $request)
    {
        $product = new product;
        $product->cate_id         = $request->cate_id;
        $product->brand_id        = $request->brand_id;
        $product->name            = $request->name;
        $product->description     = $request->description;
        $product->detail          = $request->detail;
        $product->unit_price      = $request->unitPrice;
        $product->created_at      = new DateTime;
        $product->save();
        return redirect(route('listsanpham'))->with("message", "Thêm thành công");
    }
    public function getListProduct()
    {
        $products = product::all();

        return view("admin.product.list_product",compact('products'));
    }
    public function getEditProduct($id)
    {
        $product = product::all()->toArray();
        $item    = product::find($id);
        return view("admin.product.edit_product", compact('product', 'item'));
    }
    public function postEditProduct(Request $request,$id)
    {
        $product = product::find($id);
        $product->name            = $request->name;
        $product->description     = $request->description;
        $product->detail          = $request->detail;
        $product->cate_id         = $request->cate_id;
        $product->created_at      = new DateTime;
        $product->save();
        return redirect(route('listsanpham'))->with("message", "Thêm thành công");
    }

}
