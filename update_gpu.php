<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM gpu WHERE gpu_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$Update_Id = $DataRow['gpu_id'];
	$GN = $DataRow['gpu_name'];
	$GBN = $DataRow['gpu_brand'];
	$GMN = $DataRow['gpu_model_number'];
	$GT = $DataRow['gpu_type'];
    $GMEM = $DataRow['gpu_memory_size'];
    $GBC= $DataRow['gpu_boost_clock'];
    $GF = $DataRow['gpu_fans'];
    $GPO = $DataRow['gpu_ports'];
    $GPR = $DataRow['gpu_price'];
   
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
	<h1>Update GPU</h1>
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
	<form action = 'update_gpu.php?Update_Id=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
		
		GPU Name:<br><input type = 'text' name = 'GPUN' value = '<?php echo $GN; ?>'></input><br>
		GPU Brand:<br><input type = 'text' name = 'GPUB' value = '<?php echo $GBN; ?>'></input><br>
		GPU Model Number:<br><input type = 'text' name = 'GPUMN' value = '<?php echo $GMN; ?>'></input><br>
		GPU Type:<br><input type = 'text' name = 'GPUT' value = '<?php echo $GT; ?>' ></input><br>
		GPU Memory:<br><input type = 'text' name = 'GPUM' value = '<?php echo $GMEM; ?>' ></input><br>
		GPU Boost Clock:<br><input type = 'text' name = 'GPUBC' value = '<?php echo $GBC; ?>' ></input><br>
        GPU Fans:<br><input type = 'text' name = 'GPUF' value = '<?php echo $GF; ?>'  ></input><br>
        GPU Ports:<br><input type = 'text' name = 'GPUPO' value = '<?php echo $GPO; ?>'  ></input><br>
        GPU Price:<br><input type = 'text' name = 'GPUPR' value = '<?php echo $GPR; ?>' ></input><br>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input  type = 'submit' name = 'submit' value = 'Update'></input><br>
		
		
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

<?php

$Error = "";

$a = 0;
$h = 0;
$j = 0;
$b = $c = $d = $e = $f = $g = $i  = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';

if(isset($_POST['submit'])){
		
		
    
   
        $a = $_GET['Update_Id'];
    
   
   
        $b = $_POST['GPUN'];
   
        $c= $_POST['GPUB'];
    
    
   
        $d = $_POST['GPUMN'];
    
    
    
        $e = $_POST['GPUT'];
    
    
    
        $f = $_POST['GPUM'];
    
   
   
        $g = $_POST['GPUBC'];
    
   
   
        $h = $_POST['GPUF'];
    
    
    
        $i = $_POST['GPUPO'];
    
    
   
        $j = $_POST['GPUPR'];
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE gpu SET 
	gpu_name = '$b' , gpu_brand = '$c', gpu_model_number = '$d',
    gpu_type = '$e', gpu_memory_size = '$f', gpu_boost_clock = '$g',
    gpu_fans = '$h', gpu_ports = '$i', gpu_price = '$j'
    WHERE gpu_id = '$a'";
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_gpu.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }
    
    
    }



?>