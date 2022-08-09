<?php
class HangHoa{
  public function __construct()
  {
    
  }
  // pt hiển thị tất cả các sp
  function getListHangHoa()
  {
    $db=new connect();
    $select="Select * from items";
    $result=$db->getList($select);
    return $result;
  }
  // lấy thông tin của bảng loại hàng
  function getListMaLoaiSP()
  {
    $db=new connect();
    $select="select maloai,tenloai from loai";
    $result=$db->getList($select);
    return $result;
  }
  // viết câu lệnh insert vào bảng hàng hóa
  function insertsp($tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,$mota,$soluongton,$tuyvi)
  {
    $db=new connect();
    $query="insert into items(mahh,tenhh,dongia,giamgia,hinh,Nhom,maloai,dacbiet,soluotxem,ngaylap,mota,soluongton,tuyvi) 
    values(NULL,'$tenhh',$dongia,$giamgia,'$hinh',$Nhom,$maloai,$dacbiet,$soluotxem,'$ngaylap','$mota',$soluongton,'$tuyvi')";
    $db->exec($query);
  }
  // lấy thông tin của 1 sản phẩm
  function getHangHoaID($id)
  {
    $db=new connect();
    $select=" select * from items where mahh=$id";
    $result=$db->getInstance($select);
    return $result;
  }
  // phuong thức update hang hoa
  function updatehanghoa($id,$tenhh,$dongia,$giamgia,$hinh,$Nhom,$maloai,$dacbiet,$soluotxem,$ngaylap,
  $mota,$soluongton,$tuyvi)
  {
    $db=new connect();
    $query="update items
            set tenhh='$tenhh',
            dongia=$dongia,
            giamgia=$giamgia,
            hinh='$hinh',
            Nhom=$Nhom,
            maloai=$maloai,
            dacbiet=$dacbiet,
            soluotxem=$soluotxem,
            ngaylap='$ngaylap',
            mota='$mota',
            soluongton=$soluongton,
            tuyvi='$tuyvi',
            where mahh=$id";
    $db->exec($query);
  }
  // pt xóa
  function deleteMaHang($id)
  {
    $db=new connect();
    $query="delete from items where mahh=$id";
    $db->exec($query);
  }
  function insertLoaiHang($id,$tenloai,$idmenu)
  {
    $db=new connect();
    $query="insert into loai(maloai,tenloai,idmenu) values($id,'$tenloai',$idmenu)";
    $db->exec($query);
  }
}
?>