<?php
include 'dbconfig.php';
error_reporting(0);

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
            <table align="center">
    <tr>
    <th colspan="11"><a href="toevoegen.php">Voeg hier iemand toe</a></th>
    </tr>
    <th>Bestelnummer</th>
	<th>Naam</th>
    <th>Adres</th>
    <th>Email</th>
	<th>Telefoon</th>
	<th>Postcode</th>
    <th>Afmetingen</th>
    <th>Datumop</th>
	<th>Datumaf</th>
	

    <th colspan="2">Activiteiten</th>
	<?php
   $query = "SELECT Bestelnummer , Naam , Adres , Email , Telefoon , Postcode , Afmetingen , Datumop , Datumaf FROM  bestellingen" ;
$result = mysqli_query($conn,$query);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Bestelnummer"]. "</td>
			  <th> " . $row["Naam"]. "</th>
			  <th> " . $row["Adres"]. "</th>
			  <th>" . $row["Email"]. "</th>
			  <th> " . $row["Telefoon"]. "</th>
			  <th> " . $row["Postcode"]. "</th>
			  <th>" . $row["Afmetingen"]. "</th>
			  <th> " . $row["Datumop"]. "</th>
			  <th>" . $row["Datumaf"]. "</th>"
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