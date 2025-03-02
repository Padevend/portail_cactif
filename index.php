<?php
    error_reporting(0);
    ini_set("display_errors", 0);
    
    session_start();
    if(!isset($_SESSION["user"])){
        //redirection vers la page de connexion si auccun utilisateur n'est connecter
        header("location: ./Auth/login/index.php"); 
        exit();
    }else{
        $user = $_SESSION["user"];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/board.css">
    <title>Board</title>
</head>
<body>
    <h1>WELCOME, <span><?php echo $user["name"] ?></span> </h1>
    <h2>email: <span><?php echo $user["email"] ?></span> </h2>
    <a href="./Auth/logout/index.php" >logout</a>
</body>
</html>