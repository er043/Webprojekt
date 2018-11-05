<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">    <title>Startseite</title>



</head>
<body>
<h1>Test</h1>
<br>
<!--test124-->
<!--test123-->
<!--test123-->
<!--test123-->
<!--test124-->
<?php
$servername = "mysql:dbhost=localhost;dbname=webprojekt";
$username = "root";
$password = "";

try {
    $conn = new PDO($servername, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

?>


<a href="registrierung.php">Registrierung</a>


</body>
</html>
