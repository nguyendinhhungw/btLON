<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Web</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="blog_baiviet.css">
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
            <div class="container3">
                <div class="main-content">
                        <div class="main-content31">
                                <div class="container3111">
                                    <h1>Càng lớn càng nhận ra mình cô độc</h1>
                                    <div class="container3111_author">Tác giả: Cúc Tịch <button type="submit" id="btn-theodoi">Theo dõi</button></div>
                                    <div class="container3111_meta">2024-10-01 19:20</div>

                                    <div class="container3111_content">
                                        <p> - Đi ăn một mình không đáng sợ, việc đáng sợ là bạn không thể cảm nhận được vị ngon của đồ ăn mang đến. Đi xem phim một mình không đáng sợ, điều đáng sợ là bạn không tập trung thưởng thức bộ phim một cách trọn vẹn mà chỉ quan tâm đến những cặp đôi xung quanh. Đi du lịch một mình không đáng sợ, điều đáng sợ là bạn chẳng cảm thấy tốt hơn sau những chuyến đi như thế.</p>

                                        <p>Câu nói tôi vẫn hay thường thấy trên mạng xã hội, trở thành một chủ đề bàn tán sôi nổi.</p>

                                        <p>“Tôi chọn cô đơn để phát triển sự nghiệp.</p>

                                        <p>Tôi chọn cô đơn để phát triển bản thân.</p>

                                        <p>Tôi chọn cô đơn để được tự do, được thoải mái làm điều mình yêu thích.”</p>
                                    </div>

                                    <div class="container3111_buttons">
                                        <button>Thích 0</button>
                                        <button>Chia sẻ</button>
                                    </div>
                                </div>
                                <div class="container3111">
                                    <h1>Bình luận</h1>
                                    
                                    <div class="binhluan">
                                        <div>
                                            <img src="https://via.placeholder.com/40" class="binhluan_avatar">
                                            <span>User</span>
                                        </div>
                                        <textarea class="binhluan1" placeholder="Trả lời..."></textarea>
                                        <div class="binhluan2">
                                            <input type="file" id="uploadImage" accept="image/*" >
                                            <br><br>
                                            <img id="preview" src="#" >
                                        </div>
                                        <button>trả lời</button>
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
    <div id="dbai">
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
        
    </div>
    <script src="blog_timkiem.js"></script>
</body>
</html>
