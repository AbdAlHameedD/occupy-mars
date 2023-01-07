<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "occupymarsdb";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $fullName = htmlspecialchars(stripcslashes(trim($_POST["FullName"])));
    $email = htmlspecialchars(stripcslashes(trim($_POST["Email"])));
    $birthDate = htmlspecialchars(stripcslashes(trim($_POST["BirthDate"])));
    $gender = htmlspecialchars(stripcslashes(trim($_POST["Gender"])));
    $country = htmlspecialchars(stripcslashes(trim($_POST["Country"])));

    $insertTicketQueryStatement = "INSERT INTO volunteers (fullName, email, gender, birthDate, country) VALUES ('$fullName', '$email', '$gender', '$birthDate', '$country')";
    $conn -> query($insertTicketQueryStatement);

    header("Location: dashboard.php");
    die();
?>