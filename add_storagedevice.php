<?php
$Error="";
$a = 0;
$j = 0;
$b = $c = $d = $e = $f = $g = $i  = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    if(empty($_POST['SID']))
    {
        $Error = "is Required";
    }
    else
    {
        $a = $_POST['SID'];
    }
    if(empty($_POST['Name']))
    {
        $Error = "is Required";
    }
    else
    {
        $b = $_POST['Name'];
    }
    if(empty($_POST['Model No']))
    {
        $Error = "is Required";
    }
    else
    {
        $c = $_POST['Model No'];
    }
    if(empty($_POST['Brand']))
    {
        $Error = "is Required";
    }
    else
    {
        $d = $_POST['Brand'];
    }
    if(empty($_POST['Type']))
    {
        $Error = "is Required";
    }
    else
    {
        $e = $_POST['Type'];
    }
    if(empty($_POST['Category']))
    {
        $Error = "is Required";
    }
    else
    {
        $f = $_POST['Category'];
    }
    if(empty($_POST['Size']))
    {
        $Error = "is Required";
    }
    else
    {
        $g = $_POST['Size'];
    }
    if(empty($_POST['Color']))
    {
        $Error = "is Required";
    }
    else
    {
        $h = $_POST['Color'];
    }
    if(empty($_POST['Speed']))
    {
        $Error = "is Required";
    }
    else
    {
        $i = $_POST['Speed'];
    }
    if(empty($_POST['SP']))
    {
        $Error = "is Required";
    }
    else
    {
        $j = $_POST['SP'];
    }
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $Query = "INSERT INTO storage_device('sd_id', 'storage_name', 'sd_model_number', 'sd_brand', 'sd_type', 'sd_category', 'sd_size', 'sd_color', 'sd_speed', 'sd_price')
    VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
    $Execute = mysqli_query($connection,$Query);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo 'done.';
	  }

}
?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "styles.css">
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<title>Sign Up</title>
	<h1>Sign Up</h1>
</head>
<style type = 'text/css'>
input[type = 'text'],input[type = 'password']{
	
	border:1px solid dashed;
	width : 400px;
	background-color:rgb(221,216,212);
	padding:0.5em;
	font-size:1.0em;
	
}
div{
	
width :700px;

	
}
.Error{
	color:red;
}
</style>
<body>
<div >
<!--<div class = 'row'>-->
<!--<div class = 'col-sm-11'>-->
	<form action = '#' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
		Storage Device ID:<br><input type = 'text' name = 'SID' value = '' placeholder="Between 301-400"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Name:<br><input type = 'text' name = 'Name' value = '' placeholder=" Enter Name (e.g:Kingston KC600)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Model No:<br><input type = 'text' name = 'Model no' value = '' placeholder="Enter Model No (e.g:KC600)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Brand:<br><input type = 'text' name = 'Brand' value = '' placeholder="Enter Brand Name(e.g:kingston)"></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		Type:<br><input type = 'text' name = 'Type' value = ''  placeholder="Enter Type(e.g:Laptop Or PC)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Category:<br><input type = 'text' name = 'Category' value = ''  placeholder="Enter Category(e.g:SSD OR HDD)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Size:<br><input type = 'text' name = 'Size' value = ''  placeholder="Enter Size(e.g:500gb)"></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        Color:<br><input type = 'text' name = 'Color' value = ''  placeholder="Enter Color(e.g:Blue,grey)"></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        Speed:<br><input type = 'text' name = 'Speed' value = ''  placeholder="Enter speed(e.g:500mb/s)"></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        Price:<br><input type = 'text' name = 'SP' value = ''placeholder = 'Enter  Price(e.g:40000)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input  type = 'submit' name = 'submit' value = 'Add product'></input><br>
		
		
		</fieldset>
	
	
	
	</form>
	<!-- ending of col class -->
<!--</div>-->
	<!-- ending of row class-->
<!--</div>	-->
	<!-- ending of container class-->
</div>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
<script src = "js/scripts.js"></script>
</body>

</html>