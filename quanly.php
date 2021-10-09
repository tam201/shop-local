<!doctype html>
<?php include("dbconnect.php")?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<h1 align="center">Quản Lý Admin </h1>
<table width="700" border="1">
  <tbody>
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên Admin</th>
      <th scope="col">Mật Khẩu</th>
      <th scope="col">Thêm</th>
      <th scope="col">Sửa</th>
      <th scope="col">Xóa</th>
    </tr>
    <tr>
		<?php
		$query="select * from login";
		$kq=mysql_query($query) or die(error());
		while($lg=mysql_fetch_array($kq))
		{
			?>
      <td><?php echo $lg['id']?></td>
      <td><?php echo $lg['hoten']?></td>
      <td><?php echo $lg['matkhau']?></td>
      <td><a href="#"><img src="images/logo/add.png" width="30" height="30" alt=""/></a></td>
      <td><a href="#"><img src="images/logo/icon-bao-hanh.png" width="30" height="30" alt=""/></td>
      <td><a href="#"><img src="images/logo/delete.png" width="30" height="30" alt=""/></td>
    </tr>
	  <?php
		}
		?>
  </tbody>
</table>
</body>
</html>