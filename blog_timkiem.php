<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="blog_timkiem.css">
    <style>
    </style>
</head>
<body>
    <div class="cl1">
        <div class="cl11_logo">
            <a href=""><span class="material-icons material-symbols-outlined">alternate_email</span></a>
        </div>
        <div class="cl12">
            <div class="cl121">
                <p>Tìm Kiếm</p>
            </div>
        </div>
    </div>
    <div class="cl2" >
        <div class="cl21">
            <div class="cl211">
                <div class="cl211_chucnang">
                    <a href="blog_trangchu.php"><span class="material-icons material-symbols-outlined">home</span></a>
                    <a href="blog_timkiem.php"><span class="material-icons material-symbols-outlined">search</span></a>
                    <a><span class="material-icons material-symbols-outlined" id="btn-mo4">add_circle</span></a>
                    <a href="blog_canhan.php"><span class="material-icons material-symbols-outlined">person</span></a>
                    <a href="#"><span class="material-icons material-symbols-outlined">notifications</span></a>
                </div>
                <div class="cl211_taikhoan">
                    <a href=""><span class="material-icons material-symbols-outlined">logout</span></a>
                </div>
            </div>
        </div>
        <div class="cl22">
            <div class="cl221">
                <div class="cl2211" id="cl2211">
                    <div class="cl22111">
                        <div class="cl221111">
                            <span class="material-icons material-symbols-outlined">search</span>
                            <input type="text" name="" id="cl221111_timkiem" placeholder="Tìm kiếm.....">
                        </div>
                        <p style="width:100%; padding-top: 20px; font-size:20px">Gợi ý tìm kiếm</p>
                        <div class="cl221112">
                            <div class="cl2211121">
                                <img src="https://via.placeholder.com/40" alt="User Avatar">
                                <p>User</p>
                            </div>
                            <button type="submit" id="btn-theodoi">Theo dõi</button>
                        </div>
                        <hr style="width:100%">
                        <!-- đăng bài --->
                         <div id="dbai">
                            <div id="dbai1">
                                <div class="dbai11">
                                    <h3>BAITAPLON</h3>
                                    <button id="btn-dong">x</button>
                                </div>
                                <div class="dbai12">
                                    <img src="https://via.placeholder.com/40" alt="User Avatar">
                                    <p>User</p>
                                </div>
                                <textarea placeholder="What's new?" class="dbai13" ></textarea>
                                <img src="" alt="">
                                <div class="dbai14">
                                    <div>
                                        <input type="file" id="uploadImage" accept="image/*">
                                        <br><br>
                                        <img id="preview" src="#" >
                                    </div>
                                    <button class="btn-post">Post</button>
                                </div>

                            </div>  
                         </div>
                        <!-- --->
                    </div>
                </div>
            </div>
                <div class="btn-mo2">
                    <button id="btn-mo21">+</button>
                </div>
        </div>
    </div>      
      
        

<script src="blog_timkiem.js"></script>

</body>
</html>