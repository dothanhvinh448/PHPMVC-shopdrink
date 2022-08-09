<?php
$action="sanpham";
if(isset($_GET['act']))
{
  $action=$_GET['act'];
}
switch($action)
{
  case "sanpham":
    include "View/hanghoa.php";
    break;
  case "insertsp":
    include "View/edithanghoa.php";
    break;
  case "insert_action":
    if(isset($_POST['submit']))
    {
      $mahh=$_POST['mahh'];
      $tenhh=$_POST['tenhh'];
      $dongia=$_POST['dongia'];
      $giamgia=$_POST['giamgia'];
      $hinh=$_FILES['image']['name'];
      $Nhom=$_POST['nhom'];
      $maloai=$_POST['maloai'];
      $dacbiet=$_POST['dacbiet'];
      $soluotxem=$_POST['slx'];
      $ngaylap=$_POST['ngaylap'];
      $mota=$_POST['mota'];
      $soluongton=$_POST['slt'];
      $tuyvi=$_POST['tuyvi'];
      // đem toàn bộ thông tin này chèn vào database
      $hh=new HangHoa();
      $hh->insertsp($tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$tuyvi);
      // sau khi chèn xong, đưa hình từ server về thư mục cần đỗ vào
      if(isset($hh))// chèn đc thì trả về là true
      {
        uploadImage();
        echo '<script> alert("Lưu sản phẩm thành công")</script>';
      }
    }
    include "View/hanghoa.php";
    break;
    case "update":
      include "View/edithanghoa.php";
    break;
    case "update_action":
      // truyền qua đây thông tin của tất cả các sp
      if(isset($_POST['submit']))
      {
        $mahh=$_POST['mahh'];
        $tenhh=$_POST['tenhh'];
        $dongia=$_POST['dongia'];
        $giamgia=$_POST['giamgia'];
        $hinh=$_FILES['image']['name'];
        $Nhom=$_POST['nhom'];
        $maloai=$_POST['maloai'];
        $dacbiet=$_POST['dacbiet'];
        $soluotxem=$_POST['slx'];
        $ngaylap=$_POST['ngaylap'];
        $mota=$_POST['mota'];
        $soluongton=$_POST['slt'];
        $tuyvi=$_POST['tuyvi'];
    
        // đem toàn bộ thông tin này chèn vào database
        $hh=new HangHoa();
        $hh->updatehanghoa($mahh,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$tuyvi);
        // sau khi update xong, đưa hình từ server về thư mục cần đỗ vào
        if(isset($hh))// chèn đc thì trả về là true
        {
          uploadImage();
          echo '<script> alert("Update sản phẩm thành công")</script>';
        }
      }
      include "View/hanghoa.php";
      break;
    case"delete":
      if(isset($_GET['id']))
      {
        $mahh=$_GET['id'];
        $hh= new HangHoa();
        $hh->deleteMaHang($mahh);
        echo'<script> alert("xóa sản phẩm thành công")</script>';
      }
      include "View/hanghoa.php";
      break;
     
}
 ?>