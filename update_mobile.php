<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM mobile WHERE mobie_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
    $Update_Id = $DataRow['mobie_id'];
	$MN = $DataRow['mobile_name'];
	$MBN = $DataRow['brand_name'];
	$MMN = $DataRow['model_number'];
	$MOS = $DataRow['OS'];
    $MPRO = $DataRow['processor'];
    $MCORE= $DataRow['cpu_core'];
    $MSPEED = $DataRow['cpu_speed'];
    $MGPU = $DataRow['gpu'];
    $MTYPE = $DataRow['display_type'];
    $MSIZE = $DataRow['display_size'];
    $MRES = $DataRow['resolution'];
    $MMEM = $DataRow['memory'];
    $MRAM = $DataRow['ram'];
    $MF= $DataRow['front_camera'];
    $MB= $DataRow['back_camera'];
    $MBF= $DataRow['back_camera_feature'];
    $MBT= $DataRow['battery_type'];
    $MC= $DataRow['colors'];
    $MP= $DataRow['price'];
	
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
	<h1>Update Mobile</h1>
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
	<form action = 'update_mobile.php?Update_Id=<?php echo $Update_Id; ?>' method = 'post' >
		<fieldset>
		
	
		Name:<br><input type = 'text' name = 'MOBN' value = '<?php echo $MN; ?>'></input><br>
		Brand Name:<br><input type = 'text' name = 'MOBBN' value = '<?php echo $MBN; ?>' ></input><br>
		Model Number:<br><input type = 'text' name = 'MOBMN' value = '<?php echo $MMN; ?>'></input><br>
		Operating System:<br><input type = 'text' name = 'MOBOS' value = '<?php echo $MOS; ?>'  ></input><br>
		Processor:<br><input type = 'text' name = 'MOBP' value = '<?php echo $MPRO; ?>'  ></input><br>
		CPU Core:<br><input type = 'text' name = 'MOBCORE' value = '<?php echo $MCORE; ?>' ></input><br>
        CPU Speed:<br><input type = 'text' name = 'MOBSPEED' value = '<?php echo $MSPEED; ?>'></input><br>
        GPU:<br><input type = 'text' name = 'MOBGPU' value = '<?php echo $MGPU; ?>'></input><br>
        Display Type:<br><input type = 'text' name = 'MOBDT' value = '<?php echo $MTYPE; ?>'></input><br>
        Display Size:<br><input type = 'text' name = 'MOBDS' value = '<?php echo $MSIZE; ?>'></input><br>
        Resolution:<br><input type = 'text' name = 'MOBRES' value = '<?php echo $MRES; ?>'></input><br>
        Memory:<br><input type = 'text' name = 'MOBM' value = '<?php echo $MMEM; ?>'></input><br>
        RAM:<br><input type = 'text' name = 'MOBRAM' value = '<?php echo $MRAM; ?>'></input><br>
        Front Camera:<br><input type = 'text' name = 'MOBFCAM' value = '<?php echo $MF; ?>'></input><br>
        Back Camera:<br><input type = 'text' name = 'MOBBCAM' value = '<?php echo $MB; ?>'></input><br>
        Back Camera Feature:<br><input type = 'text' name = 'MOBBCAMFEA' value = '<?php echo $MBF; ?>'></input><br>
        Battery Type:<br><input type = 'text' name = 'MOBBT' value = '<?php echo  $MBT ; ?>'></input><br>
        Colors:<br><input type = 'text' name = 'MOBCOLOR' value = '<?php echo $MC; ?>'></input><br>
        Price:<br><input type = 'text' name = 'MOBPRICE' value = '<?php echo $MP; ?>'></input><br>
       
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input  type = 'submit' name = 'submit' ></input><br>
		
		
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
$p = 0;
$t = 0;
$b = $c = $d = $e = $f = $g = $h = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s  = '';
if(isset($_POST['submit'])){
		
		
    #header("location: login.php");
   
       $a = $_GET['Update_Id'];
    
	
       $b = $_POST['MOBN'];
    
   
   
        $c = $_POST['MOBMN'];
    
	
        $d = $_POST['MOBBN'];
    
   
   
        $e = $_POST['MOBOS'];
   
        $f = $_POST['MOBP'];
    
   
        $g = $_POST['MOBCORE'];
    
    
        $h = $_POST['MOBSPEED'];
    
    
        $i = $_POST['MOBGPU'];
    
    
        $j = $_POST['MOBDT'];
    
   
        $k = $_POST['MOBDS'];
    
    
        $l = $_POST['MOBRES'];
    
        $m = $_POST['MOBM'];
    
   
        $n = $_POST['MOBRAM'];
    
    
        $o = $_POST['MOBFCAM'];
    
   
        $p = $_POST['MOBBCAM'];
    
    
        $q = $_POST['MOBBCAMFEA'];
    
   
        $r = $_POST['MOBBT'];
    
   
        $s = $_POST['MOBCOLOR'];
    
    
        $t = $_POST['MOBPRICE'] ;
   
    
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    $UpdateQuery = "UPDATE mobile SET 
	mobile_name = '$b' , brand_name = '$c', model_number = '$d',
    OS = '$e', processor = '$f', cpu_core = '$g',
    cpu_speed = '$h',gpu = '$i',display_type = '$j',
    display_size = '$k',resolution = '$l',memory = '$m',ram = '$n',
    front_camera = '$o',back_camera = '$p',back_camera_feature = '$q',
    battery_type = '$r',colors = '$s', price = '$t' WHERE mobie_id = '$a'";
	
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_mobile.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }
    
    
}

?>