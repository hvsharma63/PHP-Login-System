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
        <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
            <form class="uk-form-stacked js-register">
                <h1 class="uk-heading-primary">Register</h1>
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-email">Email</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-email" type="email" placeholder="black@blank.blank" requird="required">
                    </div>
                </div>
                
                <div class="uk-margin">
                    <label class="uk-form-label" for="form-stacked-password">Password</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="form-stacked-password" type="password" placeholder="Hush Hush!" requird="required">
                    </div>
                </div>

                <div class="uk-margin">
                    <button class="uk-button uk-button-primary" input="submit">Register</button>
                </div>
            </form>
        </div>
    </div>
    
    <?php require_once "include/footer.php"; ?>
    <!--JQUery-->
    
</body>
</html>