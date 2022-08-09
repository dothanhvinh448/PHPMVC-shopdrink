<div class="container mt-5">
  <div class="row ">
 
   <div class="row col-md-12">
   <?php
      $hh=new HangHoa();
      $result=$hh->getListHangHoa();
      while($set=$result->fetch()):
      ?>
    <div class=" col-md-3 mb-5">
      <div class="card text-white "style="height:500px;text-align:center">
        <img class="card-img-top" src="../Content/imagetourdien/<?php echo $set['hinh'];?>" alt="">
        <div class="card-body">
        <h4 class="card-title" style="color:black">mã Hàng Hóa:<?php echo $set['mahh'];?></h4>
          <h4 class="card-title" style="color:black"><?php echo $set['tenhh'];?></h4>
          <p class="card-text" style="color: black;">Giá:<?php echo $set['dongia'];?>:đ</p>
          <button class="add-cart btn btn-danger"><i class="fas fa-shopping-cart">
          <a href="index.php?action=sanpham&act=update&id=<?php echo $set['mahh'];?>">Cập nhật</a>
          </i> 
          <button class="add-cart btn btn-danger"><i class="fas fa-shopping-cart">
          <a href="index.php?action=sanpham&act=delete&id=<?php echo $set['mahh'];?>">Xóa</a>
          </i> 
        </div>
      
    </div>
</div>
<?php
     endwhile;
     ?>
</div>

  </div>
</div>

