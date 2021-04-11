
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "styles.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
	<!--<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">-->
	
	<title>Sign Up</title>

    <h1 class = "page" >Mobile Products</h1>      
  

  
    
</head>

<style>
    .page{
 padding-bottom : 15px;
  border-bottom: 2px solid #eee;
    }
    body{
        /* background-color : #7a7a7a; */
    }
   .view{
       color:black
   }
    </style>
<body>
<!--search start-->
<div>
<form action = 'view_mobile.php'  method = 'GET'>
	<fieldset>
		<input type = 'text' name = 'search' value ='' placeholder = 'Search by id'></input>
		<input type = 'submit' name = 'SearchButton' value = 'search'></input>
	
	</fieldset>
</form>
</div>
<?php
$connection = mysqli_connect('localhost','root','','ecommapp');
if(isset($_GET['SearchButton'])){
$Search = $_GET['search'];
$Searchquery = "SELECT * FROM mobile where mobie_id = '$Search'";
$Execute = mysqli_query($connection , $Searchquery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$ID = $DataRow['mobie_id'];
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


?>
<div class = "table-responsive-sm">
<table class = "table table-hover table-fixed  table-bordered  " style = "color: black; background-color: #cccccc" >
<caption class = "view"> View </caption>
		<thead>
       
		<tr>
			
			<th scope = "col" >Mobile_Id</th>
			<th scope = "col">Name</th>
			<th scope = "col">Brand Name</th>
			<th scope = "col">Model Number</th>
			<th scope = "col">Operating System</th>
            <th scope = "col">Processor</th>
            <th scope = "col">CPU Core</th>
            <th scope = "col">CPU Speed</th>
            <th scope = "col">GPU</th>
            <th scope = "col">Display Type</th>
            <th scope = "col">Display Size</th>
            <th scope = "col">Resolution</th>
            <th scope = "col">Memory</th>
            <th scope = "col">RAM</th>
            <th scope = "col">Front Camera</th>
            <th scope = "col">Back Camera</th>
            <th scope = "col">Back Camera Feature</th>
            <th scope = "col">Battery Type</th>
            <th scope = "col">Colors</th>
            <th scope = "col">Price</th>
            <th scope = "col">Delete</th>
            <th scope = "col">Update</th>
		
		</tr>
        </thead>
        <tbody>
<tr>
<td><?php echo $ID;  ?> </td>
<td><?php echo $MN; ?> </td>
<td><?php echo $MBN;  ?> </td>
<td><?php echo $MMN;  ?> </td>
<td><?php echo $MOS;  ?> </td>
<td><?php echo $MPRO;  ?> </td>
<td><?php echo $MCORE;  ?> </td>
<td><?php echo $MSPEED;  ?> </td>
<td><?php echo $MGPU;  ?> </td>
<td><?php echo $MTYPE;  ?> </td>
<td><?php echo $MSIZE;  ?> </td>
<td><?php echo $MRES;  ?> </td>
<td><?php echo $MMEM;  ?> </td>
<td><?php echo $MRAM;  ?> </td>
<td><?php echo $MF;  ?> </td>
<td><?php echo $MB;  ?> </td>
<td><?php echo $MBF;  ?> </td>
<td><?php echo $MBT;  ?> </td>
<td><?php echo $MC;  ?> </td>
<td><?php echo  $MP;  ?> </td>
<td><a href= 'view_mobile.php'>Search again</td>

</tr>
</tbody>
</table>
</div>

<?php
}
}
?>
<!--serach end-->

<div class = "table-responsive-sm">
<table class = "table table-hover table-fixed  table-bordered  " style = "color: black; background-color: #cccccc" >
<caption class = "view"> View </caption>
		<thead>
       
		<tr>
			
			<th scope = "col" >Mobile_Id</th>
			<th scope = "col">Name</th>
			<th scope = "col">Brand Name</th>
			<th scope = "col">Model Number</th>
			<th scope = "col">Operating System</th>
            <th scope = "col">Processor</th>
            <th scope = "col">CPU Core</th>
            <th scope = "col">CPU Speed</th>
            <th scope = "col">GPU</th>
            <th scope = "col">Display Type</th>
            <th scope = "col">Display Size</th>
            <th scope = "col">Resolution</th>
            <th scope = "col">Memory</th>
            <th scope = "col">RAM</th>
            <th scope = "col">Front Camera</th>
            <th scope = "col">Back Camera</th>
            <th scope = "col">Back Camera Feature</th>
            <th scope = "col">Battery Type</th>
            <th scope = "col">Colors</th>
            <th scope = "col">Price</th>
            <th scope = "col">Delete</th>
            <th scope = "col">Update</th>
		
		</tr>
        </thead>

       
<?php
// get all the data from a table in a table format
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$ViewQuery = "SELECT * FROM mobile";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$ID = $DataRow['mobie_id'];
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
	

	
	
?>
<tbody>
<tr>
<td><?php echo $ID;  ?> </td>
<td><?php echo $MN; ?> </td>
<td><?php echo $MBN;  ?> </td>
<td><?php echo $MMN;  ?> </td>
<td><?php echo $MOS;  ?> </td>
<td><?php echo $MPRO;  ?> </td>
<td><?php echo $MCORE;  ?> </td>
<td><?php echo $MSPEED;  ?> </td>
<td><?php echo $MGPU;  ?> </td>
<td><?php echo $MTYPE;  ?> </td>
<td><?php echo $MSIZE;  ?> </td>
<td><?php echo $MRES;  ?> </td>
<td><?php echo $MMEM;  ?> </td>
<td><?php echo $MRAM;  ?> </td>
<td><?php echo $MF;  ?> </td>
<td><?php echo $MB;  ?> </td>
<td><?php echo $MBF;  ?> </td>
<td><?php echo $MBT;  ?> </td>
<td><?php echo $MC;  ?> </td>
<td><?php echo  $MP;  ?> </td>
<td><a href= 'view_mobile.php?Delete1=<?php echo $ID; ?>'><i  class = "fa fa-trash fa-lg"></i></a></td>
<td><a href= 'Update_mobile.php?Update=<?php echo $ID; ?>'><i  class = "fa fa-edit fa-lg"></i></a></td>
</tr>
<?php } ?>
</tbody>
	</table>
    </div>

<?php
//Deletion code
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$Delete_record =  $_GET['Delete1'];
$Delete_Query = "DELETE FROM mobile WHERE mobie_id = '$Delete_record'";
$Execute = mysqli_query($connection,$Delete_Query);


?>
    </body>

</html>
