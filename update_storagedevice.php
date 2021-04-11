<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM storage_device WHERE sd_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$Update_Id = $DataRow['sd_id'];
	$MN = $DataRow['storage_name'];
	$MBN = $DataRow['sd_model_number'];
	$MMN = $DataRow['sd_brand'];
	$MOS = $DataRow['sd_type'];
    $MPRO = $DataRow['sd_category'];
    $MCORE= $DataRow['sd_size'];
    $MSPEED = $DataRow['sd_color'];
    $MGPU = $DataRow['sd_speed'];
    $MTYPE = $DataRow['sd_price'];
    
   
	
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
	<h1>Update StorageDevice</h1>
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
	<form action = 'update_storagedevice.php?Update_Id=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		
	
		Name:<br><input type = 'text' name = 'Name' value = '<?php echo $MN; ?>' ></input><br>
		Model No:<br><input type = 'text' name = 'Model no' value = '<?php echo $MBN; ?>' ></input><br>
		Brand:<br><input type = 'text' name = 'Brand' value = '<?php echo $MMN; ?>' ></input><br>
		Type:<br><input type = 'text' name = 'Type' value = '<?php echo $MOS; ?>' ></input><br>
		Category:<br><input type = 'text' name = 'Category' value = '<?php echo $MPRO; ?>'  ></input><br>
		Size:<br><input type = 'text' name = 'Size' value = '<?php echo $MCORE; ?>'  ></input><br>
        Color:<br><input type = 'text' name = 'Color' value = '<?php echo $MSPEED; ?>'  ></input><br>
        Speed:<br><input type = 'text' name = 'Speed' value = '<?php echo $MGPU; ?>'  ></input><br>
        Price:<br><input type = 'text' name = 'SP' value = '<?php echo $MTYPE; ?>' ></input><br>
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
$j = 0;
$b = $c = $d = $e = $f = $g = $i  = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    
    $a = $_GET['Update_Id'];
   
        $b = $_POST['Name'];
    
   
        $c = $_POST['Model No'];
   
        $d = $_POST['Brand'];
    
        $e = $_POST['Type'];
    
        $f = $_POST['Category'];
  
        $g = $_POST['Size'];
    
        $h = $_POST['Color'];
  
        $i = $_POST['Speed'];
   
        $j = $_POST['SP'];
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE storage_device SET 
	mobile_name = '$b' , brand_name = '$c', model_number = '$d',
    OS = '$e', processor = '$f', cpu_core = '$g',
    cpu_speed = '$h',gpu = '$i',display_type = '$j' WHERE sd_id = '$a'";
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_storagedevice.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }

}
?>