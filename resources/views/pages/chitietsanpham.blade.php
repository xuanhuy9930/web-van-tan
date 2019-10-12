@extends('master-layout')
@section('title')
Danh thiệp - Name card
@endsection
@section('css') 
<link rel="stylesheet" type="text/css" href="css/chitietsanpham.css">
@endsection
@section('content')
<div class="container" style="margin-top: 5%">
	<div class="row">
		<div class="col-md-12 col-xs-12 main" style="background-image: linear-gradient(to right top , #cca352 , white); padding-bottom: 30px;border-radius: 15px;">
			
			<div class="col-md-12 col-xs-12 " style="padding: 0 20px;">
			</div>
			<div class="col-md-4 col-sm-12 col-xs-12" style="float: left;">

				<img class="img-fluid img-sanpham1"src="images/inan/danhthiep-3.jpg" alt="">

			</div>

			<div class="col-md-8 title-left" style="float: right">
				<h5 class="title wow bounceInDown"data-wow-duration="2s"> 
				Danh thiếp - Name card </i>
			</h5>
			<p class="sub-title-left wow bounceInLeft" data-wow-duration="3s">Bạn làm doanh nhân tự do, bạn làm trong cơ quan nhà nước hay bất kỳ vị trí nào khác miễn là bạn có các mối quan hệ và bạn muốn phát triển sự nghiệp của mình, tôi dám chắc rằng sẽ là thiếu sót vô cùng lớn nếu như bạn không có tấm danh thiếp của bản thân hay công ty bởi vì không ai có thể nhớ hết các thông tin qua truyền miệng sau một lần gặp, nhưng cũng thật kỳ cục khi phải tìm kiếm bút giấy để viết lại thông tin của mình khi khách hàng hỏi đến. 
			</p>
			<span>
				<ul class="sub-title-thongtin-chitiet wow fadeInUpBig"data-wow-duration="3s" style="list-style: none;padding: 0px 12px 0 20px">
					<h2 class="tt-sp">Thông tin sản phẩm:</h2> 
					<li class="thongtin-chitiet">Kích thước: Thông dụng nhất là 90x54, 90 x50 hoặc tùy theo yêu cầu, sở thích của khách hàng.</li>
					<li class="thongtin-chitiet">Chất liệu:
						<li style="padding-left: 30px;">-Giấy Couche 300
						</li>
						<li style="padding-left: 30px;">-Giấy op</li>
						<li style="padding-left: 30px;">-Các loại giấy mỹ thuật </li>
					</li>
					<li class="thongtin-chitiet">Cán mờ hoặc cán bóng để tạo lớp màng bảo vệ giấy đồng thời giúp tăng tính thẩm mỹ cho sản phẩm.</li>
				</ul>
			</span>
		</div>
	</div>

	</div>

	<div class="title-spct text-center">sản phẩm đã làm</div>
	<div class="product-finish">
		<div class="sp-finish">
			<div class="img-tt-1">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/item-7.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Danh thiếp - Name card </a></h3>
					</div>	
				</div>
			</div>
			<div class="img-tt-1">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/item-7.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Danh thiếp - Name card </a></h3>
					</div>	
				</div>
			</div>
			<div class="img-tt-1">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/item-7.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Danh thiếp - Name card </a></h3>
					</div>	
				</div>
			</div>
			<div class="img-tt-1">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/item-7.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Danh thiếp - Name card </a></h3>
					</div>	
				</div>
			</div>
			<div class="img-tt-1">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/item-7.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Danh thiếp - Name card </a></h3>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

@endsection