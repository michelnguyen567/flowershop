@extends("layout")

@section('body')


<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(/source/images/heading-pages-03.jpg);">
	<h2 class="l-text2 t-center">
		Đặt hàng thành công
	</h2>
	<p class="m-text13 t-center">
        Lấy chất lượng làm tiêu chí hàng đầu
    </p>
</section>
	
	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm" style="    border: 1px solid #e6e6e6;">
				<div class="flex-w flex-m w-full-sm">
					
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<!-- <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Hủy đặt hàng
						</button> -->
					</div>
				</div>

				<!-- Total -->
				<div class="bo9 w-size18 p-l-40 p-r-40 p-t-30 p-b-38 m-t-30 m-r-0 p-lr-15-sm">
					<h5 class="m-text20 p-b-24">
						Thông tin giỏ hàng
					</h5>

					<!--  -->
					<div class="flex-w flex-sb-m p-b-12">
						<span class="s-text18 w-size19 w-full-sm">
							Tổng tiền: 
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							{{$bill['total']}} VNĐ
						</span>
					</div>
					
					<!--  -->
					<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
						<span class="s-text18 w-size19 w-full-sm">
							Hình thức thanh toán:
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							{{$bill['payment']}}
						</span>

						<span class="s-text18 w-size19 w-full-sm">
							Họ tên:
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							{{$customer['ho']}} {{$customer['ten']}}
						</span>

						<span class="s-text18 w-size19 w-full-sm">
							Số điện thoại:
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							{{$customer['phone_number']}}
						</span>

						<span class="s-text18 w-size19 w-full-sm">
							Địa chỉ:
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							{{$customer['address']}}
						</span>

						<span class="s-text18 w-size19 w-full-sm">
							Ghi chú:
						</span>

						<span class="m-text21 w-size20 w-full-sm">
							{{$customer['note']}}
						</span>

					</div>

					<!--  -->
					<!-- <div class="flex-w flex-sb-m p-t-26 p-b-30"> -->
						<h6 class="m-text20 p-b-24">
							Cám ơn quý khách!!!
						</h6>
						
					<!-- </div> -->

				</div>

				<div class="size10 trans-0-4 m-t-10 m-b-10">
					<!-- Button -->
					<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
						Quay lại mua hàng
					</button>
				</div>
			</div>

			
		</div>
	</section>


@endsection