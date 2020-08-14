
        
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
    <title>trang chủ</title>

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
                 <input type="submit" name="oa" value="Đăng ký" class="submit"/>
                </div>  
                
            </div>
            <hr style="background-color:#ffff00; height: 3px;" >
            <div class="left"></div> 
                
        
                
           
            <div class="center">
                <nav>
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                                Trang chủ
                            </a>
                        </li>
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                            Quốc Gia
                            </a>
                            <ul>
                                <hr>
                                <li><a href="#" title="Nhật Bản">Nhật Bản</a></li>
                                <hr >
                                <li><a href="#" title="Trung Quốc">Trung Quốc</a></li>
                            </ul>
                        </li>
                        
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                                Thể Loại
                            </a>
                            <ul>
                                <hr>
                                <li><a href="theloai_hd.php" title="Phim Hành Động">Phim Hành Động</a></li><hr>
                                <li><a href="theloai_hh.php" title="Phim Hoạt Hình">Phim Hoạt Hình</a></li><hr>
                                <li><a href="#" title="Phim Thiếu Nhi">Phim Thiếu Nhi</a></li><hr>
                            </ul>
                            
                        </li>
                        <li class="menu__item">
                            <a href="" class="menu__item-link">
                                Phim Lẻ
                            </a>
                        </li>
                        <li class="menu__item">
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
                <div class="tenlp1">
                    PHIM ĐỀ CỬ
                </div><br>
                <div style="padding-bottom: 10px;"> <hr></div> 
                <div class="baoanh">
                    
                    <div class="anhp">
                        <a href="xemphim_sau.php">
                            <img src="img/au_trung.jpg  " title="ấu trùng tinh nghịch(tập 1)" width="200px" height="300">
                        </a>
                        <a href="xemphim_sau.php">Ấu trùng tinh nghịch (tập 1)</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/vungdatlinhhon.jpg" title="Vùng đất lih hồn" width="200px" height="300px">
                        </a>
                        <a href=""> Vùng đất linh hồn</a>
                    </div>
                    <div class="anhp">
                        <a href="xemphim_ccvc.php">
                            <img src="img/cuocchienvocuc.jpg" title="Cuộc Chiến Vô Cực" width="200px" height="300px">
                        </a>
                        <a href="xemphim_ccvc.php "> Cuộc Chiến Vô Cực </a>
                    </div>   
                    <div class="anhp">
                        <a href="">
                            <img src="img/dienthicosao.jpg" title="Điên Thì Có Sao" width="200px" height="300px">
                        </a>
                        <a href="">  Điên Thì Có Sao </a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/matbiec.jpg" title="Mắt Biếc" width="200px" height="300px">
                        </a>
                        <a href=""> Mắt Biếc</a>
                    </div>  
                </div>
                <div class="tenlp1">PHIM HÀNH ĐỘNG</div>
                <div style="padding-top: 400px; padding-bottom: 10px;"> <hr></div> 
                <div class="baoanh">
                    <div class="anhp">
                        <a href="">
                            <img src="img/doicuhomalibu.jpg" title="Đội cứu hộ Malibu" width="200px" height="300px">
                        </a>
                        <a href="">  Đội cứ hộ Malibu</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/luuly.jpg" title="Lưu Ly" width="200px" height="300px">    
                        </a>
                        <a href="">Lưu Ly</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/bikipluyenrong.jpg" title="Bí Kíp Luyện rồng (phần 3)" width="200px" height="300px"> 
                        </a>
                        <a href="">Bí Kíp Luyện rồng (phần 3)</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/dacvungam.jpg" title="Đặc vụ ngầm" width="200px" height="300px"> 
                        </a>
                        <a href="">Đặc vụ ngầm</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/chuyentaubanggia.jpg" title="chuyến tàu băng giá" width="200px" height="300px"> 
                        </a>
                        <a href="">chuyến tàu bang giá</a>
                    </div>
                </div>
                <DIV class="tenlp1">PHIM HOẠT HÌNH  </DIV>
                <div style="padding-top: 400px; padding-bottom: 10px;"> <hr></div>
                <div class="baoanh">
                
                    <div class="anhp">
                        <a href="">
                            <img src="img/au_trung.jpg" title="ấu trùng tinh nghịch(tập 1)" width="200px" height="300">
                        </a>
                        <a href="">Ấu trùng tinh nghịch (tập 1)</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/duaconcuathoitiet.jpg" title="Đứa con của thời tiết" width="200px" height="300">
                        </a>
                        <a href="">Đứa con của thời tiết</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/daohaitac.jpg" title="Đảo hải tặc" width="200px" height="300">
                        </a>
                        <a href="">Đảo hải tặc</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/Re_Zero.jpg" title="Re:Zero (Phần 2)" width="200px" height="300">
                        </a>
                        <a href="">Re:Zero (Phần 2)</a>
                    </div>
                    <div class="anhp">
                        <a href="">
                            <img src="img/pokemon.jpg" title="Pokemon (Phần 2)" width="200px" height="300">
                        </a>
                        <a href="">Pokemon (Phần 2)</a>
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