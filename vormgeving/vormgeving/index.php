<?php
    require("connection.php");

    $query = "SELECT * FROM `characters` ORDER BY name";

    $result = $conn->prepare($query);
    $result->execute();
    $rows = $result->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1>Alle [<?php echo count($rows); ?>] characters uit de database</h1>
</header>
<div id="container">
<?php 

    for($i=0; $i<count($rows); $i++){
    echo '
            <a class="item" href="character.php?subject='?><?php echo $rows[$i]["name"]; ?> <?php echo '">
                <div class="left">
                    <img class="avatar" src="resources/images/'?><?php echo $rows[$i]["avatar"]; ?> <?php echo '">
                </div>
                <div class="right">
                    <h2>'?><?php echo $rows[$i]["name"]; ?><?php echo '</h2>
                    <div class="stats">
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-heart"></i></span>'?><?php echo $rows[$i]["health"]; ?><?php echo '</li>
                            <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>'?><?php echo $rows[$i]["attack"]; ?><?php echo '</li>
                            <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>'?><?php echo $rows[$i]["defense"]; ?><?php echo '</li>
                        </ul>
                    </div>
                </div>
                <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
            </a> 
';
}

?>
</div>
<footer>&copy; [Thomas Brink] 2021</footer>
</body>
</html>