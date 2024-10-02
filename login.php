<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="login.css">
    <style>
       

    </style>
</head>
<body>

    <header>
        <h1>Blog</h1>
        <nav>
            <a href="login.php">Đăng nhập</a> | 
            <a href="sign.php">Đăng ký</a> | 
            <a href="#">Fanpage</a>
        </nav>
        <div class="header-container">
            <div class="header-left">
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            <nav class="nav2">
                <a href="test.php">TRANG CHỦ</a>
                <a href="blog_canhan.php">BLOG CỦA TÔI</a>
                <a href="#">BLOG CUỘC SỐNG</a>
                <a href="#">BLOG TRUYỆN</a>
            </nav>
            <a href="#" class="send-article">GỬI BÀI  <i class="fa-regular fa-paper-plane"></i></a>
        </div>
        <div class="hd_timkiem">
            <div class="cl221111">
                <span class="material-icons material-symbols-outlined">search</span>
                <input type="text" name="" id="cl221111_timkiem" placeholder="Tìm kiếm.....">
            </div>
        </div>
    </header>

    <div class="container">
        <div class="container0">
            
        <div class="login-container">
            <div class="login-box">
                <h3>ĐĂNG NHẬP</h3>
                <form action="" method="POST">
                    <input type="email" placeholder="Email" required>
                    <input type="password" placeholder="Password" required>
                    <div class="social-login">
                        <button type="button" class="social-btn fb">f</button>
                        <span>or</span>
                        <button type="button" class="social-btn google">G</button>
                    </div>
                    <button type="submit" class="login-btn">ĐĂNG NHẬP</button>
                    <button type="button" class="register-btn">ĐĂNG KÝ</button>
                    <div class="options">
                        <label>
                            <input type="checkbox" name="remember" style="color:black"> Ghi nhớ mật khẩu
                        </label>
                        <a href="#" class="forgot-password">Quên mật khẩu</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
