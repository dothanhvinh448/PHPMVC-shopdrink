<body>
    <div class="container-fluid" style=" margin-top: 50px;">
        <header class="row">
            <div class="col-sm-12 content">
                <img src="../Content/image/header11.jpg">
            </div>
            <div class="col-sm-7 shopping-mall">
                <!-- <h1 style="color: red;">Eten&Drinken </h1> -->
                <form onsubmit="submitFn(this, event);" action="trangchu.php?action=home&act=timkiem" method="post" >
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <!-- <input  type="text" name="txtsearch" class="search-input" placeholder="Bạn tìm gì !!!" /> -->
                            <!-- <button name="submit" type="submit" id="btsearch" class="search-icon" onclick="searchToggle(this, event);" ><span></span></button> -->
                        </div>
                        <!-- <span class="close" onclick="searchToggle(this, event);"></span> -->
                    </div>
                </form>
            </div>
            <div class="col-sm-5">
                <!-- <img src="./Content/image/header4.jpg" alt="" > -->
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ">
                    <li class="nav-item active">
                        <a class="nav-link" href="trangchu.php"><span class="glyphicon glyphicon-home"> Trang-chủ
                            </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="glyphicon glyphicon-th-list"> Giới-thiệu </span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-earphone"></span>Liên-Hệ-NV</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#"><h7 style="color: blue;" > FB :</h7>Lê Thanh Tùng </a>
                            <a class="dropdown-item" href="#"><h7 style="color: blue;" > FB :</h7>ĐỖ THÀNH VINH </a>
                           
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="glyphicon glyphicon-envelope"> Góp-ý </span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><span class="glyphicon glyphicon-question-sign"> Hỏi-Đáp
                            </span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>Tài-khoản</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="trangchu.php?action=dangky" > Đăng Ký </a>
                            <a class="dropdown-item"  href="trangchu.php?action=dangnhap" >Đăng Nhập</a>
                            <a class="dropdown-item" href="trangchu.php?action=dangnhap&act=dangxuat" onclick=" Hoidap() ; return false ;">Đăng Xuất</a>
                            <a class="dropdown-item" href="trangchu.php?action=thaydoimk">Đổi Mật Khẩu</a>
                            <div class="dropdown-divider"></div>
                            <!-- <a class="dropdown-item" href="trangchu.php?action=dangnhap&act=dangxuat" onclick=" Hoidap() ; return false ;">Đăng Xuất</a> -->
                            <!-- <a class="dropdown-item" href="trangchu.php?action=thaydoimk">Đổi Mật Khẩu</a>
                            <a class="dropdown-item" href="#">Cập Nhật Hồ Sơ</a> -->
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span>MEnu</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="trangchu.php?action=home&act=sanpham"> <span> Đồ Uống | Sinh Tố 
                                </span></a></li>
                        <li class="list-group-item"> <a href="trangchu.php?action=home&act=khuyenmai"> <span>Đồ Uống Khuyến
                                    Mãi </span></a></li>
                        <li class="list-group-item"> <a href="trangchu.php"><span> Đồ Uống | caffe  </span></a></li>
                    
                        <li > <img class="list-group-item" src="../Content/image/header7.jfif" width="340px"  height="350" ></li>
                    </ul>
                            <div class="dropdown-divider"></div>
                            <!-- <a class="dropdown-item" href="trangchu.php?action=dangnhap&act=dangxuat" onclick=" Hoidap() ; return false ;">Đăng Xuất</a> -->
                            <!-- <a class="dropdown-item" href="trangchu.php?action=thaydoimk">Đổi Mật Khẩu</a>
                            <a class="dropdown-item" href="#">Cập Nhật Hồ Sơ</a> -->
                        </div>
                    </li>
                </ul>
                
            </div>
            <ul class="navbar-nav reverser" >
            <li class="nav-item" >
                   <a href="trangchu.php?action=giohang" class="nav-link"><i class="fa fa-shopping-cart" style="font-size:28px;color:white"></i></a>
               </li>
               <li>
                  <?php
                    if(isset($_SESSION['cart']))
                       {
                        $dem=count($_SESSION['cart']);
                        }
                       else
                         {
                             $dem=0;
                          }
                   ?>
                        <p style="color: white; margin-top: 20px; margin-left: 0px;">(<?php echo $dem  ; ?>)    </p>

                </li>
                     <?php
                         if(isset($_SESSION['makh'])&& isset($_SESSION['tenkh'])):
                             $name=$_SESSION['tenkh'];   
                      ?>
                           <p style="color: aqua; margin-top: 20px; margin-left: 0px;"><?php echo " Tài Khoản : ".$name; ?></p>
                       <?php
                          else:
                             echo'<p style="color: while; margin-top: 20px; margin-left: 0px;">  Vui Lòng Đăng Nhập/Đăng Ký !  </p>';
                        ?>
                         <?php
                           endif;
                            ?>
                </li>
            </ul>
        </nav>
        <div class="row">
            <aside class="col-sm-3">
                <div class="card poly-cart">
                    <div class="card-header" style="cursor: pointer ;">
                        <span class="glyphicon glyphicon-th-list"> Danh mục</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="trangchu.php?action=home&act=sanpham"> <span> Đồ Uống | Sinh Tố 
                                </span></a></li>
                        <li class="list-group-item"> <a href="trangchu.php?action=home&act=khuyenmai"> <span>Đồ Uống Khuyến
                                    Mãi </span></a></li>
                        <li class="list-group-item"> <a href="trangchu.php"><span> Đồ Uống | caffe  </span></a></li>
                    
                        <li > <img class="list-group-item" src="../Content/image/header7.jfif" width="340px"  height="350" ></li>
                    </ul>
                </div>
            </aside>
            <script > 
        function Hoidap()
        {
            question = confirm ("Khi Bạn Đăng Xuất giỏ hàng =0 ,hãy đăng nhập để thanh toán giỏ hàng của mình ")
            if( question!= "0" ){
                top.location="trangchu.php?action=dangnhap&act=dangxuat"
            }
        }
    </script>