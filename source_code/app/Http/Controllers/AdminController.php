<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bill;
use App\Customers;
use App\BillDetail;
use App\Product;
use App\ProductType;
class AdminController extends Controller
{
    public function Getindex(){
        return view('admin.index');
    }

    public function getBill($status){
        //$status=0;
        $bill=Bill::all();
        //dd($bill);
        $customer=Customers::all();
        $billDetail=BillDetail::all();
        $product=Product::all();
        return view('admin.bill',['status'=>$status,
        'bill'=>$bill,
        'customer'=>$customer,
        'billdetail'=>$billDetail,
        'product'=>$product,
        'dem'=>1]);
    }
    
    public function giaoHang($id){
        $bill=Bill::where('id',$id)->first();
        $bill->status=1;
        $bill->save();
        return redirect()->back();
    }
    public function getAddProduct(){
        $product=Product::all();
        return view('admin.addproduct',['product'=>$product,'dem'=>1]);
    }
    public function getAddType(){
        $type=ProductType::all();
        return view('admin.addtype',['type'=>$type,'dem'=>1]);
    }

    public function buttonAddProduct(Request $req){
        $product=new Product();
        $product->name=$req->name;
        $product->id_type=$req->id_type;
        $product->description=$req->description;
        $product->unit_price=$req->unit_price;
        $product->unit=$product->unit;
        $product->new=1;
        $product->created_at=date('Y-m-d');
        if ($req->hasFile('image')) {
            $file = $req->image;
            $filename=date('d').date('m').date('h').date('i').date('s').".".$file->getClientOriginalExtension();
            //dd($filename);
            $file->move('source/images/products',$filename);
            $product->image=$filename;
        }
        $product->save();
        return redirect()->back();
    }
}
