@extends('master-layout')
@section('css')
<link rel="stylesheet" href="css/tuvan.css">
@endsection


@section('content')

<div class="col-lg-12 col-md-12 col-sm-12">
    <h1 class="title-tieude1 text-center">
        Tư Vấn Khách Hàng
    </h1>




    <div class="container">
        <div class="row">
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <p class="tieude">
                <b> Quý khách lưu ý</b>
            </p>
        </div>
        <p class="thongtin ">- In càng nhiều giá càng rẻ <br>
            - Khách hàng thân thiết, khách hàng lớn của Công ty luôn nhận được ưu đãi đặc biệt về giá.
        </p>
        <p class="thongtin ">-  In ấn công nghệ hiện đại cho chất lượng in cao cấp, giá rẻ, giảm rủi ro xuống mức thấp nhất
        </p>
        
       
        <p class="thongtin ">- Luôn đúng hẹn, nhanh chóng và đáp ứng tốt nhất mọi yêu cầu từ khách hàng
        </p>
        
    </div>
</div>
</div>


<div class="container step-1">
    <div class="cach-1 ">
        <p></p>
        <h2>
            Cách 1:<b> Điền thông tin vào bảng dưới đây</b>: <i> Ngay sau khi nhận được đơn đặt hàng (trong giờ làm
                việc) chúng tôi sẽ chủ động liên hệ với khách hàng sau ít phút. Nếu ngoài giờ làm việc xin phép khách
                hàng sẽ liên hệ lại trong thời gian làm việc kế tiếp .</i>
        </h2>

    </div>
</div>




<div class="contact-section">
    <form class="contact-form" action="index.html" method="post">
        <input name="input_1" id="input_18_1" type="text" value="" class="contact-form-text" placeholder="Họ tên"
            aria-required="true" aria-invalid="false">
        <input type="email" class="contact-form-text" placeholder="Email">
        <input type="text" class="contact-form-text" placeholder="Số Điện Thoại">
        <textarea class="contact-form-text" placeholder="Yêu Cầu"></textarea>
        <input type="submit" class="contact-form-btn" value="Đặt Hàng Ngay">
    </form>
</div>


<div class="container step-2">
    <div class="cach-2 ">
        <h2>
            Cách 2 : Liên hệ trực tiếp qua số điện thoại (trong giờ làm việc)
        </h2>
        <div class="text-center">
            <img src="images/hot-line.png" class="rounded" alt="" style="margin-top: 5%">
        </div>
    </div>


    <div class="cach-3">
        <h2>
            Cách 3: Gửi email hoặc lời nhắn trên Fanpage
        </h2>


        <svg class="svg--source" width="0" height="0" aria-hidden="true">
            <symbol id="svg--google" viewbox="-13 -13 72 72">
                <path d="M48,22h-5v-5h-4v5h-5v4h5v5h4v-5h5 M16,21v6.24h8.72c-0.67,3.76-3.93,6.5-8.72,6.5c-5.28,0-9.57-4.47-9.57-9.75
									s4.29-9.74,9.57-9.74c2.38,0,4.51,0.82,6.19,2.42v0.01l4.51-4.51C23.93,9.59,20.32,8,16,8C7.16,8,0,15.16,0,24s7.16,16,16,16
									c9.24,0,15.36-6.5,15.36-15.64c0-1.17-0.11-2.29-0.31-3.36C31.05,21,16,21,16,21z" />
            </symbol>

            <symbol id="svg--facebook" viewbox="0 -7 16 30">
                <path
                    d="M12 3.303h-2.285c-0.27 0-0.572 0.355-0.572 0.831v1.65h2.857v2.352h-2.857v7.064h-2.698v-7.063h-2.446v-2.353h2.446v-1.384c0-1.985 1.378-3.6 3.269-3.6h2.286v2.503z" />
            </symbol>

            <symbol id="svg--pinterest" viewbox="-180 -180 850 850">
                <path d="M430.149,135.248C416.865,39.125,321.076-9.818,218.873,1.642
			 					 C138.071,10.701,57.512,76.03,54.168,169.447c-2.037,57.029,14.136,99.801,68.399,111.84
			 					 c23.499-41.586-7.569-50.676-12.433-80.802C90.222,77.367,252.16-6.718,336.975,79.313c58.732,59.583,20.033,242.77-74.57,223.71
			 					 c-90.621-18.179,44.383-164.005-27.937-192.611c-58.793-23.286-90.013,71.135-62.137,118.072
			  						c-16.355,80.711-51.557,156.709-37.3,257.909c46.207-33.561,61.802-97.734,74.57-164.704
							  c23.225,14.136,35.659,28.758,65.268,31.038C384.064,361.207,445.136,243.713,430.149,135.248z" />
            </symbol>
        </svg>

        <div class="wrapper">
            <div class="connect">

                <a href="#" rel="author" class="share google">
                    <svg role="presentation" class="svg--icon">
                        <use xlink:href="#svg--google" />
                    </svg>
                    <span class="clip">GOOGLE +</span>
                </a>

                <a href="#" rel="author" class="share facebook">
                    <svg role="presentation" class="svg--icon">
                        <use xlink:href="#svg--facebook" />
                    </svg>
                    <span class="clip">FACEBOOK</span></a>

                <a href="#" class="share  pinterest">
                    <svg role="presentation" class="svg--icon">
                        <use xlink:href="#svg--pinterest" />

                    </svg>
                    <span class="clip">PINTEREST</span>
                </a>
            </div>
        </div>



        <div class="cach-4">
            <h2>
                Cách 4. Công ty chúng tôi sẽ rất vinh dự và vui mừng khi bạn đến thăm Công ty tại địa chỉ:
            </h2>
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.0098662124933!2d105.82198171409885!3d21.585537973915123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31352721684ede47%3A0x1e4a34af2b15c066!2zMiBRdWFuZyBUcnVuZywgVGjDoG5oIHBo4buRIFRow6FpIE5ndXnDqm4sIFRow6FpIE5ndXnDqm4sIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1570700521065!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </div>






    </div>


</div>
















@endsection