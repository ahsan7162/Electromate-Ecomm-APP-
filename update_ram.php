<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$update_record =  $_GET['Update'];
$ViewQuery = "SELECT * FROM ram WHERE ram_id = '$update_record'";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$Update_Id = $DataRow['ram_id'];
	$MN = $DataRow['ram_name'];
	$MBN = $DataRow['ram_company'];
	$MMN = $DataRow['ram_type'];
	$MOS = $DataRow['ram_speed'];
    $MPRO = $DataRow['ram_price'];
   
	
}
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "styles.css">
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	<title>Add Ram</title>
	
</head>
<style type = 'text/css'>
.centre{
  margin: auto;
  padding: 0px 50px; 
}
.Error{
	color:red;
}
</style>
<body>

<div class="container">
<h1>Update Ram</h1>
<!--<div class = 'row'>-->
<!--<div class = 'col-sm-11'>-->
    <div class="centre">
	<form action = 'update_ram.php?Update_Id=<?php echo $Update_Id; ?>' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
        
		<div class="form-group"><label>Name:</label><br><input class="form-control" type = 'text' name = 'Name' value = '<?php echo $MN; ?>' ></input><br></div>
		<div class="form-group"><label>Brand:</label><br><input class="form-control" type = 'text' name = 'Brand' value = '<?php echo $MBN; ?>' ></input><br></div>
		<div class="form-group"><label>Type:</label> <br><input class="form-control" type = 'text' name = 'Type' value = '<?php echo $MMN; ?>'  ></input><br></div>
		<div class="form-group"><label> Speed:</label><br><input class="form-control" type = 'text' name = 'Speed' value = '<?php echo $MOS; ?>'  ></input><br></div>
        <div class="form-group"><label>Price:</label><br><input class= "form-control" type = 'text' name = 'RP' value = '<?php echo $MPRO; ?>' ></input><br></div>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input class="btn btn-primary mb-2"  type = 'submit' name = 'submit' value = 'Update'></input><br>
		</fieldset>
	
	
	
    </form>
    </div>
	<!-- ending of col class -->
<!--</div>-->
	<!-- ending of row class-->
<!--</div>	-->
	<!-- ending of container class-->
</div>
<!-- <script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
<script src = "js/scripts.js"></script> -->
</body>

</html>

<?php
$Error="";
$a = 0;
$f = 0;
$b = $c = $d = $e  = $g = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
   
        $a = $_POST['RID'];
   
        $b = $_POST['name'];
  
        $c = $_POST['Brand'];
    
        $d = $_POST['Type'];
    
        $e = $_POST['Speed'];
   
        $f = $_POST['RP'];
   
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $UpdateQuery = "UPDATE ram SET 
	 ram_name = '$b' , ram_company = '$c', ram_type = '$d',
     ram_speed = '$e', ram_price = '$f' WHERE ram_id = '$a'";
    $Execute = mysqli_query($connection,$Query);
	if ( $Execute === FALSE ) {
		printf("error: %s\n", mysqli_error($connection));
	  }
	  else {
		echo '<script>window.open("view_ram.php?Updated=Record Updated Sucessfully","_self")</script>';
	  }
    

}
?>