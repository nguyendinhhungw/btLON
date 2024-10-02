<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="sign.css">
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
            
        <div class="register-container">
        <div class="register-box">
            <h2>ĐĂNG KÝ TÀI KHOẢN MỚI </h2>
            <div class="profile-pic">
                <img src="default_avatar.png" alt="Profile" class="avatar">
                <button class="upload-btn">CHỌN ẢNH</button>
            </div>
            <form action="" method="POST">
                <label>Họ tên hoặc bút danh:</label>
                <input type="text" placeholder="Họ tên hoặc bút danh" required>

                <label>Email:</label>
                <input type="email" placeholder="Email" required>

                <label>Mật khẩu:</label>
                <input type="password" placeholder="Mật khẩu" required>

                <label>Nhập lại mật khẩu:</label>
                <input type="password" placeholder="Nhập lại mật khẩu" required>
                <p class="password-tip">Bạn nên sử dụng mật khẩu có cả chữ, số, ký tự đặc biệt và chưa được dùng ở đâu khác</p>
                <button type="submit" class="register-btn">ĐĂNG KÝ</button>
            </form>
        </div>
    </div>
</div>
    </div>
</body>
</html>
