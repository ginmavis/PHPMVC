<h2>register</h2>

<form action="./Register/KhachHangDangKi" method="POST">
  <div class="form-group">
    <label>Username</label>
    <input type="text" name="username" id="username" class="form-control"  placeholder="Enter user">
<div id="messageUn">  
</div>
  

  </div>
    <!--  -->
  <div class="form-group">
    <label >Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password">
  </div>
  <!--  -->
  <div class="form-group">
    <label>Email</label>
    <input type="email" name="email" class="form-control"  placeholder="Enter email">
  </div>
  <!--  -->
    <div class="form-group">
    <label>Họ tên</label>
    <input type="text" name="hoten" class="form-control"  placeholder="Enter name">
  </div>
  <!--  -->
    <div class="form-group">
    <label>Địa chỉ</label>
    <input type="text" name="diachi" class="form-control"  placeholder="Enter address">
  </div>
  <button type="submit" name="btnRegister" class="btn btn-success">Register</button>
</form>

<?php if(isset($data["result"])) { ?>
<h3>
<?php
if($data["result"] == "true")
       {
            echo "Đăng kí thành công";
       }
        else{
    echo "Đăng kí thất bại";
}
?>
</h3>
<?php } ?>