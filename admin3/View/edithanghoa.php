<?php
  if(isset($_GET["act"]))
  {
    if($_GET["act"]=="insertsp")
    {
      $ac=1;
    }
    elseif($_GET["act"]="update")
    {
      $ac=2;
    }
    else{
      $ac=0;
    }
  }
?>
<!-- hiển thị tiêu đề -->
<?php
if($ac==1)
{
  echo '<div class="col-md-4 col-md-offset-4"><h2><b>CẬP NHẬT HÀNG HÓA</b></h2>';
}
else if($ac==2)
{
  echo '<div class="col-md-4 col-md-offset-4"><h2><b>THÊM HÀNG HÓA</b></h2>';
}
else{
  echo '<div class="col-md-4 col-md-offset-4"><h2><b>KHÔNG CÓ HÀNG HÓA</b></h2>';
}
?>

<div class="row col-md-4 col-md-offset-4" >
<?php
  if(isset($_GET['id']))
  {
    $mahh=$_GET['id'];
    $hh=new HangHoa();
    $result=$hh->getHangHoaID($mahh);
    $tenhh=$result['tenhh'];
    $dongia=$result['dongia'];
    $giamgia=$result['giamgia'];
    $hinh=$result['hinh'];
    $nhom=$result['Nhom'];
    $maloai=$result['maloai'];//3
    $dacbiet=$result['dacbiet'];
    $solx=$result['soluotxem'];
    $ngaylap=$result['ngaylap'];
    $mota=$result['mota'];
    $solt=$result['soluongton'];
    $tuyvi=$result['tuyvi'];

  }
 ?>
 <?php
 if($ac==1)
 {
   echo '<form action="index.php?action=sanpham&act=insert_action" method="post" enctype="multipart/form-data">';
 }
 else if($ac==2)
 {
   echo '<form action="index.php?action=sanpham&act=update_action&id=<?php echo $mahh;?>" method="post" enctype="multipart/form-data">';
 }
 else{
   echo 'rong';
 }
 ?>
 
 <table class="table" style="border: 0px;">

<tr>
  <td>Mã hàng</td>
  <td> <input type="text" class="form-control" name="mahh" value="<?php if(isset($mahh)) echo $mahh;?>"  readonly/></td>
</tr>
<tr>
  <td>Tên hàng</td>
  <td><input type="text" class="form-control" name="tenhh" value="<?php if(isset($tenhh)) echo $tenhh;?>"  maxlength="100px"></td>
</tr>
<tr>
  <td>Đơn giá</td>
  <td><input type="text" class="form-control" name="dongia" value="<?php if(isset($dongia)) echo $dongia;?>"></td>
</tr>
<tr>
  <td>Giảm giá</td>
  <td><input type="text" class="form-control" name="giamgia" value="<?php if(isset($giamgia)) echo $giamgia;?>" ></td>
</tr>
<tr>
  <td>Hình</td>
  <td>
  <label><img width="50px" height="50px" src="Content/imagetourdien/<?php if(isset($mahh)) echo $hinh; ?>"></label>
     
      Chọn file để upload:
      <input type="file" name="image" id="fileupload">
   
  </td>
</tr>
<tr>
  <td>Nhóm</td>

  <td>
    <input type="text" class="form-control" name="nhom" value="<?php if(isset($nhom)) echo $nhom;?>" >
  </td>
</tr>
<tr>
  <!-- hiển thị cho người dùng thấy là hiển thị tên, nhưng khi lưu là lưu mã loại -->
  <td>Mã loại</td>
  <td>
    <select name="maloai" class="form-control" style="width:150px;">
      <?php
      // cho biến
      $selectLoai=-1;
      if(isset($maloai)&& $maloai!=-1)
      {
        $selectLoai=$maloai;//3
      }
      $hh=new HangHoa();
      $results=$hh->getListMaLoaiSP();
      while($set=$results->fetch()):
      ?>
      <option value="<?php echo $set['maloai'];?>"<?php if($selectLoai==$set['maloai']) echo 'selected="selected"';?>><?php echo $set['tenloai'];?></option>
      <?php
      endwhile
      ?>
    </select>
  </td>
</tr>
<tr>
  <td>Đặc biệt</td>
  <td><input type="text" class="form-control" name="dacbiet" value="<?php if(isset($dacbiet)) echo $dacbiet;?>" >
  </td>
</tr>
<tr>
  <td>Số lượt xem</td>
  <td><input type="text" class="form-control" name="slx" value="<?php if(isset($solx)) echo $solx;?>">
  </td>
</tr>
<tr>
  <td>Ngày lập</td>
  <td><input type="text" class="form-control" name="ngaylap" value="<?php if(isset($ngaylap)) echo $ngaylap;?>">
  </td>
</tr>
<tr>
  <td>Mô tả</td>
  <td><input type="text" class="form-control" name="mota" value="<?php if(isset($mahh)) echo $mota;?>">
  </td>
</tr>
<tr>
  <td>Số lượng tồn</td>
  <td><input type="text" class="form-control" name="slt" value="<?php if(isset($solt)) echo $solt;?>" >
  </td>
</tr>
<tr>
  <td>Tùy Vị</td>
  <td><input type="text" class="form-control" name="tuyvi" value="<?php if(isset($tuyvi)) echo $tuyvi;?>" >
  </td>
</tr>
<tr>
  <td colspan="2">
    <input type="submit" value="submit" name="submit">
    

  </td>
</tr>

</table>
  </form>
</div>