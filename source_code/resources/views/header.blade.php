<header class="header2">
		<!-- Header desktop -->
		<div class="container-menu-header-v2 p-t-26">
			<div class="topbar2">
				<div class="topbar-social">
					<a href="#" class="topbar-social-item fa fa-facebook"></a>
					<a href="#" class="topbar-social-item fa fa-instagram"></a>
					<a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
					<a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
					<a href="#" class="topbar-social-item fa fa-youtube-play"></a>
				</div>

				<!-- Logo2 -->
				<a href="index.html" class="logo2">
					<img src="/source/images/logo/logo.png" alt="IMG-LOGO">
				</a>

				<div class="topbar-child2">
					<span class="topbar-email">
						shophoasadec@example.com
					</span>

					<div class="topbar-language rs1-select2">
						<select class="selection-1" name="time">
							<option>VNĐ</option>
							<option>USD</option>
						</select>
					</div>

					<!-- Cart  -->
					<a href="#" class="header-wrapicon1 dis-block m-l-30">
						<img src="/source/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
					</a>

					<span class="linedivide1"></span>

					<div class="header-wrapicon2 m-r-13">
						<img  src="/source/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<div>
						<span class="header-icons-noti">
						@if(Session::has('cart'))
							{{$totalQty}}
						@else 
							0 
						@endif</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem" id="list-cart">
							@if(Session::has('cart'))
								@foreach($product_cart as $product)
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="/source/images/item-cart-01.jpg" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											{{$product['item']['name']}}
										</a>

										<span class="header-cart-item-info">
											{{$product['qty']}} x {{$product['price']}}
										</span>
									</div>
									<div class="header-cart-item-txt">
										<a href="{{route('xoasgiohang',$product['item']['id'])}}">x</a>
									</div>
									
								</li>
								@endforeach
								@endif
							</ul>

							<div class="header-cart-total">
							@if(session::has('cart'))
								{{$totalPrice}}
							@else
								0
							@endif
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="{{route('gio-hang')}}" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Xem giỏ hàng
									</a>
								</div>

								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="#" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										Thanh toán
									</a>
								</div>
							</div>
						</div>
						</div>
						
					</div>
				</div>
			</div>

			<div class="wrap_header">

				<!-- Menu -->
				<div class="wrap_menu">
					<nav class="menu">
						<ul class="main_menu">
							<li>
								<a href="{{route('trang-chu')}}">Trang chủ</a>
							</li>

							<li>
								<a href="{{route('san-pham')}}">Shop</a>
							</li>

							<li>
								<a href="{{route('gio-hang')}}">Giỏ hàng</a>
							</li>

							<li>
								<a href="source/blog.html">Blog</a>
							</li>

							<li>
								<a href="source/about.html">Chi tiết</a>
							</li>

							<li>
								<a href="source/contact.html">Liên hệ</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
	</header>   
	