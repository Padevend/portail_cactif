<?php
    error_reporting(0);
    ini_set("display_errors", 0);
    
    session_start();

    $notify_success = $_SESSION["status"] ?? ""; //recupere la var status stocke dans a sesion active
    unset($_SESSION["status"]); //supreesion du staus apres affichage

    $notify_error = $_SESSION["error"] ?? ""; //recupere la var status stocke dans a sesion active
    unset($_SESSION["error"]); //supreesion du staus apres affichage
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/index.css">
    <title>register</title>
</head>
<body>
    <?php if($notify_success): ?>
        <div class="info success">
            <span><?php echo htmlspecialchars($notify_success) ?></span>
        </div>
        <script>
            setTimeout(() => {
                document.querySelector("body .info").setAttribute("hidden", "true")
            }, 2000);
        </script>
    <?php endif; ?>

    <?php if($notify_error): ?>
        <div class="info error">
        <span>Error <?php echo htmlspecialchars($notify_error["code"])." : ".htmlspecialchars($notify_error["message"]); ?></span>
        </div>
        <script>
            setTimeout(() => {
                document.querySelector("body .info").setAttribute("hidden", "true")
            }, 2000);
        </script>
    <?php endif; ?>

    <form method="POST" action="traitement.php" name="register">
        <h2>Login</h2>
        <div class="inputBox">
            <label for="id">Username or email</label>
            <input type="text" id="id" placeholder="Identifiant" 
                    name="id" required value=<?php echo ($notify_error)?$notify_error["id"]: ""; ?> >
        </div>
        <div class="inputBox">
            <label for="pwsd">Password</label>
            <input type="password" id="pwsd" placeholder="********" 
                    name="pwsd" required value=<?php echo ($notify_error)?$notify_error["pwsd"]: ""; ?> >
        </div>
        
        <span>You not have a account? <a href="../register/index.php" >Sign up</a></span><br>
        <button type="submit" class=>Login</button>
    </form>
</body>

</html>