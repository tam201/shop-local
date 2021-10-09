<meta charset="utf-8">
<?php include("dbconnect.php")?>
<?php 
	$taikhoan=$_POST["taikhoan"];
    $matkhau=md5($_POST["matkhau"]);
    $result= mysql_query("INSERT INTO login(taikhoan,matkhau) VALUES ('$taikhoan','$matkhau')");
   echo"<script>alert('Bạn đã thêm tài khoản thành công');location='admin.php?admin=quanly';</script>"
?>