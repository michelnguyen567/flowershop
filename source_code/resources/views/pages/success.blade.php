@extends("layout")

@section('body')


<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(images/heading-pages-01.jpg);">
		<h2 class="l-text2 t-center">
			Đặt hàng thành công
		</h2>
	</section>

	<!-- Cart -->
	<section class="cart bgwhite p-t-70 p-b-100">
		<div class="container">
			
			<div class="flex-w flex-sb-m p-t-25 p-b-25 bo8 p-l-35 p-r-60 p-lr-15-sm" style="    border: 1px solid #e6e6e6;">
				<div class="flex-w flex-m w-full-sm">
					
					<div class="size12 trans-0-4 m-t-10 m-b-10 m-r-10">
						<!-- Button -->
						<button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
							Hủy đặt hàng
						</button>
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
							$39.00
						</span>
					</div>

					<!--  -->
					<div class="flex-w flex-sb bo10 p-t-15 p-b-20">
						<span class="s-text18 w-size19 w-full-sm">
							Shipping:
						</span>

						<div class="w-size20 w-full-sm">
							<p class="s-text8 p-b-23">
								There are no shipping methods available. Please double check your address, or contact us if you need any help.
							</p>
						</div>
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