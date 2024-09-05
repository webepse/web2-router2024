<?php
    $menu = [
        "home" => "home.php",
        "presentation" => "presentation.php"
    ];

    // www.monsite.be/presentation.php
    // www.monsite.be/index.php
    // www.monsite.be/index.php?action=home
    // www.monsite.be/index.php?action=presentation
    // www.monsite.be/presentation

    if(isset($_GET['action']))
    {
        $action = htmlspecialchars($_GET['action']);
        if(array_key_exists($action,$menu))
        {
            $myMenu= $menu[$action];
        }else{
            header("LOCATION:404.php");
        }
    }else{
        $myMenu = $menu['home']; // home.php
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("partials/header.php");
        // include("view/home.php");
        include("view/".$myMenu);
    
    
    ?>
</body>
</html>