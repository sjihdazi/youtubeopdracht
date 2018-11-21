
<?php

include 'dbconfig.php';

if(isset($_POST['btn-save'])) {


    $Artiest = $_POST['Artist'];
    $SongTitle = $_POST['SongTitle'];
    $PLaybackId = $_POST['PlaybackId'];
    


    $sql = "INSERT INTO videos( Artist, SongTitle, PlaybackId)
		VALUES ('$Artiest','$SongTitle ','$PLaybackId')";

}

?>
<!DOCTYPE html>	
<html lang="en">
<head>
    <title>Bestelling toevoegen</title>
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

<div class="container bg-2">
    <div class="row">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <h1>Bestelling toevoegen</h1>
            <br>
            <a href="bestellingen.php">Bekijk hier de bestellingen</a>
            <br>
            <form method="post">
                <div class="form-group">
                    <label for="bestelnummer">Artiest:</label>
                    <input name="Artist" class="form-control" id="bestelnummer" placeholder="Artiest" required>
                </div>
                <div class="form-group">
                    <label for="naam">Songtitle:</label>
                    <input name="SongTitle" class="form-control" id="naam" placeholder="Songtitle" required>
                </div>
                <div class="form-group">
                    <label for="adres">PlaybackId:</label>
                    <input name="PlaybackId" class="form-control" id="adres" placeholder="PlaybackId" required>
                </div>
                
                <button type="submit" name="btn-save" class="btn btn-success">Toevoegen</button>
            </form>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>
    <br>
<?php
error_reporting(0);
if ($conn->query($sql) === TRUE) {
    echo "Bestelling is toegevoegd";
} else {
    echo "Deze data is al aangemaakt";
}
// sql query execution function


?>
</body>
</html>