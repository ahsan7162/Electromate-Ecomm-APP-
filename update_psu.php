<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM psu WHERE psu_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$Update_Id = $DataRow['psu_id'];
	$MN = $DataRow['psu_name'];
	$MBN = $DataRow['model_number'];
	$MMN = $DataRow['brand_name'];
	$MOS = $DataRow['watts'];
    $MPRO = $DataRow['rgb_fan'];
    $MCORE= $DataRow['form_factor'];
    $MSPEED = $DataRow['fan_size'];
    $MGPU = $DataRow['psu_price'];
   
	

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
	<h1>Update PSU</h1>
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
	<form action = 'update_psu.php?Update_Id=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		

		Name:<br><input type = 'text' name = 'Name' value = '<?php echo $MN; ?>' ></input><br>
		Brand:<br><input type = 'text' name = 'Brand' value = '<?php echo $MBN; ?>' ></input><br>
		Model No:<br><input type = 'text' name = 'Model No' value = '<?php echo $MMN; ?>'  ></input><br>
		watts:<br><input type = 'text' name = 'watts' value = '<?php echo $MOS; ?>'  ></input><br>
        RGB Fans:<br><input type = 'text' name = 'RGBF' value = '<?php echo $MPRO; ?>'  ></input><br>
        Form Factor:<br><input type = 'text' name = 'FormF' value = '<?php echo $MCORE; ?>'  ></input><br>
	    Fan Size:<br><input type = 'text' name = 'FanS' value = '<?php echo $MSPEED; ?>'  ></input><br>
        Price:<br><input type = 'text' name = 'PsuP' value = '<?php echo $MGPU; ?>' ></input><br>
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
$Error="";
$a = 0;
$i = 0;
$b = $c = $d = $e = $f = $g  = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    
        $a = $_GET['Update_Id'];
    
        $b = $_POST['Name'];
    
        $c = $_POST['Brand'];
   
        $d = $_POST['Model No'];
   
        $e = $_POST['watts'];
  
        $f = $_POST['RGBF'];
    
        $g = $_POST['FormF'];
    
        $h = $_POST['FanS'];
   
        $i = $_POST['PsuP'];
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE psu SET 
	psu_name = '$b' , model_number = '$c', brand_name = '$d',
    watts = '$e', rgb_fan = '$f', form_factor = '$g',
    fan_size = '$h',psu_price = '$i' WHERE psu_id = '$a'";
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_psu.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }

}



?>