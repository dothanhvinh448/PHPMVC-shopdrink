<?php
$action="dangnhap";
if(isset($_GET['act']))
{
    $action=$_GET['act'];
}
switch($action)
{
    case "dangnhap":
        include 'View/dangnhap.php';
        break;
    case "dangnhap_action":
        $username=$_POST['txtusername'];
        $password=$_POST['txtpassword'];
        $cypt=md5($password);
        $db=new User();
        $log=$db->login($username,$cypt);
        if($log !='false')
        {
            $_SESSION['makh']=$log[0];
            $_SESSION['tenkh']=$log[1];
            $_SESSION['username']=$log[2];
            $_SESSION['matkhau']=$log[3];
            $_SESSION['email']=$log[4];
            $_SESSION['diachi']=$log[5];
            $_SESSION['sodt']=$log[6];
            echo '<meta http-equiv="refresh" content="0;url=./trangchu.php?action=home&act=home"/>';  
        }
        

        break;
    case "dangxuat":
        if(isset($_SESSION['makh'])&& isset($_SESSION['tenkh']))
        {
            unset($_SESSION['makh']);
            unset($_SESSION['tenkh']);
            unset($_SESSION['cart']);
        }
        echo '<meta http-equiv="refresh" content="0;url=./trangchu.php?action=home&act=home"/>';  
        break;
}
?>