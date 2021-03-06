<?php
    require("connection.php");

    $query = "SELECT * FROM `characters` ORDER BY name";

    $result = $conn->prepare($query);
    $result->execute();
    $rows = $result->fetchAll();

    for($i=0; $i<count($rows); $i++){
        if($_GET["subject"] == $rows[$i]["name"]){
            $getal = $i;
        }
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?php echo $rows[$getal]["name"]; ?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[$getal]["avatar"]; ?>">
            <div class="stats" style="background-color: <?php echo $rows[$getal]["color"]; ?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?php echo $rows[$getal]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?php echo $rows[$getal]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?php echo $rows[$getal]["defense"]; ?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?php echo $rows[$getal]["weapon"]; ?></li>
                    <li><b>Armor</b>: <?php echo $rows[$getal]["armor"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?php echo $rows[$getal]["bio"]; ?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; [Thomas Brink] 2020</footer>
</body>
</html>