<?php
    require("connection.php");

    $query = "SELECT * FROM `characters`";

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
<header><h1>Alle [X] characters uit de database</h1>

</header>
<div id="container">
    <a class="item" href="character.php?subject=Bowser">
        <div class="left">
            <img class="avatar" src="resources/images/bowser.jpg">
        </div>
        <div class="right">
            <h2>Bowser</h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> 10000</li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> 400</li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span> 100</li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Buzz">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[3]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[3]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[3]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[3]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[3]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Cat">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[2]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[2]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[2]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[2]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[2]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Harley">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[8]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[8]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[8]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[8]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[8]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Shrek">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[5]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[5]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[5]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[5]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[5]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Buffy">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[6]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[6]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[6]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[6]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[6]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Cap">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[1]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[1]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[1]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[1]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[1]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Conan">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[0]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[0]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[0]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[0]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[0]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Mario">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[4]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[4]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[4]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[4]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[4]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
    <a class="item" href="character.php?subject=Zelda">
        <div class="left">
            <img class="avatar" src="resources/images/<?php echo $rows[7]["avatar"]; ?>">
        </div>
        <div class="right">
            <h2><?php echo $rows[7]["name"]; ?></h2>
            <div class="stats">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?php echo $rows[7]["health"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span>  <?php echo $rows[7]["attack"]; ?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span>  <?php echo $rows[7]["defense"]; ?></li>
                </ul>
            </div>
        </div>
        <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
    </a>
</div>
<footer>&copy; [Thomas Brink] 2021</footer>
</body>
</html>