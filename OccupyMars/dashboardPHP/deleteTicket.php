<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "occupymarsdb";
    $conn = new mysqli($servername, $username, $password, $dbname);

    $deleteTicketQuery = "DELETE FROM volunteers WHERE ID=$_GET[id]";
    $sqlCommand = $conn -> query($deleteTicketQuery);
    
    header("Location: dashboard.php");
    die();
?>