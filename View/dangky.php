<script>
      function validateform() {
var txttenkh = document.form1.txttenkh.value;
var txtpass = document.form1.txtpass.value;
if (txttenkh == null || txttenkh == "") {
alert("Tên đăng nhập không được để trống!");
return false;
} else if (txtpass.length < 6) {
alert("Mật khẩu ít nhất 6 ký tự");
return false;
} 
}
  </script>

  <div class="login-box" style="background-color: #fff">
      <h2 style="color:black">Đăng Ký Tài Khoản Mới </h2>
<form name="form1" onsubmit="return validateform()" action="trangchu.php?action=dangky&act=dangky_action" method="post" id="Form-register"  class="login-form">
    
   <div class="user-box">
      <input type="text" class="form-control" placeholder="Họ Và Tên "  name="txttenkh" style="color:black">
      <label  for="exampleInputName" class="text-uppercase" style="color:black" >Họ Và Tên </label>
    </div>
    <div class="user-box">
      <input type="name" class="form-control" placeholder="Tên Khi Đăng Nhập " name="txtusername" style="color:black">
      <label  for="exampleInputName" class="text-uppercase" style="color:black">Tên Đăng Nhập </label>
    </div>
    <div class="user-box">
      <input type="text" class="form-control" placeholder="Địa Chỉ Nhà Ở " name="txtdiachi"style="color:black">
      <label  for="exampleInputName" class="text-uppercase" style="color:black">Địa Chỉ</label>
    </div>
    <div class="user-box">
      <input type="number" class="form-control" placeholder="Số Điện Thoại Liên Lạc " name="txtsodt"style="color:black">
      <label  for="exampleInputName" class="text-uppercase" style="color:black">Số Điện Thoại</label>
    </div>
    <div class="user-box">
      <input type="email" class="form-control" placeholder="email của bạn " name="txtemail"style="color:black">
      <label  for="exampleInputName" class="text-uppercase" style="color:black">Email</label>
    </div>
    <div class="user-box">
      <input type="password" class="form-control"  placeholder="Mật Khẩu Đăng Nhập " name="txtpass"style="color:black">
      <label  for="exampleInputName" class="text-uppercase" style="color:black">Mật Khẩu  </label>
    </div>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <button class="btn btn-drank float-right" type="submit"style="color:black"> Đăng Ký</button> </a>
</form>  
</div>

<link rel="stylesheet" href="./Content/CSS/log_up.css">

<!-- <div id="logos">
        <img class="image" src="http://pluspng.com/img-png/google-logo-png-open-2000.png" alt="google" />
        <img class="image" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-512.png" alt="facebook" />
        <img class="image" src="https://image.flaticon.com/icons/svg/25/25231.svg" alt="github" />
        <img class="image" src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/linkedin_circle-512.png" alt="linkedin" />
    </div>  -->


