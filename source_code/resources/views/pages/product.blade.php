@extends("layout")

@section('body')
<!-- Title Page -->
<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url(/source/images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Cửa hàng
		</h2>
		<p class="m-text13 t-center">
			Lấy chất lượng làm tiêu chí hàng đầu
		</p>
	</section>


	<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="search-product" placeholder="Tìm kiếm ...">

                        <button class="flex-c-m size5 ab-r-m color2 color0-hov trans-0-4">
                            <i class="fs-12 fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <br>
                    <h4 class="m-text14 p-b-7">
                        Loại
                    </h4>

                    <ul class="p-b-54">
                        @foreach ($type as $list)
                        <li class="p-t-4">
                            <a href="{{route('sp-theo-loai',$list['id'])}}" class="s-text13 active1">
                                {{$list['name']}}
                            </a>
                        </li>
                        @endforeach
                        
                    </ul>

                    <!--  -->
                    

                    
                </div>
            </div>

            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50">
                <!--  -->
                <div class="flex-sb-m flex-w p-b-35">
                    <div class="flex-w">
                        <div class="rs2-select2 of-hidden w-size12 m-t-5 m-b-5 m-r-10">
                            <select class="selection-2" name="sorting" id="order" onchange="order()">
                            
                                <option value="1">Sắp xếp ngẫu nhiên</option>                                
                                <option value="2">Giá: thấp đến cao</option>
                                <option value="3">Giá: cao xuống thấp</option>
                           
                            </select>
                        </div>
                    </div>

                    <span class="s-text8 p-t-5 p-b-5">
                        Hiển thị 1–12 của 16 kết quả
                    </span>
                </div>

                <!-- Product -->
                <div class="row">
                    @foreach($product as $sp)
                    <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew hov-img-zoom">
                                <img src="/source/images/products/{{$sp->image}}" alt="IMG-PRODUCT">

                                <div class="block2-overlay trans-0-4">
                                    <a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
                                        <i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
                                        <i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
                                    </a>

                                    <div class="block2-btn-addcart w-size1 trans-0-4">
                                        <!-- Button -->
                                        <button onclick="abc({{$sp->id}})" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
                                            Thêm vào giỏ
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="/product-detail?id={{$sp->id}}" class="block2-name dis-block s-text3 p-b-5">
                                    {{$sp->name}}
                                </a>

                                <span class="block2-Giá m-text6 p-r-5">
                                    {{$sp->unit_price}} VNĐ
                                </span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                <!-- Pagination -->
                <div class="pagination flex-m flex-w p-t-26">
                    <a href="#" class="item-pagination flex-c-m trans-0-4 active-pagination">1</a>
                    <a href="#" class="item-pagination flex-c-m trans-0-4">2</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    
   
    var a = window.location.href.split("sortby/");
    var selectBox = document.getElementById("order");
    //alert(window.location.href.search("sortby"));
    switch (a[1]){
        case "not":selectBox.selectedIndex=0;break;
        case "desc":selectBox.selectedIndex=1;break;
        case "asc":selectBox.selectedIndex=2;break;
         default:break;
    }
    function order(){
        
        
        //var selectedValue = selectBox.options[selectBox.selectedIndex].value;
        //alert(selectBox.selectedIndex);
        switch (parseInt(selectBox.selectedIndex))
        {
            case 0:
                if (window.location.href.search("sortby")!=-1)
                    window.location.href="not";
                else window.location.href=window.location.href+"/sortby/not";
                break;
            case 1:
           // alert("as");
            if (window.location.href.search("sortby")!=-1)
                    window.location.href="desc";
                else window.location.href=window.location.href+"/sortby/desc";
                break;
            case 2:
            if (window.location.href.search("sortby")!=-1)
                    window.location.href="asc";
                else window.location.href=window.location.href+"/sortby/asc";
                break;
            default:break;
        }
    }
</script>
@endsection