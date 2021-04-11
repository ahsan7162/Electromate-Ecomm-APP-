<?php
$Error = "";
$a = 0;
$p = 0;
$t = 0;
$b = $c = $d = $e = $f = $g = $h = $i = $j = $k = $l = $m = $n = $o =  $q = $r = $s  = '';
if(isset($_POST['submit'])){
		
		
    #header("location: login.php");
   if(empty($_POST['MOBID']))
    {
        
        
        $Error = " is Required";
    }
    else
    {
       $a = $_POST['MOBID'];
    }
	if(empty($_POST['MOBN']))
    {
        
        
        $Error = " is Required";
    }
    else
    {
       $b = $_POST['MOBN'];
    }
   
    if(empty($_POST['MOBBN']))
    {
        $Error = " is Required";
    }
    else
    {
        $c = $_POST['MOBMN'];
    }
	if(empty($_POST['MOBMN']))
    {
        $Error = " is Required";
    }
    else
    {
        $d = $_POST['MOBBN'];
    }
   
    if(empty($_POST['MOBOS']))
    {
        $Error = " is Required";
    }
    else
    {
        $e = $_POST['MOBOS'];
    }
    if(empty($_POST['MOBP']))
    {
        $Error = " is Required";
    }
    else
    {
        $f = $_POST['MOBP'];
    }
    if(empty($_POST['MOBCORE']))
    {
        $Error = " is Required";
    }
    else
    {
        $g = $_POST['MOBCORE'];
    }
    if(empty($_POST['MOBSPEED']))
    {
        $Error = " is Required";
    }
    else
    {
        $h = $_POST['MOBSPEED'];
    }
    if(empty($_POST['MOBGPU']))
    {
        $Error = " is Required";
    }
    else
    {
        $i = $_POST['MOBGPU'];
    }
    if(empty($_POST['MOBDT']))
    {
        $Error = " is Required";
    }
    else
    {
        $j = $_POST['MOBDT'];
    }
    if(empty($_POST['MOBDS']))
    {
        $Error = " is Required";
    }
    else
    {
        $k = $_POST['MOBDS'];
    }
    if(empty($_POST['MOBRES']))
    {
        $Error = " is Required";
    }
    else
    {
        $l = $_POST['MOBRES'];
    }
    if(empty($_POST['MOBM']))
    {
        $Error = " is Required";
    }
    else
    {
        $m = $_POST['MOBM'];
    }
    if(empty($_POST['MOBRAM']))
    {
        $Error = " is Required";
    }
    else
    {
        $n = $_POST['MOBRAM'];
    }
    if(empty($_POST['MOBFCAM']))
    {
        $Error = " is Required";
    }
    else
    {
        $o = $_POST['MOBFCAM'];
    }
    if(empty($_POST['MOBBCAM']))
    {
        $Error = " is Required";
    }
    else
    {
        $p = $_POST['MOBBCAM'];
    }
    if(empty($_POST['MOBBCAMFEA']))
    {
        $Error = " is Required";
    }
    else
    {
        $q = $_POST['MOBBCAMFEA'];
    }
    if(empty($_POST['MOBBT']))
    {
        $Error = " is Required";
    }
    else
    {
        $r = $_POST['MOBBT'];
    }
    if(empty($_POST['MOBCOLOR']))
    {
        $Error = " is Required";
    }
    else
    {
        $s = $_POST['MOBCOLOR'];
    }
    if(empty($_POST['MOBPRICE']))
    {
        $Error = " is Required";
    }
    else
    {
        $t = $_POST['MOBPRICE'] ;
    }
    
    
    $connection = mysqli_connect('localhost','root','','ecommapp');
    if($connection)
    {
        echo "connected";
    }
	$Query = "INSERT INTO mobile(mobie_id,mobile_name,brand_name,model_number,OS,processor,cpu_core,cpu_speed,gpu,display_type,
    display_size,resolution,memory,ram,front_camera,back_camera,back_camera_feature,battery_type,colors,price)
        VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t')";
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
	<form action = 'add_mobile.php', method = 'post' >
		<fieldset>
		
		Mobile_Id:<br><input type = 'text' name = 'MOBID' value = '' placeholder = "Between 1 to 100"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Name:<br><input type = 'text' name = 'MOBN' value = ''placeholder = "Enter Name(e.g:Samsung S7)"></input>*<span class = 'Error'><?php //echo $Error; ?></span><br>-->
		Brand Name:<br><input type = 'text' name = 'MOBBN' value = '' placeholder = "Enter Brand Name (e.g:Samsung)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Model Number:<br><input type = 'text' name = 'MOBMN' value = '' placeholder = "Enter Brand Name (e.g:CPH-999)"></input>*<span class = 'Error'><?php echo $Error;?></span><br>
		Operating System:<br><input type = 'text' name = 'MOBOS' value = ''  placeholder = "Enter OS (e.g:Android 11)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		Processor:<br><input type = 'text' name = 'MOBP' value = ''  placeholder = "Enter Brand Name (e.g:CPH-999)"></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
		CPU Core:<br><input type = 'text' name = 'MOBCORE' value = ''placeholder = 'Enter CPU Core (e.g:Quad Core)' ></input>*<span class = 'Error'><?php echo $Error;?></span><br>
        CPU Speed:<br><input type = 'text' name = 'MOBSPEED' value = ''placeholder = 'Enter CPU Speed (e.g:3.5Ghz)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        GPU:<br><input type = 'text' name = 'MOBGPU' value = ''placeholder = 'Enter GPU (e.g:Adrino,mali)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Display Type:<br><input type = 'text' name = 'MOBDT' value = ''placeholder = 'Enter Display Type (e.g:IPS-LCD)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Display Size:<br><input type = 'text' name = 'MOBDS' value = ''placeholder = 'Enter Display Size (e.g:4.7-inch)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Resolution:<br><input type = 'text' name = 'MOBRES' value = ''placeholder = 'Enter Resolution (e.g:1080 x 1920)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Memory:<br><input type = 'text' name = 'MOBM' value = ''placeholder = 'Enter Memory Size (e.g:32GB)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        RAM:<br><input type = 'text' name = 'MOBRAM' value = ''placeholder = 'Enter RAM (e.g:4GB)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Front Camera:<br><input type = 'text' name = 'MOBFCAM' value = ''placeholder = 'Enter Front Camera (e.g:8MP)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Back Camera:<br><input type = 'text' name = 'MOBBCAM' value = ''placeholder = 'Enter Number of Back Camera a Mobile have (e.g:2,3...)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Back Camera Feature:<br><input type = 'text' name = 'MOBBCAMFEA' value = ''placeholder = 'Enter Back Camera Feature (e.g:12MP,8MP)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Battery Type:<br><input type = 'text' name = 'MOBBT' value = ''placeholder = 'Enter Battery Type (e.g:500MH)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Colors:<br><input type = 'text' name = 'MOBCOLOR' value = ''placeholder = 'Enter Mobile Color (e.g:black,blue,...etc)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
        Price:<br><input type = 'text' name = 'MOBPRICE' value = ''placeholder = 'Enter Mobile price (e.g:35000)'></input>*<span class = 'Error'><?php echo $Error; ?></span><br>
       
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