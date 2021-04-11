<?php

$Error = "";

$a = 0;
$h = 0;
$b = $c = $d = $e = $f = $g = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';

if(isset($_POST['submit'])){
		
		
    
    if(empty($_POST['Mid']))
    {
        
        $Error = " is Required";
    }
    else
    {
        $a = $_POST['Mid'];
    }
   
    if(empty($_POST['MName']))
    {
        $Error = " is Required";
    }
    else
    {
        $b = $_POST['MName'];
    }
   
    if(empty($_POST['MBName']))
    {
        $Error = " is Required";
    }
    else
    {
        $c= $_POST['MBName'];
    }
    
    if(empty($_POST['MMNUmber']))
    {
        $Error = " is Required";
    }
    else
    {
        $d = $_POST['MMNUmber'];
    }
    
    if(empty($_POST['Mchip']))
    {
        $Error = " is Required";
    }
    else
    {
        $e = $_POST['Mchip'];
    }
    
    if(empty($_POST['MOS']))
    {
        $Error = " is Required";
    }
    else
    {
        $f = $_POST['MOS'];
    }
   
    if(empty($_POST['MD']))
    {
        $Error = " is Required";
    }
    else
    {
        $g = $_POST['MD'];
    }
   
    if(empty($_POST['MP']))
    {
        $Error = " is Required";
    }
    else
    {
        $h = $_POST['MP'];
    }
    
   
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
	$Query = "INSERT INTO motherboard(mobd_id,mobd_name,mobd_brand,mobd_model_number,mobd_chipset,mobd_os,
    mobd_dimension,mobd_price)
        VALUES('$a','$b','$c','$d','$e','$f','$g','$h')";
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
	<form action = 'add_mobo.php' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
		MotherBoard Id:<br><input type = 'text' name = 'Mid' value = ''placeholder = 'Enter MotherBoard Id (e.g:Between 601 and 700)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        MotherBoard Name:<br><input type = 'text' name = 'MName' value = ''placeholder = 'Enter MotherBoard Name (e.g:MSI 82MAX B450)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Motherboard Brand Name:<br><input type = 'text' name = 'MBName' value = ''placeholder = 'Enter MotherBoard Brand Name (e.g:MSI)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Motherboard Model Number:<br><input type = 'text' name = 'MMNUmber' value = ''placeholder = 'Enter Motherboard Model Number (e.g:B450)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Motherboard Chipset:<br><input type = 'text' name = 'Mchip' value = ''placeholder = 'Enter MotherBoard chipset(e.g:AMD B450)'></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		Motherboard Operating System:<br><input type = 'text' name = 'MOS' value = ''placeholder = 'Enter Motherboard OS (e.g:windows 7,windows 8)' ></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Motherboard Dimension:<br><input type = 'text' name = 'MD' value = ''placeholder = 'Enter Motherboard Dimension(e.g:305 x 244)' ></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Motherboard Price:<br><input type = 'text' name = 'MP' value = ''placeholder = 'Enter Motherboard Price(e.g:40000)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input  type = 'submit' name = 'submit' value = 'ADD MOTHERBOARD'></input><br>
		
		
		</fieldset>
	
	
	
	</form>

</div>
<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
<script src = "js/scripts.js"></script>
</body>

</html>