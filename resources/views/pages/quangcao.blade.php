@extends('master-layout')
@section('title')
Mẫu thiết kế
@endsection
@section('css') 
<link rel="stylesheet" type="text/css" href="css/inan.css">
<link rel="stylesheet" href="css/quangcao.css">

@endsection
@section('content')
<main>	
	<div class="container">
		<h2 class="title-inan">Quảng cáo</h2>
		<div class="row inan-content">
			<div class="col-md-3 img-tt">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/qc-1.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Ảnh siêu nét khổ lớn trên các chất liệu, giấy ảnh, decan, canvas, pipi, vải lụa </a></h3>
					</div>	
				</div>
			</div>
			<div class="col-md-3 img-tt">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/qc-2.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Biển bạt, bangzon, khẩu hiệu, backrop - Standee </a></h3>
					</div>	
				</div>
			</div>
			<div class="col-md-3 img-tt">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/qc-3.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a> Biển led </a></h3>
					</div>	
				</div>
			</div>
			<div class="col-md-3 img-tt">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/qc-4.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Biển quảng cáo alu gắn chữ nổi kết hợp với bóng led </a></h3>
					</div>	
				</div>
			</div>
			<div class="col-md-3 img-tt">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/qc-5.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Gian hàng trải nghiệm - Quầy bán hàng lưu động </a></h3>
					</div>	
				</div>
			</div>
			<div class="col-md-3 img-tt">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/qc-6.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Biển báo giao thông - Biển phản quang </a></h3>
					</div>	
				</div>
			</div>
			<div class="col-md-3 img-tt">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/qc-7.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Trang trí ánh sáng nhà hàng, khách sạn, quán cafe </a></h3>
					</div>	
				</div>
			</div>
			<div class="col-md-3 img-tt">
				<div class="product-item">
					<div class="product-img">
						<a href="{{route('chitietsanpham')}}"><img src="images/qc-8.jpg" alt=""></a>
					</div>
					<div class="product-mega">
						<h3><a>Biển tên công ty - Biển phòng </a></h3>
					</div>	
				</div>
			</div>
			
			
		</div>
	</div>
</main>
@endsection
