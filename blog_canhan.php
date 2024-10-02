<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="blog_canhan.css">
    <style>
       

    </style>
</head>
<body>

    <header>
        <h1>Blog</h1>
        <nav>
            <a href="#">Đăng nhập</a> | 
            <a href="#" >Đăng ký</a> | 
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
                <a href="blog_cuocsong.php">BLOG CUỘC SỐNG</a>
                <a href="blog_truyen.php">BLOG TRUYỆN</a>
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
        <div class="container1">
            <div class="container3">
                <div class="main-content">
                    <div class="main-content31">
                        <div class="content311">
                            <div class="main-content312">
                                <div class="main-content313">
                                        <p>PHIMMOIZZZ</p>
                                    <h4>Tiểu sử</h4>
                                    <br>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum recusandae, tempore voluptatibus at eum perspiciatis obcaecati hic dolore, minus illo distinctio animi eius perferendis, maxime atque. Velit sit cumque vitae?</p>
                                    <br><br>
                                    <p>Số lượt theo dõi: 10000</p>
                                </div>
                                
                                <img src="2.png" alt="User Avatar" class="cl221112_avatar">
                            </div>
                            <H3><BUTTON>CHỈNH SỬA TRANG CÁ NHÂN</BUTTON></H3>
                            <hr style="width:100%">
                            <hr style="width:100%">
                            <div class="dsbaidang">
                                <h2 class="dsbaidang-title">DANH SÁCH BÀI ĐĂNG</h2>

                                <div class="dsbaidang-header">
                                    <div class="dsbaidang-count">0 BÀI ĐĂNG</div>
                                    <button id="guibai">GỬI BÀI</button>
                                </div>

                                <table class="dsbaidang-table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th>ẢNH ĐẠI DIỆN</th>
                                            <th>TIÊU ĐỀ</th>
                                            <th>LỜI NHẮN</th>
                                            <th>NGÀY GỬI</th>
                                            <th>TRẠNG THÁI</th>
                                            <th>LƯỢT XEM</th>
                                            <th>XEM TRƯỚC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="8" class="no-results">Không tìm thấy kết quả nào</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="sidebar">
                    <div class="top-list">
                        <h3>Tác giả tiêu biểu<u></u></h3>
                        <ul>
                            <li><a href="#">1. Nageki No Bourei Wa Intai ... (8.088 views)</a></li>
                            <li><a href="#">2. The Fragrant Flower Bloom... (6.845 views)</a></li>
                            <li><a href="#">3. Blue Lock (3.208 views)</a></li>
                        </ul>
                    </div>
                    
                    <div class="top-list">
                        <h3>Truyện hay</h3>
                        <ul>
                            <li><a href="#">1. Nageki No Bourei Wa Intai ... (8.088 views)</a></li>
                            <li><a href="#">2. The Fragrant Flower Bloom... (6.845 views)</a></li>
                            <li><a href="#">3. Blue Lock (3.208 views)</a></li>
                        </ul>
                    </div>
                    <div class="top-list">
                        <h3>Đọc nhiều</h3>
                        <ul>
                            <li><a href="#">1. Nageki No Bourei Wa Intai ... (8.088 views)</a></li>
                            <li><a href="#">2. The Fragrant Flower Bloom... (6.845 views)</a></li>
                            <li><a href="#">3. Blue Lock (3.208 views)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="blog_trangchu.js"></script>
</body>
</html>
