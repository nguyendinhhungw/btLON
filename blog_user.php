<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="blog_user.css">
    <style>
       

    </style>
</head>
<body>

    <header>
        <h1>Blog</h1>
        <nav>
            <a href="#" style="color:white;">Đăng nhập</a> | 
            <a href="#" style="color:white;">Đăng ký</a> | 
            <a href="#" style="color:white;">Fanpage</a>
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
                <a href="blog_cuocsong.php">BLOG CUỘC SỐNG</a>
                <a href="blog_truyen.php">BLOG TRUYỆN</a>
            </nav>
            <a class="send-article" id="guibai">GỬI BÀI  <i class="fa-regular fa-paper-plane"></i></a>
        </div>
        <div class="hd_timkiem">
            <div class="cl221111">
                <span class="material-icons material-symbols-outlined">search</span>
                <input type="text" name="" id="cl221111_timkiem" placeholder="Tìm kiếm.....">
            </div>
        </div>
    </header>

    <div class="container">
        <div class="container1">
            
        <div class="main-content">
                    <div class="main-content31">
                        <div class="content311">
                            <div class="main-content312">
                                <div class="main-content313">
                                        <p>PHIMMOIZZZ </p>
                                    <h4>Tiểu sử</h4>
                                    <br>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum recusandae, tempore voluptatibus at eum perspiciatis obcaecati hic dolore, minus illo distinctio animi eius perferendis, maxime atque. Velit sit cumque vitae?</p>
                                    <br><br>
                                    <p>Số lượt theo dõi: 10000</p>
                                </div>
                                
                                <img src="2.png" alt="User Avatar" class="cl221112_avatar">
                            </div>
                            <H3><a href="">NHẮN TIN</a></H3>
                            <H3><button type="submit" id="btn-theodoi">Theo dõi</button></H3>
                            <hr style="width:100%">
                            <div class="bviet">
                                <div class="bviet1">
                                    <img src="2.png" alt="">
                                    <p>bài viết 1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- <div id="dbai">
        <div class="new-post-container">
            <button id="btn-dong" style="right:0">x</button>
            <h2>Đăng Bài Mới</h2>
            <div class="upload-image">
                <img src="profile-thumnail.svg" alt="Placeholder Image">
                <button type="file" class="upload-btn">Chọn Ảnh</button>
            </div>

            <div class="form-group">
                <label for="title">Tiêu đề bài viết:</label>
                <input type="text" id="title" placeholder="Nhập tiêu đề">
            </div>

            <div class="form-group">
                <label for="category">Chuyên mục:</label>
                <select id="category">
                    <option value="default">Yêu cầu chọn chuyên mục</option>
                    <option value="life">Cuộc sống</option>
                    <option value="comic">TRUYỆN</option>
                </select>
            </div>

            <div class="form-group">
                <label for="summary">Tóm tắt:</label>
                <textarea id="summary" rows="4" placeholder="Nhập tóm tắt ngắn gọn"></textarea>
            </div>

            <div class="form-group">
                <label for="content">Nội dung bài viết:</label>
                <textarea id="content-editor"></textarea>
            </div>

            <div class="form-group">
                <label for="tags">Từ khóa:</label>
                <input type="text" id="tags" placeholder="Nhập từ khóa, cách nhau bởi dấu phẩy">
            </div>

            <div class="form-group">
                <input type="checkbox" id="checkbox">
                <label for="checkbox">Tôi đồng ý với điều khoản sử dụng</label>
            </div>

            <button class="submit-btn">Đăng Bài</button>
        </div>
        
    </div> -->
    <script src="blog_timkiem.js"></script>
</body>
</html>
