<?php
$Error="";
$a = 0;
$i = 0;
$b = $c = $d = $e = $f = $g  = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    if(empty($_POST['PID']))
    {
        $Error = "is Required";
    }
    else
    {
        $a = $_POST['PID'];
    }
    if(empty($_POST['Name']))
    {
        $Error = "is Required";
    }
    else
    {
        $b = $_POST['Name'];
    }
    if(empty($_POST['Brand']))
    {
        $Error = "is Required";
    }
    else
    {
        $c = $_POST['Brand'];
    }
    if(empty($_POST['Model No']))
    {
        $Error = "is Required";
    }
    else
    {
        $d = $_POST['Model No'];
    }
    if(empty($_POST['watts']))
    {
        $Error = "is Required";
    }
    else
    {
        $e = $_POST['watts'];
    }
    if(empty($_POST['RGBF']))
    {
        $Error = "is Required";
    }
    else
    {
        $f = $_POST['RGBF'];
    }
    if(empty($_POST['FormF']))
    {
        $Error = "is Required";
    }
    else
    {
        $g = $_POST['FormF'];
    }
    if(empty($_POST['FanS']))
    {
        $Error = "is Required";
    }
    else
    {
        $h = $_POST['FanS'];
    }
    if(empty($_POST['PsuP']))
    {
        $Error = "is Required";
    }
    else
    {
        $i = $_POST['PsuP'];
    }
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $Query = "INSERT INTO psu('psu_id', 'psu_name', 'model_number', 'brand_name', 'watts', 'rgb_fan', 'form_factor', 'fan_size','psu_price')
    VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i')";
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
		
		PSU ID:<br><input type = 'text' name = 'PID' value = '' placeholder="Between 701-800"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Name:<br><input type = 'text' name = 'Name' value = '' placeholder=" Enter Processor Name(e.g: Thermaltake Toughpower GX1 700W)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Brand:<br><input type = 'text' name = 'Brand' value = '' placeholder="Enter Brand Name(e.g: Thermaltake)"></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		Model No:<br><input type = 'text' name = 'Model No' value = ''  placeholder="Enter Model No(e.g: GX1)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		watts:<br><input type = 'text' name = 'watts' value = ''  placeholder="Enter watts(e.g: 700W)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        RGB Fans:<br><input type = 'text' name = 'RGBF' value = ''  placeholder="Enter RGB Fans(e.g: Yes)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Form Factor:<br><input type = 'text' name = 'FormF' value = ''  placeholder="Enter Form Factor(e.g: ATX)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
	    Fan Size:<br><input type = 'text' name = 'FanS' value = ''  placeholder="Enter Fan Size(e.g: 120mm)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Price:<br><input type = 'text' name = 'PsuP' value = ''placeholder = 'Enter  Price(e.g:40000)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
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