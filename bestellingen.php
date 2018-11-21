<?php
include 'dbconfig.php';


if(isset($_GET['delete_id']))
{
 $sql_query="DELETE FROM videos WHERE Bestelnummer=".$_GET['delete_id'];
 mysql_query($sql_query);
 header("Location: $_SERVER[PHP_SELF]");
}
// delete condition
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bestellingen</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<div class="jumbotron bg-1 text-center">
    <h1>Seans Surfboards</h1>
    <p>For all your custom surfboards</p>
</div>

<div class="container-fluid bg-2">
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-10">
            <h1>Bestellingen</h1>
            <br>
     <table align="center" class="col-md-12">
    <tr>
    <th colspan="12"><a href="index.php">Voeg hier iemand toe</a></th>
    </tr>

	<th>Artist</th>
    <th>Song Title</th>
    <th>PlaybackId</th>
	

  
	<?php
$query = "SELECT Artist , SongTitle , PlaybackId FROM videos" ;
$result = mysqli_query($conn,$query);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
 echo "
			  <td> " . $row["Artist"]. "</td>
			  <td> " . $row["SongTitle"]. "</td>
			  <td> <iframe width='300' height='300' src='https://www.youtube.com/embed/". $row['PlaybackId']." ' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe></td>"
			  ?>
			  
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