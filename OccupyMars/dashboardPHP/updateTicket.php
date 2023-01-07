<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "occupymarsdb";
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    $id = htmlspecialchars(stripcslashes(trim($_POST["id"])));
    $fullName = htmlspecialchars(stripcslashes(trim($_POST["fname"])));
    $email = htmlspecialchars(stripcslashes(trim($_POST["mail"])));
    $birthDate = htmlspecialchars(stripcslashes(trim($_POST["bDate"])));
    $gender = htmlspecialchars(stripcslashes(trim($_POST["g"])));
    $country = htmlspecialchars(stripcslashes(trim($_POST["c"])));
    
    $updateTicketQuery = "UPDATE volunteers SET fullName='$fullName', email='$email', birthDate='$birthDate', gender='$gender', country=' $country' WHERE ID='$id'";
    $conn -> query($updateTicketQuery);

    header("Location: dashboard.php");
    die();
?>