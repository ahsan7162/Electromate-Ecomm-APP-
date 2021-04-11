<?php

$Error = "";

$a = 0;
$h = 0;
$j = 0;
$b = $c = $d = $e = $f = $g = $i  = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';

if(isset($_POST['submit'])){
		
		
    
    if(empty($_POST['GPUID']))
    {
        
        $Error = " is Required";
    }
    else
    {
        $a = $_POST['GPUID'];
    }
   
    if(empty($_POST['GPUN']))
    {
        $Error = " is Required";
    }
    else
    {
        $b = $_POST['GPUN'];
    }
   
    if(empty($_POST['GPUB']))
    {
        $Error = " is Required";
    }
    else
    {
        $c= $_POST['GPUB'];
    }
    
    if(empty($_POST['GPUMN']))
    {
        $Error = " is Required";
    }
    else
    {
        $d = $_POST['GPUMN'];
    }
    
    if(empty($_POST['GPUT']))
    {
        $Error = " is Required";
    }
    else
    {
        $e = $_POST['GPUT'];
    }
    
    if(empty($_POST['GPUM']))
    {
        $Error = " is Required";
    }
    else
    {
        $f = $_POST['GPUM'];
    }
   
    if(empty($_POST['GPUBC']))
    {
        $Error = " is Required";
    }
    else
    {
        $g = $_POST['GPUBC'];
    }
   
    if(empty($_POST['GPUF']))
    {
        $Error = " is Required";
    }
    else
    {
        $h = $_POST['GPUF'];
    }
    
    if(empty($_POST['GPUPO']))
    {
        $Error = " is Required";
    }
    else
    {
        $i = $_POST['GPUPO'];
    }
    
    if(empty($_POST['GPUPR']))
    {
        $Error = " is Required";
    }
    else
    {
        $j = $_POST['GPUPR'];
    }
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
	$Query = "INSERT INTO gpu(gpu_id,gpu_name,gpu_brand,gpu_model_number,gpu_type,gpu_memory_size,gpu_boost_clock,
    gpu_fans,gpu_ports,gpu_price)
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
	<form action = 'add_gpu.php' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
		GPU Id:<br><input type = 'text' name = 'GPUID' value = ''placeholder = 'Enter GPU Id (e.g:Between 201 and 300)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		GPU Name:<br><input type = 'text' name = 'GPUN' value = ''placeholder = 'Enter GPU Name (e.g:NVIDIA GeFORCE GTX 980 Ti)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		GPU Brand:<br><input type = 'text' name = 'GPUB' value = ''placeholder = 'Enter GPU Brand (e.g:AMD,Intel)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		GPU Model Number:<br><input type = 'text' name = 'GPUMN' value = ''placeholder = 'Enter GPU Model Number (e.g:R9 200)'></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		GPU Type:<br><input type = 'text' name = 'GPUT' value = ''placeholder = 'Enter GPU Type (e.g:GDDR5)' ></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		GPU Memory:<br><input type = 'text' name = 'GPUM' value = ''placeholder = 'Enter GPU Memory (e.g:4GB)' ></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		GPU Boost Clock:<br><input type = 'text' name = 'GPUBC' value = ''placeholder = 'Enter GPU Boost Clock (e.g: 1.73 GHZ)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        GPU Fans:<br><input type = 'text' name = 'GPUF' value = '' placeholder = 'Enter GPU Fans (e.g: 1,2,3)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        GPU Ports:<br><input type = 'text' name = 'GPUPO' value = '' placeholder = 'Enter GPU Ports (e.g: DisplayPort x3 (v1.4a)/ HDMI 2.1 x 1)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        GPU Price:<br><input type = 'text' name = 'GPUPR' value = '' placeholder = 'Enter GPU Price (e.g: 10000)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input  type = 'submit' name = 'submit' value = 'ADD GPU'></input><br>
		
		
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