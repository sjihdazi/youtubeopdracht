<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sean Surfboard</title>
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
            <h1>Login</h1>
            <form action="" method='post'>
                <div class="form-group">
                    <label for="username">Gebruikersnaam:</label>
                    <input name="username" class="form-control" id="username" placeholder="Gebruikersnaam">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input name="password" type="password" class="form-control" id="pwd" placeholder="***********">
                </div>
                <input name="submit" type="submit" value=" Login ">
            </form>
            <?php
			
			include 'dbconfig.php';
			error_reporting(0);

            if (isset($_POST['submit'])) {
                $name = $_POST['username'];

                $query = mysqli_query($conn,"SELECT * FROM gebruikers WHERE Gebruikers= '$name'");
                $data = mysqli_fetch_array($query);

                if($data == NULL){
                    echo "Verkeerde gebruikersnaam";
                }
                if($_POST['password'] != $data['Wachtwoord'] && $data != NULL) {
                    echo "Verkeerd wachtwoord!";
                }
                if($_POST['password'] == $data['Wachtwoord'] && $data != NULL) {
                    header('Location: toevoegen.php');
                }
            }
            ?>
        </div>
        <div class="col-sm-4">

        </div>
    </div>
</div>

</body>
</html>