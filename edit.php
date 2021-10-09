<!doctype html>

<html>
	<?php include("dbconnect.php")?>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
<title>Untitled Document</title>
</head>
		<?php
	$id=$_GET['id_login'];
$query="SELECT * FROM LOGIN where id_login='$id'";
$result=mysql_query($query) or die(mysql_error());
		$rowedit = mysql_fetch_array($result);
		?>
<body>
	<h1 align="center">Sửa tài khoản</h1>
<form action="pro_edit.php?id=<?php echo $rowedit['id_login']?>" method="post">
  <table width="375" border="0">
  <tbody>
    <tr>
      <td width="123">Tên tài khoản:</td>
      <td width="242"><input type="text" name="taikhoan" id="taikhoan" value="<?php echo $rowedit['taikhoan']?>"></td>
    </tr>
    <tr>
      <td>Mật khẩu:</td>
      <td><input type="text" name="matkhau" id="matkhau" value="<?php echo $rowedit['matkhau']?>"></td>
    </tr>
	  <tr>
	    <td>&nbsp;</td>
		  <td><input name="submit" type="submit" id="submit" value="Sửa"> &emsp;<input type="reset" name="reset" id="reset" value="Hủy"></td>
	  </tr>
  </tbody>
</table>
	

  </form>
</body>
</html>