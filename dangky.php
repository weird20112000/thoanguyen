<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Đăng Ký</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="css/font-awesome.css">
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">
</head>
<body>
<div class="center-container">
	<div class="header-w3l">
		<h1> ĐĂNG KÝ</h1>
	</div>
	
		<div class="main-content-agile">
		<div class="sub-main-w3">	
			<div class="wthree-pro">
				<h2>Đăng ký</h2>
			</div>
			<form action="#" method="post">
				<div class="pom-agile">
					<input placeholder="E-mail" name="email" class="user" type="email" required="">
				</div>
				<div class="pom-agile">
					<input  placeholder="Password" name="password" class="pass" type="password" required="">
				</div>
				<div class="sub-w3l">
					<h6><a href="#">Forgot Password?</a></h6>
					<div class="right-w3l">
						<input type="submit" value="Đăng ký" name="OK">
					</div>
				</div>
			</form>
		</div>
	</div>
	<div class="footer">
		<p>&copy; Trần Quang Phụng-UPM2 &copy;</p>
	</div>
</div>
                <?php
                    include('connect.php');
                    if(isset($_POST['OK']))
                    {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        if(empty($email)||empty($password))
                            {
                                echo "Không đủ thông tin để đăng nhập !";
                                die();
                            }
                            else
                            {
                                $sqlLogin = "insert into dangnhap (email, password) values( '$email', '$password') ";
                                $runlogin = mysqli_query($conn, $sqlLogin);
                                if($runlogin) 
                                {
									header('location:dangnhap.php'); 
								
                                }                                                        
                                else 
                                {
                                    echo "Not finish";
                                }

                            }

					}
		?>
</body>
</html>