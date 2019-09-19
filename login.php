<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Linkup</title>
    <link rel = "icon" href = "images\logo2.png" type = "image/png">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Lobster+Two&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="container">
        <div class="main">
            <header>
                <div id="logo-div">
                    <img src="images/logo.png" id="logo" alt=""> <span id="logo-text">Linkup</span> 
                </div>
                <div id="nav-div" class="header">
                    <h2>Home Page</h2>
                </div>
            </header>


            <div class="content">


                    <div class="image-div">
                            <img src="images/happy-young-couple.jpg" alt="">
                    </div>
                    <div class="home-page">
                        <?php if (isset($_SESSION['success'])): ?>
                            <div class="success">
                                <h3>
                                    <?php
                                        echo $_SESSION['success'];
                                        unset($_SESSION['success']);
                                    ?>
                                </h3>
                            </div>
                        <?php endif ?>

                        <?php if (isset($_SESSION['username'])): ?>
                                    <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                                    <p><a href="login.php?logout='1'" style="color:red";>Logout</a></p>
                        <?php endif ?>
                    </div>

            </div>
            <div class="clear"></div>
            <footer>
                <b>&copy;Copyright 2019 Team-zeal</b>
            </footer>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>