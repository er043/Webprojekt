<?php

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$username = $_POST['username'];
$email = $_POST['email'];
$passwort = $_POST['passwort'];



$servername = "localhost";
$dbuser = "root";
$password = "";
$dbname="webprojekt";


// Create connection
$conn = new mysqli($servername, $dbuser, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


if (!empty($vorname) && !empty($nachname) && !empty($username)&& !empty($email) && !empty($passwort)) {
    try {

        $sql = ("INSERT INTO registrierung(vorname,nachname,username,email,passwort) VALUES ('$vorname','$nachname','$username','$email','$passwort')");
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }
    catch (PDOException $e) {
        echo "Error: Bitten wenden Sie sich an den Administrator!";
        die();
    }
} else {
    echo "Error: Bitte alle Felder ausfüllen!";
}
?>