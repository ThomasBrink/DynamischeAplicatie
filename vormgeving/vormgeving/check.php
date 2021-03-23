<?php
    require("connection.php");

    $query = "SELECT * FROM `characters`";

    $result = $conn->prepare($query);
    $result->execute();
    $rows = $result->fetchAll();

    echo "<pre>";
      var_dump($rows);
    echo "</pre>";
?>