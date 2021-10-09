<!DOCTYPE html>
<?php include("dbconnect.php")?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE 10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE 10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create two equal columns that sits next to each other */
.column {
  -ms-flex: 50%; /* IE 10 */
  flex: 50%;
  padding: 0 4px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Style the buttons */
.btn {
  border: none;
  outline: none;
  padding: 10px 16px;
  background-color: #f1f1f1;
  cursor: pointer;
  font-size: 18px;
}

.btn:hover {
  background-color: #ddd;
}

.btn.active {
  background-color: #666;
  color: white;
}
</style>
</head>
<body>
	<div id=quangcao>
	<?php include("quangcao.php")?>
	</div>

<!-- Header -->
<div class="header" id="myHeader">
  <h1>Xe Đạp Địa Hình</h1>
  
  <button class="btn" onclick="one()">1</button>
  <button class="btn active" onclick="two()">2</button>
  <button class="btn" onclick="four()">3</button>
</div>

<!-- Photo Grid -->
<div class="row"> 
	<?php
		$query="select*from xedap";
		$kq=mysql_query($query)or die(error());
		while ($xd=mysql_fetch_array($kq))
		{
		?>
  <div class="column">
    <img src="<?php echo $xd['anh_xd']?>" style="width:250px;height: 200px;"><br>
	  <span style="color: crimson;"><?php echo $xd['ten_xd']?></span><br>Giá:
	  <span style="color: red;"><?php echo $xd['gia_xd']?>  vnd</span>
	
	  
  </div>
  <?php
		}
?>
</div>

<script>
// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a loop variable
var i;

// Full-width images
function one() {
    for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "100%";  // IE10
    elements[i].style.flex = "100%";
  }
}

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "50%";  // IE10
    elements[i].style.flex = "50%";
  }
}

// Four images side by side
function four() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.msFlex = "25%";  // IE10
    elements[i].style.flex = "25%";
  }
}

// Add active class to the current button (highlight it)
var header = document.getElementById("myHeader");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

</body>
</html>
