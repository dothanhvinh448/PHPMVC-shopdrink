<section>
    <div class="row">
        <div class="col-lg-12 text-center">
        <marquee style="border:rgb(42, 42, 204) 2px SOLID">
					<h3 class="mau">Mời Bạn Chọn Tùy Vị | Số Lượng  </h3>
				</marquee>
        </div>
    </div>
    <article class="col-12">
        <div class="container-fliud">
            <div class="wrapper row">
                <form action="trangchu.php?action=giohang&act=add_cart" method="post">
                    <div class="preview col-md-6">
                        <div class="tab-content">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $mahh=$_GET['id'];
                                $dt=new ITEMS();
                                $result=$dt->getListDetail($mahh);
                                $tenhh=$result[1];
                                $dongia=$result[2];
                                $giamgia=$result[3];
                                $hinh=$result[4];
                                $mota=$result[10];
                                $nhom=$result[5];
                            }
                           ?>
                            <div class="tab-pane active" id="<?php echo $hinh?>"><img
                                    src="<?php echo 'Content/image2/'.$hinh;?>" alt="" width="200px" height="200px">
                            </div>
                        </div>
                       
                    </div>
                    <div class="details col-md-6">
                        <input type="hidden" name="mahh" value="<?php echo $mahh;?>" />
                        <h3 class="product-title" style="color:black"> <?php echo $tenhh;?> </h3>
                        <div class="rating">
                            <div class="stars"> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star checked"></span> <span class="fa fa-star checked"></span> <span
                                    class="fa fa-star"></span> <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p class="product-description">
                          <h7 style="color:	black">  <?php echo $mota;?></h7>
                        </p>
                        <h4 class="price" style="color:black ;">Giá bán: <?php echo  $dongia; ?> vnđ</h4>
                        <h5 > <span class="badge badge-primary">Tùy Chọn Vị Của Bạn :</span>
                            <select name="myvi" class="form-control" style="width:150px;">
                                <?php
                                    $result=$dt->getListDetailNhom($nhom);
                                    while($set=$result->fetch()):
                                ?>
                                <option value="<?php echo $set['tuyvi'];?>">
                                    <?php echo $set['tuyvi'];?>
                                </option>
                                <?php
                                endwhile
                                ?>
                            </select>
                            </br></br>
                          <h4 style="color:black">  Số Lượng order :</h4>
                            <input type="number" id="soluong" name="soluong" min="1" max="100" value="1" size="10" />
                        </h5>
                        <div class="action"  >
                            <button style="color:white ; background: #d8b113"  class="add-to-cart btn btn-default" type="submit" data-toggle="modal"
                                data-target="#myModal">MUA NGAY
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>
<?php
        if(isset($_SESSION['makh'])):
?>
<section>
    <div class="col-12">
        <div class="row">
            <?php
                  if(isset($_GET['id']))
                  {
                      $u=new User();
                      $result=$u->tongcomment($_GET['id']);
                      $tong=$result[0];
                  }
                 ?>
            <p class="float-left"><b> Comment <?php echo $tong;?> </b></p>
            <hr>
        </div>
        <form action="trangchu.php?action=home&act=comment&id=<?php echo $_GET['id'] ?>" method="post">
            <div class="row">
                <input type="hidden" name="txtmahh" value="<?php echo $_GET['id'] ; ?>" />
                <img src="Content/image2/people.png" width="50px" height="50px" ; />
                <textarea class="input-field" type="text" name="comment" rows="2" cols="70" id="comment"
                    placeholder="Thêm bình luận của bạn về sản phẩm ">  </textarea>
                <input type="submit" class="btn btn-primary" id="submitButton" style="float: right;"
                    value="Bình Luận" />
            </div>
        </form>
        <div class="row">
            <p class="float-left"><b> Tất cả các bình luận :</b></p>
            <br />
            <?php
               $result=$u->displayComment($mahh);
               while($set=$result->fetch()):
               ?>
            <div class="col-12">
                <div class="row">
                    <img src="Content/image2/people.png" with="50px" height="50px" />
                    <p><?php echo '<b>' . $set['username'].'</b>'.$set['noidung']; ?></p><br>
                </div>
            </div>
            <?php
                endwhile;
               ?>
            <br />
        </div>
    </div>
</section>
<?php 
    endif;
?>