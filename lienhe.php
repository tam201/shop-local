<!DOCTYPE html>
<html>
	<?php include("dbconnect.php")?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=reset] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
	}

input[type=submit]:hover {
  background-color: #45a049;
}
input[type=reset]:hover {
  background-color: #45a049;
}


.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h3 align="center">Gửi Ý Kiến Phản Hồi</h3>

<div class="container">
  <form action="xlylienhe.php" method="post">
    <label for="hoten">Họ và tên</label>
    <input type="text" id="tenkh" name="tenkh" placeholder="họ và tên">

    <label for="diachi">Địa chỉ</label>
    <input type="text" id="diachi" name="diachi" placeholder="địa chỉ">

    <label for="dienthoai">Điện thoại</label>
	<input type="text" id="dienthoai" name="dienthoai" placeholder="điện thoại">
	  
    <label for="email">Email</label>
	<input type="text" id="email" name="email" placeholder="Email">

    <label for="ykien">Ý kiến</label>
    <textarea id="ykien" name="ykien" placeholder="ý kiến của bạn.." style="height:200px"></textarea>

    <input type="submit" value="gửi ý kiến">
	<input type="reset" value="hủy bỏ">
	
  </form>
</div>

</body>
</html>
