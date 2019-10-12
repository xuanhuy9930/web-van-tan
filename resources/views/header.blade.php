<header>
	<div class="container header1">
		<div class="row">
			<div class="col-md-4 logo">
				<a href="{{route('trangchu')}}">
						<img src="images/logo1.png" alt="">
				</a>
			</div>

			<div class="tim-kiem col-md-4">
				<input type="text" placeholder=" Bạn cần in gì nào ?" class="ip-tim">
				<i class="fa fa-search search"></i>
			</div>
			<div class="hot-line col-md-4">
				<ul>

					<li>
						<img class="hot-img" src="images/hot-line-1.png" alt="">
					 <p style="font-weight: bold;">
						 Hotline <br> 0988 910 564
					</p></li>
					<li><a href="{{route('tuvan')}}" type="button" title="" class="btn btn-default guide-items">Hướng dẫn đặt hàng</a></li>
				</ul>
				<span class="menu-rsp container text-right" style="font-size:30px;cursor:pointer;" onclick="openNav()">&#9776;
				</span>
			</div>
		</div>
	</div>
</header>
<nav>
	<div class="menu container">
		<div id="mySidenav" class="sidenav" style="z-index: 9999">
			<div class="menu-rsp-full">
				<input type="text" placeholder="  Tìm kiếm..." class="ip-tim">
				<i class="fa fa-search search ic1"></i>
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a class="list-menu-rsp" href="{{route('trangchu')}}">Trang Chủ</a>
				<a class="list-menu-rsp" href="{{route('tintuc')}}">Giới thiệu</a>	
				<a class="list-menu-rsp" href="{{route('inan')}}">In Ấn</a>
				<a class="list-menu-rsp" href="{{route('quangcao')}}">Quảng Cáo</a>
				<a class="list-menu-rsp" href="{{route('tuvan')}}">Lĩnh Vực Mở Rộng</a>	
			</div>
		</div>
		</div>
		<div id="header3">
		<div class="list-menu container">
			<ul>
				<li><a href="{{route('tintuc')}}">Giới thiệu về công ty</a></li>
				<li><a href="{{route('trangchu')}}">Trang chủ</a></li>
				
				<li><a href="{{route('inan')}}">In ấn</a></li>
				<li><a href="{{route('quangcao')}}">Quảng cáo</a></li>
				<li><a href="{{route('tuvan')}}">Lĩnh vực mở rộng</a></li>
			</ul>
		</div>
		</div>
	</nav>
	