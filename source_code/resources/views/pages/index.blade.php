@extends("layout")

@section('body')
<!-- Slide1 -->
<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">
				@foreach($slide as $sli)
				<div class="item-slick1 item1-slick1" style="background-image: url(source/images/{{$sli->image}});">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<h2 class="caption1-slide1 xl-text2 t-center bo14 p-b-6 animated visible-false m-b-22" data-appear="rollIn">
							Shop Hoa SaDec
						</h2>

						<span class="caption2-slide1 m-text1 t-center animated visible-false m-b-33" data-appear="lightSpeedIn">
							LẤY CHẤT LƯỢNG LÀM TIÊU CHÍ HÀNG ĐẦU
						</span>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="product" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shopping nào !!!
							</a>
						</div>
					</div>
				</div>
				@endforeach
				

			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="banner bgwhite p-t-40 p-b-40">
		<div class="container">
			<div class="row">
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="source/images/cate/hoa_hong.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Hoa Hồng
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="source/images/cate/hoa_lavender.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Hoa Lavander
							</a>
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<img src="source/images/cate/hoa_lan.jpg" alt="IMG-BENNER">

						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="#" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								Hoa Lan
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Our product -->
	<section class="bgwhite p-t-45 p-b-58">
		<div class="container">
			<div class="sec-title p-b-22">
				<h3 class="m-text5 t-center">
					Sản phẩm
				</h3>
			</div>

			<!-- Tab01 -->
			<div class="tab01">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#best-seller" role="tab">Bán nhiều nhất</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#featured" role="tab">Mới ra</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#sale" role="tab">Sale</a>
					</li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content p-t-35">
					<!-- Bán nhiều nhất -->
					<div class="tab-pane fade show active" id="best-seller" role="tabpanel">
						<div class="row">
							@foreach($most as $sp)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelhot hov-img-zoom">
										<img src="source/images/products/{{$sp->image}}" alt="IMG-PRODUCT">

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
												</a>
											</div>
										</div>
									</div>
							
									<div class="block2-txt p-t-20">
										<a href="product-detail?id={{$sp->id}}" class="block2-name dis-block s-text3 p-b-5">
											{{$sp->name}}
										</a>

										<span class="block2-price m-text6 p-r-5" style="color: red;">
											{{$sp->unit_price}} VNĐ
										</span>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>

					<!-- Mới ra -->
					<div class="tab-pane fade" id="featured" role="tabpanel">
						<div class="row">
							@foreach($new as $sp)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew hov-img-zoom">
										<img src="source/images/products/{{$sp->image}}" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Thêm vào giỏ
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="source/product-detail.html" class="block2-name dis-block s-text3 p-b-5">
											{{$sp->name}}
										</a>
										<span class="block2-newprice m-text6 p-r-5" style="color:#66a8a6;">
											{{$sp->unit_price}} VNĐ
										</span>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>

					<!-- Sale -->
					<div class="tab-pane fade" id="sale" role="tabpanel">
						<div class="row">
							@foreach($sale as $sp)
							<div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
								<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelsale hov-img-zoom">
										<img src="source/images/products/{{$sp->image}}" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Thêm vào giỏ
												</button>
											</div>
										</div>
									</div>

									<div class="block2-txt p-t-20">
										<a href="product-detail?id={{$sp->id}}" class="block2-name dis-block s-text3 p-b-5">
											{{$sp->name}}
										</a>

										<span class="block2-price m-text6 p-r-5" style="color:#e65540;">
											{{$sp->promotion_price}} VNĐ
										</span>
									</div>
								</div>
							</div>
							@endforeach
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Blog -->
	<section class="blog bgwhite p-t-94 p-b-65">
		<div class="container">
			<div class="sec-title p-b-52">
				<h3 class="m-text5 t-center">
					Các bài viết
				</h3>
			</div>
			
			<div class="row">
			@foreach($news as $new)
				<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
					<!-- Block3 -->
					<div class="block3">
						<a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
							<img src="source/images/blog-01.jpg" alt="IMG-BLOG">
						</a>

						<div class="block3-txt p-t-14">
							<h4 class="p-b-7">
								<a href="blog-detail.html" class="m-text11">
									{{$new->title}}
								</a>
							</h4>

							<span class="s-text6">By</span> <span class="s-text7">Michel Nguyen</span>
							<span class="s-text6">on</span> <span class="s-text7">22/3/2019</span>

							<p class="s-text8 p-t-16">
								{{$new->content}}
							</p>
						</div>
					</div>
				</div>
			@endforeach
				
			</div>
		</div>
	</section>
@endsection


