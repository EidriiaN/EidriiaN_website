<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/style.css">
    <!-- <script src="https://kit.fontawesome.com/33c1bca693.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/fontawsome/css/all.css">
    <link rel="stylesheet" type="text/css" href="/ProiectDAW/css/fontawsome/fontawesome.css">
    <title>Contact</title>
</head>

<body>
    <?php
    require 'menu.php';

        if (isset($_SESSION['logat'])) {
            
            echo'
            <div class="popup">
                <h3>Te-ai logat cu succes</h2>
            </div>';
            unset($_SESSION['logat']);
        }
    ?>

    <main>
        <h2 class="title">Contact</h2>
        <p>In aceasta sectiune se pot regasii proiectele la care am lucrat sau care sunt in curs de finalizare.</p>
        

    </main>

    <script src="js/main.js"></script>
</body>

</html>