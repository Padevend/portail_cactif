<?php
    error_reporting(0);
    ini_set("display_errors", 0);
    
    session_start();

    $notify_error = $_SESSION["status"] ?? ""; //recupere la var status stocke dans a sesion active
    unset($_SESSION["status"]); //supreesion du staus apres affichage
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../style/index.css">
    <title>register</title>
</head>
<body>
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
        <h2>Sign Up</h2>
        <div class="inputBox">
            <label for="name">Username</label>
            <input type="text" id="name" placeholder="John Doe" 
                    name="name" required value=<?php echo ($notify_error)?$notify_error["name"]: ""; ?> >
        </div>
        <div class="inputBox">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="xyz@example.com" 
                    name="email" required value=<?php echo ($notify_error)?$notify_error["email"]: ""; ?> >
        </div>
        <div class="inputBox">
            <label for="pwsd">Password</label>
            <input type="password" id="pwsd" placeholder="********" 
                    name="pwsd" required value=<?php echo ($notify_error)?$notify_error["pwsd"]: ""; ?> >
        </div>
        <div class="inputBox">
            <label for="pwsd-c">Confirm password</label>
            <input type="password" id="pwsd-c" placeholder="********" 
                    name="pwsd-c"  required value=<?php echo ($notify_error)?$notify_error["pwsd_c"]: ""; ?> >
        </div>
        
        <span>Already have account? <a href="../login/index.php">Login</a></span><br>
        <button type="submit">login</button>
    </form>
</body>
</html>