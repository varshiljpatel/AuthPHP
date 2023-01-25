<?php
session_start();

if (!isset($_SESSION['user_name'])) {
    header("location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loginsys</title>
    <link rel="stylesheet" href="css/utilities.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <main>
        <?php 
    include_once 'components/_comp_header.html';
    ?>
        <div class="containerWperc dFlexCenter fDirectionColumn">
            <h1 class="unable_enter fw600 mt6 mb3">Welcome <?php echo $_SESSION['user_name']; ?> you are logged in now.</h1>
            <a href="logout.php" class="aReset tUpr px3 py1 dFlexCenter bcRed cWhite">log out</a>    
        </div>
    </main>
</body>
</html>