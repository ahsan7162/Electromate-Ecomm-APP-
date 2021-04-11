<?php
$Error="";
$a = 0;
$f = 0;
$b = $c = $d = $e  = $g = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s = $t = '';
if(isset($_POST['submit'])){
    if(empty($_POST['RID']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $a = $_POST['RID'];
    }
    if(empty($_POST['Name']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $b = $_POST['Name'];
    }
    if(empty($_POST['Brand']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $c = $_POST['Brand'];
    }
    if(empty($_POST['Type']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $d = $_POST['Type'];
    }
    if(empty($_POST['Speed']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $e = $_POST['Speed'];
    }
    if(empty($_POST['RP']))
    {
        $Error = "All Fields are Required";
    }
    else
    {
        $f = $_POST['RP'];
    }
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
    $Query = "INSERT INTO ram(ram_id, ram_name, ram_company, ram_type, ram_speed, ram_price)
    VALUES('$a','$b','$c','$d','$e','$f')";
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
<h1>Add Ram</h1>
<!--<div class = 'row'>-->
<!--<div class = 'col-sm-11'>-->
    <div class="centre">
	<form action = '#' method ='post' enctype = 'multipart/form-data'>
		<fieldset>
        <span class = 'Error'><?php echo $Error; ?></span>
		<div class="form-group"><label>Ram ID:</label><br><input class="form-control" type = 'text' name = 'RID' value = '' placeholder="Between 401-500"></input>*<br></div>
		<div class="form-group"><label>Name:</label><br><input class="form-control" type = 'text' name = 'Name' value = '' placeholder=" Enter Ram Name(e.g:G.SKILL 16GB DDR4 Trident Z Royal Silver)"></input>*<br></div>
		<div class="form-group"><label>Brand:</label><br><input class="form-control" type = 'text' name = 'Brand' value = '' placeholder="Enter Brand Name(e.g:Gskills)"></input>*<br></div>
		<div class="form-group"><label>Type:</label> <br><input class="form-control" type = 'text' name = 'Type' value = ''  placeholder="Enter Type(e.g:DDR4 or DDR5)"></input>*<br></div>
		<div class="form-group"><label> Speed:</label><br><input class="form-control" type = 'text' name = 'Speed' value = ''  placeholder="Enter Speed(e.g:3600 MHz)"></input>*<br></div>
        <div class="form-group"><label>Price:<br><input class= "form-control" type = 'text' name = 'RP' value = '' placeholder = 'Enter  Price(e.g:40000)'></input>*<br></div>
		<!--Image:<br><input type = 'file' name = 'product_img'/><br>-->
		<br><input class="btn btn-primary mb-2"  type = 'submit' name = 'submit' value = 'Add product'></input><br>
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