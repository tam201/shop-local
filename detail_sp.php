<?php 
/////////////////Noi dung chi tiet////////////////
$id=$_GET['id'];
$result = mysql_query("SELECT * FROM sanpham where id_sp=$id");
while($rows = mysql_fetch_array($result))
  {
?>



<table width="700" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="200" height="250"><div id="anh_t"><img src="<?php echo $rows['hinhanh'] ?>"  width="200" height="250"/> </div> </td>
    <td>
	<div id="title_gt"><?php echo $rows['tensp'] ?> </div> 

<div id="content_gt">Giá :<span class="style5"> <?php echo number_format($rows['gia'],3) ?></span> VNĐ/1 <br/>Tác giả:<?php echo $rows['tacgia'] ?> <br  />
<div id="content_gt"><span class="style1">Mô Tả Ngắn :</span> <br />
<?php echo $rows['chitiet'] ?> </div>
<a id="text" href="addcart.php?id=<?php echo $rows['id_sp']?>" > &raquo; mua hang </a></div> 
	
	
	</td>
  </tr>
  <tr><td colspan="2"><hr /></td></tr>
  <tr>
    <td colspan="2">
	
<div align="left"><h4>&nbsp;&nbsp;&nbsp;Các sách khác :</h4></div>

<?php 
/////////////////Nhng tin lien quan ///////////////
$query="SELECT * FROM sanpham";
$result=mysql_query($query) or die(mysql_error());
while($rowmh = mysql_fetch_array($result))
  {
?>
<div id="tinsp">
<a   href="?go=detail_sp&id=<?php echo $rowmh['id_sp']?>" >&bull;<?php echo $rowmh['tensp'] ?></font> </a><br />

</div>
	
	</td>
   
  </tr>
</table>




<?php
}
?>

<?php
}
?>
