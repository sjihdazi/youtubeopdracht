<?php
include 'dbconfig.php';

if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM bestellingen WHERE Bestelnummer=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Video's</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<div class="jumbotron bg-1 text-center">
    <h1>Youtube Video's</h1>
</div>

<div class="container-fluid bg-2">
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-10">
            <h1>Bestellingen</h1>
            <br>
            <table align="center">
    <tr>
    <th colspan="11"><a href="toevoegen.php">Voeg hier iemand toe</a></th>
    </tr>
    <th>Id</th>
	<th>Artist</th>
    <th>Song Title</th>
    <th>PlaybackId</th>
	<?php
   $query = "SELECT ID , Artist , Song Title , PlaybackId" ;
$result = mysqli_query($conn,$query);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["ID"]. "</td>
			  <th> " . $row["Artist"]. "</th>
			  <th> " . $row["Song Title"]. "</th>
			  <th>" . $row["PlaybackId"]. "</th>"
			  ?>
			  <td align="center"><a href="javascript:edt_id('<?php echo $row[0]; ?>')"><img src="b_edit.jpg" height="20px" width="20px" align="EDIT" /></a></td>
        <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><img src="b_drop.png"  height="20px" width="20px" align="DELETE" /></a></td>
		   	  <br></tr>
			  <?php
	}
}
?>
   <tr>

    </tr>
    </table>
        </div>
        <div class="col-sm-1">

        </div>
    </div>
</div>

</body>
</html>