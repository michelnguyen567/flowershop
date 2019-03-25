<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Slide;
use App\News;
use App\ProductType;
use App\Cart;
use App\Customers;
use App\Bill;
use App\BillDetail;

use Session;
class PageController extends Controller
{
    public function getKT()
    {
        $oldCart= Session::get('cart');
        $cart=new Cart($oldCart);
        return view('welcome',['sess'=>$cart->totalPrice]);
    }

    public function getIndex(){
        $most=Product::take(8)->get();
        $new=Product::where('new',1)->take(8)->get();
        $sale=Product::where('promotion_price','>','0')->take(8)->get();
        $slide=Slide::all();
        $news=News::take(3)->get();   
        return view('pages.index',['most'=>$most,'new'=>$new,'sale'=>$sale,'slide'=>$slide,'news'=>$news]);
    }

    public function getProduct(){
        $product=Product::take(12)->get();
        return view('pages.product',['product'=>$product]);
    }

    public function getProductbyType($type){
        $product=Product::where('id_type',$type)->take(12)->get();

        
        return view('pages.product',['product'=>$product,'loai'=>$type,'as'=>""]);   
    }
    public function getProductbyOrderbyType($type,$order){
        if ($order=='desc'){
            $product=Product::where('id_type',$type)->orderby('unit_price','desc')->take(12)->get();
        }
        else 
        if ($order=='asc'){
            $product=Product::where('id_type',$type)->orderby('unit_price','asc')->take(12)->get();
        }
        else
        $product=Product::where('id_type',$type)->take(12)->get();
        return view('pages.product',['product'=>$product,'loai'=>$type]); 
        
    }
    public function getProductbyOrder($order){
        if ($order=='desc'){
            $product=Product::orderby('unit_price','desc')->take(12)->get();
        }
        else 
        if ($order=='asc'){
            $product=Product::orderby('unit_price','asc')->take(12)->get();
        }else
        $product=Product::where('id_type',$type)->take(12)->get();
        return view('pages.product',['product'=>$product]); 
        
    }

    public function getCart(){
        if (Session('cart')) {
            $oldCart= Session::get('cart');
            $cart=new Cart($oldCart);
            return view('pages.cart',['product'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
        }
        return view('pages.cart');
    }

    public function getDetail(Request $req){
        $sp= Product::where('id',$req->id)->first();
        $type=ProductType::where('id',$sp->id_type)->first();
        $relate=Product::where('id_type',$sp->id_type)->take(8)->get();
        return view('pages.product-detail',['sp'=>$sp,'type'=>$type,'relate'=>$relate]);
    }

    public function getAddtoCart(Request $req,$id){
        $product = Product::find($id);
        $oldCart= Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        
        $cart->add($product,$id);
        $req->session()->put('cart',$cart);
        return (['product'=>$product]);
       
    }

    public function getDelCart(Request $req,$id){
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->reduceByOne($id);
        $req->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getCheckOut(Request $req){
        $cart=Session::get('cart');
        //dd($cart);
        $customer= new Customers();
        $customer->ho=$req->ho;
        $customer->name=$req->name;
        $customer->phone_number=$req->phone;
        $customer->address=$req->address;
        $customer->note=$req->note;
        $customer->save();

        $bill=new Bill();
        $bill->id_customer=$customer->id;
        $bill->date_order=date('Y-m-d');
        $bill->total=$cart->totalPrice;
        $bill->payment=$req->payment;
        $bill->note=$req->note;
        $bill->save();


        foreach ($cart->items as $product => $value){
            $detail=new BillDetail();
            $detail->id_bill=$bill->id;
            $detail->id_product=$product;
            $detail->quantity=$value['qty'];
            $detail->unit_price=($value['price']/$value['qty']);
            $detail->save();
        }
       
        Session::forget('cart');

        return view("pages.success");

        //return view("welcome",['thongbao'=>"dat hang thanh cong"]);

        return view("welcome",['name'=>$customer]);
    }
}
