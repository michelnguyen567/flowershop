@extends("layout")

@section('body')
<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <table class="table-shopping-cart">
                    <tr class="table-head">
                        <th class="column-1"></th>
                        <th class="column-2">Sản phẩm</th>
                        <th class="column-3">Giá</th>
                        <th class="column-4 p-l-70">Số lượng</th>
                        <th class="column-5">Tổng tiền</th>
                    </tr>
                    @if(Session::has('cart'))
                    @foreach ($product as $sp)
                    <tr class="table-row">
                        <td class="column-1">
                            <div class="cart-img-product b-rad-4 o-f-hidden">
                                <img src="images/item-10.jpg" alt="IMG-PRODUCT">
                            </div>
                        </td>
                        <td class="column-2">{{$sp['item']['name']}}</td>
                        <td class="column-3">{{$sp['item']['unit_price']}}</td>
                        <td class="column-4">
                            <div class="flex-w bo5 of-hidden w-size17">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>

                                <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="1">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </td>
                        <td class="column-5">$36.00</td>
                    </tr>
                    @endforeach
                    @endif
                    
                </table>
            </div>
        </div>

        <div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm">
            <div class="flex-w flex-m w-full-sm">
                <div class="size11 bo4 m-r-10">
                    <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="coupon-code" placeholder="Nhập mã giảm giá">
                </div>

                <div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
                    <!-- Button -->
                    <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                        Chấp nhận
                    </button>
                </div>
            </div>

            <div class="size10 trans-0-4 m-t-10 m-b-10">
                <!-- Button -->
                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                    Cập nhật giỏ hàng
                </button>
            </div>
        </div>

        <!-- Total -->
        <div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 m-l-auto p-lr-15-sm">
            <h5 class="m-text20 p-b-24">
                Thông tin giỏ hàng
            </h5>

            <!--  -->
            <div class="flex-w flex-sb-m p-b-12">
                <span class="s-text18 w-size19 w-full-sm">
                    Tạm tính:
                </span>

                <span class="m-text21 w-size20 w-full-sm">
                    @if(Session::has('cart'))
                        {{$totalPrice}}
                    @else
                        0
                    @endif
                </span>
            </div>

            <!--  -->
            <form action="{{route('dat-hang')}}">
            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm">
                    Địa chỉ thanh toán:
                </span>

                <div class="w-size20 w-full-sm">
                    <label>ho</label>
                    <div class="size13 bo4 m-b-12">
                        <input type="text" name="ho" id="ho" class="sizefull s-text7 p-l-15 p-r-15">
                    </div>
                    
                    <label>ten</label>
                    <div class="size13 bo4 m-b-12">
                        <input type="text" name="name" id="name" class="sizefull s-text7 p-l-15 p-r-15">
                    </div>
                    
                    <label>dien thoai</label>
                    <div class="size13 bo4 m-b-12">
                        <input type="text" name="phone" id="phone" class="sizefull s-text7 p-l-15 p-r-15">
                    </div>
                    
                    <label>diachi</label>
                    <div class="size13 bo4 m-b-12">
                        <input type="text" name="address" id="address" class="sizefull s-text7 p-l-15 p-r-15">
                    </div>
                    
                    <label>ghichu</label>
                    <div class="size13 bo4 m-b-12">
                        <input type="text" name="note" id="note" class="sizefull s-text7 p-l-15 p-r-15">
                    </div>
                    
                </div>
            </div>
            <div class="flex-w flex-sb bo10 p-t-15 p-b-20">
                <span class="s-text18 w-size19 w-full-sm">
                    Phương thức thanh toán:
                </span>
                <input type="radio" name="payment" id="payment" value="COD" checked="checked">
                <label>thanh toan khi nhan hang</label>

                <input type="radio" name="payment" id="payment" value="ATM" checked="checked">
                <label>chuyen khoan</label>
            </div>
            <!--  -->
            <div class="flex-w flex-sb-m p-t-26 p-b-30">
                <span class="m-text22 w-size19 w-full-sm">
                    Tổng cộng:
                </span>
                <span class="m-text21 w-size20 w-full-sm">
                    $39.00
                </span>
            </div>

            <div class="size15 trans-0-4">
                <!-- Button -->
                <input type="submit" class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4" value="thanh toán">
                
            </div>
            </form>
        </div>
    </div>
</section>
@endsection