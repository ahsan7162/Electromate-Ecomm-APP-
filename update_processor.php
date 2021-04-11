<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM processor WHERE pre_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$Update_Id = $DataRow['pre_id'];
	$MN = $DataRow['pre_name'];
	$MBN = $DataRow['pre_brand'];
	$MMN = $DataRow['pre_model_number'];
	$MOS = $DataRow['pre_technology'];
    $MPRO = $DataRow['pre_n_o_t'];
    $MCORE= $DataRow['pre_n_o_c'];
    $MSPEED = $DataRow['pre_b_freq'];
    $MGPU = $DataRow['pre_turbo_freq'];
    $MTYPE = $DataRow['pre_cache_size'];
    $MSIZE = $DataRow['pre_price'];
    
	

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
	<h1>Update Processor</h1>
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
	<form action = 'update_processor.php?Update_Id=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
		Name:<br><input type = 'text' name = 'Name' value = '<?php echo $MN; ?>' ></input><br>
		Brand:<br><input type = 'text' name = 'Brand' value = '<?php echo $MBN; ?>' ></input><br>
		Model No:<br><input type = 'text' name = 'Model No' value = '<?php echo $MMN; ?>'  ></input><br>
		Processor Technology:<br><input type = 'Text' name = 'Technology' value = '<?php echo $MOS; ?>' ></input><br>
        Number of threads:<br><input type = 'text' name = 'N_o_t' value = '<?php echo $MPRO; ?>'  ></input><br>
        Number of Cores:<br><input type = 'text' name = 'N_o_c' value = '<?php echo $MCORE; ?>'  ></input><br>
	    Base Frequency:<br><input type = 'text' name = 'BaseF' value = '<?php echo $MSPEED; ?>'  ></input><br>
        Turbo Frequency :<br><input type = 'text' name = 'TurboF' value = '<?php echo $MGPU; ?>' ></input><br>
        Cache Size:<br><input type = 'text' name = 'CacheS' value = '<?php echo $MTYPE; ?>'  ></input><br>
        Price:<br><input type = 'text' name = 'PreP' value = '<?php echo $MSIZE; ?>' ></input><br>
        <!--:<br><input type = 'file' name = 'product_img'/><br>-->
        <input  type = 'submit' name = 'submit' value = 'Update'></input><br>
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
$k = 0;
$j = 0;
$b = $c = $d = $e = $f = $g = $i = $h = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    
        $a = $_GET['Update_Id'];
  
        $b = $_POST['Name'];
   
        $c = $_POST['Brand'];
   
        $d = $_POST['Model No'];
   
        $e = $_POST['Technology'];
   
        $f = $_POST['N_o_t'];
   
        $g = $_POST['N_o_c'];
   
        $h = $_POST['BaseF'];
    
        $i = $_POST['TurboF'];
   
        $j = $_POST['CacheS'];
    
        $k = $_POST['PreP'];
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE processor SET 
	pre_name = '$b' , pre_brand = '$c', pre_model_number = '$d',
    pre_technology = '$e', pre_n_o_t = '$f', pre_n_o_c = '$g',
    pre_b_freq = '$h',pre_turbo_freq = '$i',pre_cache_size = '$j',
    pre_price = '$k' WHERE pre_id = '$a'";
    $Execute = mysqli_query($connection,$UpdateQuery);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_processor.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }

}

?>