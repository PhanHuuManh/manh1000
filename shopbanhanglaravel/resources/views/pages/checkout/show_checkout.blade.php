@extends('layout')
@section('content')
<section id="cart_items">
		<div class="container suacss" >
			<div class="breadcrumbs">
				<ol class="breadcrumb">
					<li><a href="{{URL::to('/')}}">Trang chủ</a></li>
					<li class="active">Thanh toán giỏ hàng</li>
				</ol>
			</div>
			<div class="register-req">
				<p>Hãy đăng nhập hoặc đăng ký để thanh toán giỏ hàng để xem lịch sử mua hàng</p>
			</div><!--/register-req-->

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p >Điền thông tin mẫu gửi hàng</p>
							<div class="form-one suacss">
								<form action="{{URL::to('/save-checkout-customer')}}" method = "POST">
									{{csrf_field()}}
									<input type="text" name="shipping_email" placeholder="Email*">
									<input type="text" name="shipping_name" placeholder="Họ và Tên *">
									<input type="text" name="shipping_address" placeholder="Địa chỉ*">
									<input type="text" name="shipping_phone" placeholder="Số điện thoại*">
									<textarea name="shipping_notes" placeholder="Ghi chú đầy đủ thông tin về đơn hàng của bạn" rows="16"></textarea>
									<input type="submit" value="Gửi " name = "send_order" class="btn btn-primary btn-sm">
								</form>
							</div>
							
						</div>
					</div>
										
				</div>
			</div>
			<!-- <div class="review-payment">
				<h2>Xem lại giỏ hàng</h2>
			</div>

			
				<div class="payment-options">
					<span>
						<label><input type="checkbox"> Direct Bank Transfer</label>
					</span>
					<span>
						<label><input type="checkbox"> Check Payment</label>
					</span>
					<span>
						<label><input type="checkbox"> Paypal</label>
					</span>
				</div> -->
	</div>
</section> <!--/#cart_items-->
	<style>
		.suacss{
			width: 100%;
		}
		.suatext{
			font-size:20px;
		}
	</style>
@endsection