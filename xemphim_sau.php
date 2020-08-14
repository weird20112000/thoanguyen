<?php
        include ('connect.php');
          if(isset($_POST['ok']))
        header('location: dangnhap.php');
      ?>
      <?php
      
        if(isset($_POST['oa']))
        header('location: dangky.php');
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xemphim</title>

</head>
<body>
    <div class="all">
        <form method="POST">
            <div class="header">
                <div class="logo">
                    <img src="img/logo.jpg" width="200px" height="90px">
                </div>
                <div >
                    <input type="text" name="ten" class="input"  placeholder="         Nhập từ khóa, tên phim, đạo diễn, diễn viên cần tìm......">
                </div>
                <div class="timkiem">
                    <a href=""><img src="img/tiemkim1.png" width="35px" height="35px"> </a>
                
                </div>   
                <div>
                    <input type="submit" value="Đăng Nhập" name="ok" class="submit">
                </div>
                 <div>
                    <input type="submit" value="Đăng Ký" name="oa" class="submit">
                </div>  
            </div>
            <hr style="background-color:#ffff00; height: 3px;" >
            <div class="left"></div>    
            <div class="center">
                <nav>
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="trangchu.php" class="menu__item-link">
                                Trang chủ
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                            Quốc Gia
                            </a>
                            <ul>
                                <li><a href="#" title="Nhật Bản">Nhật Bản</a></li>
                                <li><a href="#" title="Trung Quốc">Trung Quốc</a></li>
                            </ul>
                        </li>
                        
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                                Thể Loại
                            </a>
                            <ul>
                                <li><a href="theloai_hd.php" title="Phim Hành Động">Phim Hành Động</a></li>
                                <li><a href="theloai_hh.php" title="Phim Hoạt Hình">Phim Hoạt Hình</a></li>
                                <li><a href="#" title="Phim Thiếu Nhi">Phim Thiếu Nhi</a></li>
                            </ul>
                            
                        </li>
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                                Phim Lẻ
                            </a>
                        </li><li class="menu__item">
                            <a href="" class="menu__item-link">
                                Phim Bộ
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                            Phim Chiếu Rạp
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                                Phim Thuyết Minh
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="tenlp2">TRANG CHỦ/ ẤU TRÙNG TINH NGHỊCH (PHẦN 2)
                </div>
                <div class="baoanh2">
                    <div class="imgxp" >
                        <img src="img/au_trung.jpg" alt="" width="130px" height="150px">
                    </div>
                    <b>XEM PHIM ẤU TRÙNG TINH NGỊCH (PHẦN 2)</b> 
                    <p >Larva Season 2 (Ấu Trùng Tinh Nghịch 2) tiếp tục những câu chuyện hài hước hàng ngày của hai chú ấu trùng Đỏ và Vàng . Chưa kịp vui mừng bao lâu khi hai chú ấu trùng đã được mọc cánh và bay lên trời, thì họ đã ko may mắn khi bị máy bay đâm vào và rơi xuống đất 1 cách "Vật Vã"…chuyện gì sẽ xảy ra!</p>
                    <iframe width="670px" height="380px" style="padding-left: 10px;" src="https://www.youtube.com/embed/09w8jHaOQvU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <b >TRAILER PHIM MỚI</b>
                <div class="baoanh3">

                    <div class="imgxp" >
                        <img src="img/au_trung.jpg" alt="" width="130px" height="150px">
                    </div>
                    <div class="text_trailer">
                        <p >Ấu trùng tinh nghịch<br></p>
                        <p>Mức phổ biến: 5</p>
                    </div>
                    <div class="imgxp" >
                        <img src="img/cuocchienvocuc.jpg" alt="" width="130px" height="150px">
                    </div>
                    <div class="text_trailer">
                        <p >Cuộc chiến vô cực<br></p>
                        <p>Mức phổ biến: 10</p>
                    </div>
                    <div class="imgxp" >
                        <img src="img/chuyentaubanggia.jpg" alt="" width="130px" height="150px">
                    </div>
                    <div class="text_trailer">
                        <p >Chuyến tàu băng giá<br></p>
                        <p>Mức phổ biến: 7</p>
                    </div>
                    
                </div>
                <div class="tenlp1">CÓ THỂ BẢN QUAN TÂM</div>
                <div style="padding-top: 600px; padding-bottom: 10px;"> <hr></div> 
                <div class="baoanh">
                    <div class="anhp">
                        <a href="xemphim.html">
                            <img src="img/doicuhomalibu.jpg" title="Đội cứu hộ Malibu" width="200px" height="300px">
                        </a>
                        <a href="xemphim.html">  Đội cứ hộ Malibu</a>
                    </div>
                    <div class="anhp">
                        <a href="xemphim.html">
                            <img src="img/luuly.jpg" title="Lưu Ly" width="200px" height="300px">    
                        </a>
                        <a href="xemphim.html">Lưu Ly</a>
                    </div>
                    <div class="anhp">
                        <a href="xemphim.html">
                            <img src="img/bikipluyenrong.jpg" title="Bí Kíp Luyện rồng (phần 3)" width="200px" height="300px"> 
                        </a>
                        <a href="xemphim.html">Bí Kíp Luyện rồng (phần 3)</a>
                    </div>
                    <div class="anhp">
                        <a href="xemphim.html">
                            <img src="img/dacvungam.jpg" title="Đặc vụ ngầm" width="200px" height="300px"> 
                        </a>
                        <a href="xemphim.html">Đặc vụ ngầm</a>
                    </div>
                    <div class="anhp">
                        <a href="xemphim.html">
                            <img src="img/chuyentaubanggia.jpg" title="chuyến tàu băng giá" width="200px" height="300px"> 
                        </a>
                        <a href="xemphim.html">chuyến tàu bang giá</a>
                    </div>
                </div>
            </div>
            
            <div class="right"></div>
            <hr style="background-color: #ffff00; height: 3px;" >

            <div class="footer">
                				
                <div class="col1" style="margin-left: 209px;">	   
                    <p>PHIMMOI</p>
                    <ul>
                        <li>Giới thiệu</li> 
        
                        <li>Youtube Channel</li>
                    </ul>        
                </div>
                <div class="col1" >       
                    <p>ĐÓNG GÓP</p>
                    <ul>               	
                        <li>Hướng dẫn sử dụng</li>
                        <li>Liên hệ quảng cáo</li>
                        <li>Góp ý</li>
                    </ul>       
                </div>
                <div class="col1">        
                    <p>QUY ĐỊNH</p>
                    <ul>
                        <li>Điều khoản sử dụng</li>
                        <li>Chính sách riêng tư</li>
                        <li>Nguyên tắc cộng đồng</li>
                        <li>Khiếu nại bản quyền</li>
                    </ul>        
                </div>
                <div class="col1" >       
                    <p >TRỢ GIÚP</p>
                    <ul>
                        <li>Hỏi đáp</li>
                        <li>Liên hệ</li>
                        <li>Báo lỗi</li>
                    </ul>       
                </div>	    
                <div class="col1" style="margin-right: 209px;">
                    Thông tin liên hệ:<br>
                    tienthoa2000@gmail.com
                </div>
        
            
            </div>
        </form>
    </div>
</body>
</html> 