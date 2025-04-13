<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlogPanel</title>
    <?php include('./commonFiles/commonFiles.php')?>
</head>

<body>

    <?php
    session_start();

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
include('./authentication/header.php');
    if(isset($_GET['admin'])){
        include('./authentication/login.php');
    }

else if(isset($_GET['sub-user'])){
    include('./authentication/sub-user.php');
}
else{
    //
}
    ?>
</body>

</html>