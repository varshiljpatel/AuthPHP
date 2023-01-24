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
    <?php
    session_start();

    // stop session
    session_unset();
    session_destroy();

    include_once 'components/_logo_header.html';
    ?>
    <main>
        <div class="containerWperc bcLight my15 dFlexCenter fDirectionColumn aiCenter">
            <span class="dFlexCenter cRed sorry mb3">Sorry!</span>
            <h1 class="unable_enter taCenter mb3">Unable to access this site before login</h1>
            <div class="submit_btn dFlexCenter">
                <a href="index.php" class="aReset tUpr px3 py1 dFlexCenter bcBlue cWhite">log in</a>
            </div>
        </div>
    </main>
</body>
</html>