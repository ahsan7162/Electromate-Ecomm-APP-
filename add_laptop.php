<?php
$Error = "";
$a = 0;
$l = 0;
$b = $c = $d = $e = $f = $g = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';


if(isset($_POST['submit'])){
		
		
    
    if(empty($_POST['LID']))
    {
        
        $Error = " is Required";
    }
    else
    {
        $a = $_POST['LID'];
    }
    if(empty($_POST['LBN']))
    {
        $Error = " is Required";
    }
    else
    {
        $c = $_POST['LBN'];
    }
    if(empty($_POST['LMN']))
    {
        $Error = " is Required";
    }
    else
    {
        $d = $_POST['LMN'];
    }
    if(empty($_POST['LPROCESSOR']))
    {
        $Error = " is Required";
    }
    else
    {
        $e = $_POST['LPROCESSOR'];
    }
    if(empty($_POST['LRAM']))
    {
        $Error = " is Required";
    }
    else
    {
        $f = $_POST['LRAM'];
    }
    if(empty($_POST['LSSD']))
    {
        $Error = " is Required";
    }
    else
    {
        $g = $_POST['LSSD'];
    }
    if(empty($_POST['LHDD']))
    {
        $Error = " is Required";
    }
    else
    {
        $h = $_POST['LHDD'];
    }
    if(empty($_POST['LGPU']))
    {
        $Error = " is Required";
    }
    else
    {
        $i = $_POST['LGPU'];
    }
    if(empty($_POST['LBB']))
    {
        $Error = " is Required";
    }
    else
    {
        $j = $_POST['LBB'];
    }
    if(empty($_POST['LSS']))
    {
        $Error = " is Required";
    }
    else
    {
        $k = $_POST['LSS'];
    }
    if(empty($_POST['LP']))
    {
        $Error = " is Required";
    }
    else
    {
        $l = $_POST['LP'];
    }
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $Query = "INSERT INTO laptop('laptop_id', 'laptop_name', 'brand_name', 'model_number', 'processor', 'ram', 'sdd', 'hdd', 'gpu', 'battery_backup', 'screen_size', 'laptop_price')
    VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l')";
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
	<form action = 'Signup.php' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
		Laptop Id:<br><input type = 'text' name = 'LID' value = ''placeholder = 'Enter Laptop Id (e.g:Between 101 and 200)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Laptop Name:<br><input type = 'text' name = 'LN' value = ''placeholder = 'Enter Laptop Name'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Laptop Brand Name:<br><input type = 'text' name = 'LBN' value = ''placeholder = 'Enter Brand Name (e.g:Lenovo,HP)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Laptop Model Number:<br><input type = 'text' name = 'LMN' value = ''placeholder = 'Enter Model Number (e.g:VPCS13CGX)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Laptop Processor:<br><input type = 'text' name = 'LPROCESSOR' value = ''placeholder = 'Enter Processor (e.g:Intel Core)'></input>*<span class = 'Error'><?php echo  $Error;?></span><br>
		Laptop Ram:<br><input type = 'password' name = 'LRAM' value = ''placeholder = 'Enter Laptop Ram (e.g:4GB)' ></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Laptop ssd:<br><input type = 'text' name = 'LSSD' value = ''placeholder = 'Enter Laptop SSD(e.g:128GB)' ></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Laptop hdd:<br><input type = 'text' name = 'LHDD' value = ''placeholder = 'Enter Laptop HDD(e.g:500GB)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        Laptop Gpu:<br><input type = 'text' name = 'LGPU' value = ''placeholder = 'Enter Laptop GPU(e.g:GTX 760)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        Laptop Battery Backup:<br><input type = 'text' name = 'LBB' value = ''placeholder = 'Enter Laptop Battery Backup(e.g:2 hours,3 hours)' ></input>*<span class = 'Error'><?php  echo $Error;?></span><br>
        Laptop Screen Size:<br><input type = 'text' name = 'LSS' value = ''placeholder = 'Enter Laptop Screen Size(e.g:13.5,15)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        Laptop Price:<br><input type = 'text' name = 'LP' value = ''placeholder = 'Enter Laptop Price(e.g:40000)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input  type = 'submit' name = 'submit' value = 'ADD LAPTOP'></input><br>
		
		
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