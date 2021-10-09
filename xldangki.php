<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php
$hoten=$_POST ['hoten'];
$pws=md5($_POST ['pws']);
$rpws=md5($_POST ['rpws']);
$diachi=$_POST ['diachi'];
$sdt=$_POST ['sdt'];
$con=mysql_connect("localhost","root","usbw")
or die(mysql_error());
mysql_select_db("pico",$con)
or die(mysql_error());
$query="select *from dangky where hoten='$hoten'";
$kq= mysql_query($query) or die(mysql_error());
if (mysql_num_rows($kq)>0)
{
	echo" user không hợp lệ<br>";
	$hoten2=0;
}
else

{
	echo" user hợp lệ<br>";
	$hoten2=1;
	}
	if ($pws==$rpws)
	{
		echo" pass hợp lệ <br>";
		$pws2=1;
	
		}
		else 
		{
			echo " pass không hợp lệ<br>";
			$pws2==0;
			}
			if ($hoten2==1&&$pws2==1)
			{

$query="insert into login values('','$hoten','$pws','$diachi','$sdt')";
mysql_query($query) or die(mysql_error());
echo "<script>alert('Chúc mừng bạn đã đăng kí thành công');location='?go=home'; </script>";			
}
else{echo "<script>alert('Đăng kí thất bại');location='?go=dangki'; </script>";	
}
?>