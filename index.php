<?php
    // Allow the config
    define('__CONFIG__',true);
    // require the config
    require 'include/config.php' 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX Using UIKIT</title>
    <!-- UIkit CSS -->    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.2/css/uikit.min.css" />
</head>
<body>
    <div class="uk-section uk-container">
        <?php
            echo "Nothing in here, Dude!";
        ?> <br>
        <p class="uk-text-primary"> Well! Here is what you can do!</p>
        <a class="uk-link-muted" href="login.php">Login!</a> <br>
        <a class="uk-link-muted" href="register.php">Register!</a>
    </div>
    
    <?php require_once "include/footer.php"; ?>
</body>
</html>