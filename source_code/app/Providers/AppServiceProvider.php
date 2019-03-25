<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Cart;
use App\ProductType;
use Session;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            if (Session('cart')) {
                $oldCart= Session::get('cart');
                $cart=new Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
            
        });

        view()->composer('pages.product',function($view){
            $type= ProductType::all();
            $view->with(['type'=>$type]);
        });
    }
}
