@extends('master-layout')
@section('title')
Quảng cáo
@endsection
@section('css')
<link rel="stylesheet" href="css/tintuc.css">
@endsection
@section('content')
<main>
	<div class="container">
		<div class="row">
			<div class="col-md-9 tintuc-ct">
				<h2>Công ty In Văn Tân đã xuất bản được hơn 1000 mẫu dán nhãn mới và những thứ liên quan</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, est earum, molestiae amet laboriosam delectus odit pariatur doloribus labore incidunt voluptatum quidem ex quae accusamus atque! Enim eos vero tenetur?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, est earum, molestiae amet laboriosam delectus odit pariatur doloribus labore incidunt voluptatum quidem ex quae accusamus atque! Enim eos vero tenetur?</p>
				<img src="images/bg-footer-2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, est earum, molestiae amet laboriosam delectus odit pariatur doloribus labore incidunt voluptatum quidem ex quae accusamus atque! Enim eos vero tenetur?</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, est earum, molestiae amet laboriosam delectus odit pariatur doloribus labore incidunt voluptatum quidem ex quae accusamus atque! Enim eos vero tenetur?</p>
				<div class="baidang text-right">
				<span>Bài đăng: In Văn Tân</span><br>
				<span>Ngày đăng: 02/10/2019</span>
				</div>
			</div>
			<div class="col-md-3 baiviet-lq">
				<h2>Bài viết liên quan</h2>
				<a href="{{route('tintuc-chitiet')}}">
				<img src="images/bg-footer-2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eos quia numquam hic, distinctio nulla eligendi. Recusandae ratione minima est reiciendis harum repudiandae temporibus cumque molestiae tempore, id, provident voluptatum?</p>
				</a>
				<a href="{{route('tintuc-chitiet')}}">
				<img src="images/in2.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eos quia numquam hic, distinctio nulla eligendi. Recusandae ratione minima est reiciendis harum repudiandae temporibus cumque molestiae tempore, id, provident voluptatum?</p>
				</a>
				<a href="{{route('tintuc-chitiet')}}">
				<img src="images/in3.jpg" alt="">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi eos quia numquam hic, distinctio nulla eligendi. Recusandae ratione minima est reiciendis harum repudiandae temporibus cumque molestiae tempore, id, provident voluptatum?</p>
				</a>
			</div>
		</div>
		

		
	</div>
</main>
@endsection