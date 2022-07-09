<?php  require_once("resources/config.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>formLogin</title>
</head>
<body>
    <div class="top_center" align="center">
        <div class="center">
            <h1>សូមស្វាគមន៍</h1>
            <img src="img/loog.png" height="200px" alt=""><br>
            <?php display_message();?>
            <form action="" method="post">
                <div class="txt_field">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="txt_field">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <input type="submit" name="submit" value="ចូលប្រើ">
            </form>
        </div>

    </div>
<?php login_user();?>
    <div class="container">
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Deverlop By: Tongheng-T</p>
                </div>
            </div>
        </footer>
    </div>
    
</body>
</html>