@extends('master-layout')
@section('title')
Trang chủ
@endsection

@section('js')
<script src="js/main.js"></script>
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-3 list-title wow bounceInLeft">
			<div class="tin-van">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, similique, dolore. Quia quaerat incidunt accusantium nemo. Incidunt similique maiores, laboriosam omnis eius molestias pariatur nisi voluptas ducimus. Consectetur, et nostrum.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab distinctio, debitis, magnam, necessitatibus consequuntur </p>
			</div>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-8 slider">
					<img src="images/slider1.jpg" alt="">
					<img src="images/slider2.jpg" alt="">
					<img src="images/slider3.jpg" alt="">
				</div>
				<div class="col-md-4 content-text-right wow bounceInRight">
					<div class="title-slider">
					<h2>Những câu nói truyền động lực</h2>
					<p>Trên con đường thành công không có dấu chân của kẻ lười biếng</p>
					<p>Cuộc sống chỉ mang đến cho bạn 10% cơ hội, 90% còn lại là cách mà bạn phản ứng với nó</p>
					<p>Hãy tìm kiếm 3 sở thích của bạn: Một cái để kiếm tiền, một cái để bạn phát triển và một cái để sáng tạo</p>
					<a class="xemthem" href="{{route('tintuc')}}">Xem Thêm</a>
					</div>

				</div>
					
					
				<!-- </div> -->
			</div>
		</div>
	</div>
	<div class="process-wrap">
		<div class="process active">
			<p><span>In ấn</span></p>
		</div>
		<div class="process active">
			<p><span>Quảng Cáo</span></p>
		</div>

	</div>
	<div class="row sp-content">
		<div class="col-md-6 ab">
			<div class="row">
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/item-7.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/item-8.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/item-9.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/item-10.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/item-11.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/item-13.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<a class="xem-them-ct" href="{{route('inan')}}">Xem Thêm <i class="fa fa-arrow-right"></i></a>
			</div>
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/qc-1.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/qc-2.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/qc-3.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/qc-4.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/qc-5.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<div class="col-md-6 img-tt">
					<div class="product-item">
						<div class="product-img">
							<a href="{{route('chitietsanpham')}}"><img src="images/qc-6.jpg" alt=""></a>
						</div>
						<div class="product-mega">
							<h3><a>Danh thiếp - Name card </a></h3>
						</div>	
					</div>
				</div>
				<a class="xem-them-ct" href="{{route('quangcao')}}">Xem Thêm <i class="fa fa-arrow-right"></i></a>
			</div>
		</div>
	</div>
</div>
<div class="add-us">
		<div class="ly-do container">
			<p>lý do chọn chúng tôi</p>
		</div>
		<div class="container" style="margin-top: 2%;">
			<div class="row">
				<div class="col-md-4">
					<div class="row-94">
						<div class="box-about-home">
							<i class="fa fa-check-square icon-about"></i>
							<div class="sub-about">
								<h3 class="name-about">chất lượng sản phẩm in</h3>
								<div class="clearfix"></div>
								<div class="des-about">
									Chúng tôi sử dụng các công nghệ  in ấn & thành phần tiên tiến nhất
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row-94">
						<div class="box-about-home">
							<i class="fa fa-clock-o icon-about"></i>

							<div class="sub-about">
								<h3 class="name-about">thời gian hoàn thành</h3>
								<div class="clearfix"></div>
								<div class="des-about">
									Chúng tôi sử dụng các công nghệ  in ấn & thành phần tiên tiến nhất
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row-94">
						<div class="box-about-home">
							<i class="fa fa-users icon-about"></i>

							<div class="sub-about">
								<h3 class="name-about">dịch vụ khách hàng</h3>
								<div class="clearfix"></div>
								<div class="des-about">
									Chúng tôi sử dụng các công nghệ  in ấn & thành phần tiên tiến nhất
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row-94">
						<div class="box-about-home">
							<i class="fa fa-print icon-about"></i>

							<div class="sub-about">
								<h3 class="name-about">in mẫu miễn phí</h3>
								<div class="clearfix"></div>
								<div class="des-about">
									Chúng tôi sử dụng các công nghệ  in ấn & thành phần tiên tiến nhất
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row-94">
						<div class="box-about-home">
							<i class="fa fa-truck icon-about"></i>

							<div class="sub-about">
								<h3 class="name-about">giao hàng tận nơi</h3>
								<div class="clearfix"></div>
								<div class="des-about">
									Chúng tôi sử dụng các công nghệ  in ấn & thành phần tiên tiến nhất
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="row-94">
						<div class="box-about-home">
							<i class="fa fa-diamond icon-about"></i>

							<div class="sub-about">
								<h3 class="name-about">giá thành cạnh tranh</h3>
								<div class="clearfix"></div>
								<div class="des-about">
									Chúng tôi sử dụng các công nghệ  in ấn & thành phần tiên tiến nhất
								</div>
							</div>
						</div>
					</div>
				</div>	

			</div>
		</div>
		
	</div>
@endsection


@section('js')
<script>
	new WOW().init();
</script>
@endsection