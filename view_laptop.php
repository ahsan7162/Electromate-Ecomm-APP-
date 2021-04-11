
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
	<h1>Laptop Products</h1>
</head>


<body>
<!-- Search start -->

<div>
<form action = 'view_laptop.php'  method = 'GET'>
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
$Searchquery = "SELECT * FROM laptop where laptop_id = '$Search'";
$Execute = mysqli_query($connection , $Searchquery);
while($DataRow = mysqli_fetch_array($Execute)){

    $ID = $DataRow['laptop_id'];
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

?>

<table width = "1000" border =  "5" align = "center">
		<caption>Search</caption>
		<tr>
			
			<th>Laptop_Id</th>
			<th>Name</th>
			<th>Brand Name</th>
			<th>Model Number</th>
			<th>Processor</th>
            <th>RAM</th>
            <th>SSD</th>
            <th>HDD</th>
            <th>GPU</th>
            <th>Battery Backup</th>
            <th>Screen Size</th>
            <th>Price</th>
            
		
		</tr>
        <tr>
<td><?php echo $ID;  ?> </td>
<td><?php echo $LN; ?> </td>
<td><?php echo $LBN;  ?> </td>
<td><?php echo $LMN;  ?> </td>
<td><?php echo $LPRO;  ?> </td>
<td><?php echo $LRAM;  ?> </td>
<td><?php echo $LSSD;  ?> </td>
<td><?php echo $LHDD;  ?> </td>
<td><?php echo $LGPU;  ?> </td>
<td><?php echo $LBB;  ?> </td>
<td><?php echo $LSS;  ?> </td>
<td><?php echo $LP;  ?> </td>
<td><a href = 'view_laptop.php'>Search Again</td>
</tr>
<?php
}
}
?>

<table width = "1000" border =  "5" align = "center">
		<caption>View</caption>
		<tr>
			
			<th>Laptop_Id</th>
			<th>Name</th>
			<th>Brand Name</th>
			<th>Model Number</th>
			<th>Processor</th>
            <th>RAM</th>
            <th>SSD</th>
            <th>HDD</th>
            <th>GPU</th>
            <th>Battery Backup</th>
            <th>Screen Size</th>
            <th>Price</th>
            
		
		</tr>
  

<?php
$connection = mysqli_connect('localhost','root','','ecommapp'); 
$ViewQuery = "SELECT * FROM laptop";
$Execute = mysqli_query($connection,$ViewQuery);
while($DataRow = mysqli_fetch_array($Execute)){
	
	$ID = $DataRow['laptop_id'];
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
   
	

	
	
?>
<tr>
<td><?php echo $ID;  ?> </td>
<td><?php echo $LN; ?> </td>
<td><?php echo $LBN;  ?> </td>
<td><?php echo $LMN;  ?> </td>
<td><?php echo $LPRO;  ?> </td>
<td><?php echo $LRAM;  ?> </td>
<td><?php echo $LSSD;  ?> </td>
<td><?php echo $LHDD;  ?> </td>
<td><?php echo $LGPU;  ?> </td>
<td><?php echo $LBB;  ?> </td>
<td><?php echo $LSS;  ?> </td>
<td><?php echo $LP;  ?> </td>

<td><a href= 'view_laptop.php?Delete=<?php echo $ID; ?>'>Delete</a></td>
<td><a href= 'Update.php?Update=<?php echo $ID; ?>'>Update</a></td>
</tr>
<?php } ?>
	</table>
	<?php

$connection = mysqli_connect('localhost','root','','ecommapp'); 
$Delete_record =  $_GET['Delete1'];
$Delete_Query = "DELETE FROM laptop WHERE laptop_id = '$Delete_record'";
$Execute = mysqli_query($connection,$Delete_Query);

?>

    </body>

</html>