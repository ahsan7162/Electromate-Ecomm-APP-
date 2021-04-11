<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM motherboard WHERE mobd_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$Update_Id  = $DataRow['mobd_id'];
	$MN = $DataRow['mobd_name'];
	$MBN = $DataRow['mobd_brand'];
	$MMN = $DataRow['mobd_model_number'];
	$MOS = $DataRow['mobd_chipset'];
    $MPRO = $DataRow['mobd_os'];
    $MCORE= $DataRow['mobd_dimension'];
    $MSPEED = $DataRow['mobd_price'];
   
	

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
	<h1>Update Motherboard</h1>
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
	<form action = 'update_motherboard.php?Update_Id=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
        MotherBoard Name:<br><input type = 'text' name = 'MName' value = '<?php echo $MN; ?>'></input><br>
		Motherboard Brand Name:<br><input type = 'text' name = 'MBName' value = '<?php echo $MBN; ?>'></input><br>
		Motherboard Model Number:<br><input type = 'text' name = 'MMNUmber' value = '<?php echo $MMN; ?>'></input><br>
		Motherboard Chipset:<br><input type = 'text' name = 'Mchip' value = '<?php echo $MOS; ?>'></input><br>
		Motherboard Operating System:<br><input type = 'text' name = 'MOS' value = '<?php echo $MPRO; ?>' ></input><br>
		Motherboard Dimension:<br><input type = 'text' name = 'MD' value = '<?php echo $MCORE; ?>' ></input><br>
        Motherboard Price:<br><input type = 'text' name = 'MP' value = '<?php echo $MSPEED; ?>'></input><br>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input  type = 'submit' name = 'submit' value = 'Update'></input><br>
		
		
		</fieldset>
	
	
	
	</form>

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
$b = $c = $d = $e = $f = $g = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';

if(isset($_POST['submit'])){
		
		
        $a = $_POST['Mid'];
    
        $b = $_POST['MName'];
   
        $c= $_POST['MBName'];
   
        $d = $_POST['MMNUmber'];
    
        $e = $_POST['Mchip'];
    
        $f = $_POST['MOS'];
   
        $g = $_POST['MD'];
    
   
    
        $h = $_POST['MP'];
    
    
   
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE motherboard SET 
	mobd_name = '$b' , mobd_brand = '$c', mobd_model_number = '$d',
    mobd_chipset = '$e', mobd_os = '$f', mobd_dimension = '$g',
    mobd_price = '$h' WHERE mobd_id = '$a'";

    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_mobo.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }
    
    
    }



?>