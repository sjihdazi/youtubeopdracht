
<?php

include 'dbconfig.php';

if(isset($_POST['btn-save'])) {

    $Bestelnummer = $_POST['Bestelnummer'];
    $Naam = $_POST['Naam'];
    $Adres = $_POST['Adres'];
    $Email = $_POST['Email'];
    $Telefoon = $_POST['Telefoon'];
    $Postcode = $_POST['Postcode'];
    $Afmetingen = $_POST['Afmetingen'];
    $Datumop = $_POST['Datumop'];
    $Datumaf = $_POST['Datumaf'];


    $sql = "INSERT INTO bestellingen(Bestelnummer, Naam, Adres, Email, Telefoon, Postcode, Afmetingen, Datumop, Datumaf)
VALUES ('$Bestelnummer','$Naam','$Adres','$Email','$Telefoon','$Postcode','$Afmetingen','$Datumop','$Datumaf')";

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
                    <label for="bestelnummer">Bestelnummer:</label>
                    <input name="Bestelnummer" class="form-control" id="bestelnummer" placeholder="Bestelnummer" required>
                </div>
                <div class="form-group">
                    <label for="naam">Naam:</label>
                    <input name="Naam" class="form-control" id="naam" placeholder="Naam" required>
                </div>
                <div class="form-group">
                    <label for="adres">Adres:</label>
                    <input name="Adres" class="form-control" id="adres" placeholder="Adres" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="Email" class="form-control" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="telefoon">Telefoon:</label>
                    <input name="Telefoon" class="form-control" id="telefoon" placeholder="Telefoonnummer" required>
                </div>
                <div class="form-group">
                    <label for="postcode">Postcode:</label>
                    <input name="Postcode" class="form-control" id="postcode" placeholder="Postcode" required>
                </div>
                <div class="form-group">
                    <label for="afmetingen">Afmetingen:</label>
                    <input name="Afmetingen" class="form-control" id="afmetingen" placeholder="Afmetingen" required>
                </div>
                <div class="form-group">
                    <label for="datumop">Datumop:</label>
                    <input name="Datumop" type="date" class="form-control" id="datumop" placeholder="Datum ophalen" required>
                </div>
                <div class="form-group">
                    <label for="datumaf">Datumaf:</label>
                    <input name="Datumaf" type="date" class="form-control" id="datumaf" placeholder="Datum afgeven" required>
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