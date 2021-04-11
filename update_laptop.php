<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM laptop WHERE laptop_id = '$update_record'" ;
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
    $Update_Id = $DataRow['laptop_id'];
	$LN = $DataRow['laptop_name'];
	$LBN = $DataRow['brand_name'];
	$LMN = $DataRow['model_number'];
    $LPRO = $DataRow['processor'];
    $LRAM = $DataRow['ram'];
    $LSSD = $DataRow['sdd'];
    $LHDD = $DataRow['hdd'];
    $LGPU = $DataRow['gpu'];
    $LBB = $DataRow['battery_backup'];
    $LSS = $DataRow['screen_size'];
    $LP = $DataRow['laptop_price'];
   
	

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
	<h1>Update Laptop</h1>
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
	<form action = 'update_laptop.php?Update_Id=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
        Laptop Name:<br><input type = 'text' name = 'LN' value = '<?php echo $LN; ?>'></input><br>
		Laptop Brand Name:<br><input type = 'text' name = 'LBN' value = '<?php echo $LBN; ?>'></input><br>
		Laptop Model Number:<br><input type = 'text' name = 'LMN' value = '<?php echo $LMN; ?>'></input><br>
		Laptop Processor:<br><input type = 'text' name = 'LPROCESSOR' value = '<?php echo $LPRO; ?>'></input><br>
		Laptop Ram:<br><input type = 'text' name = 'LRAM' value = '<?php echo $LRAM; ?>' ></input><br>
		Laptop ssd:<br><input type = 'text' name = 'LSSD' value = '<?php echo $LSSD; ?>' ></input><br>
		Laptop hdd:<br><input type = 'text' name = 'LHDD' value = '<?php echo $LHDD; ?>'></input><br>
        Laptop Gpu:<br><input type = 'text' name = 'LGPU' value = '<?php echo $LGPU; ?>'></input><br>
        Laptop Battery Backup:<br><input type = 'text' name = 'LBB' value = '<?php echo $LBB; ?>'></input><br>
        Laptop Screen Size:<br><input type = 'text' name = 'LSS' value = '<?php echo $LSS; ?>'></input><br>
        Laptop Price:<br><input type = 'text' name = 'LP' value = '<?php echo  $LP; ?>' ></input><br>
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
$l = 0;
$b = $c = $d = $e = $f = $g = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';


if(isset($_POST['submit'])){
		
		
    
  
        $a = $_GET['Update_Id'];
   
        $c = $_POST['LBN'];
   
        $d = $_POST['LMN'];
    
   
        $e = $_POST['LPROCESSOR'];
    
        $f = $_POST['LRAM'];
   
        $g = $_POST['LSSD'];
    
        $h = $_POST['LHDD'];
    
    
        $i = $_POST['LGPU'];
   
        $j = $_POST['LBB'];
    
    
        $k = $_POST['LSS'];
    
   
        $l = $_POST['LP'];
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE laptop SET 
	laptop_name = '$b' , brand_name = '$c', model_number = '$d',
    processor = '$e', ram = '$f', sdd = '$g',
    hdd = '$h',gpu = '$i', battery_backup= '$j',
    screen_size = '$k', laptop_price = '$l'WHERE laptop_id = '$a'";
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_laptop.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }
    

}

?>