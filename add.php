<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php include("dbconnect.php")?>
<body>
	<h1 align="center">Thêm tài khoản</h1>
<form action="pro_add.php" method="post">
  <table width="375" border="0">
  <tbody>
    <tr>
      <td width="123">Tên tài khoản:</td>
      <td width="242"><input type="text" name="taikhoan" id="taikhoan"></td>
    </tr>
    <tr>
      <td>Mật khẩu:</td>
      <td><input type="text" name="matkhau" id="matkhau"></td>
    </tr>
	  <tr>
	    <td>&nbsp;</td>
		  <td><input name="submit" type="submit" id="submit" value="Thêm"> &emsp;<input type="reset" name="reset" id="reset" value="Hủy"></td>
	  </tr>
  </tbody>
</table>
	

  </form>
</body>
</html>