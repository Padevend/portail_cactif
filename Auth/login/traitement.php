<?php
    error_reporting(0);
    ini_set("display_errors", 0);
    
    session_start();

    //funcion de renvoi d'erreur
    function Error($code, $message){
        $_SESSION["error"] = [
            "code"=> $code,
            "message"=> $message,
            "id"=>$_POST["id"],
            "pwsd"=>$_POST["pwsd"]
        ];

        header("location: index.php");
        exit();
    };

    //funvtion de redirection vars la page de regiset
    function Login_check($user){
        $_SESSION["user"] = $user;
        header("location: ../../index.php");
        exit();
    }

    //Donne de l'ustilisateur
    $identifiant = htmlspecialchars($_POST["id"]);
    $pwsd = htmlspecialchars($_POST["pwsd"]);

    //donnees de liaison a la base de donnes
    $DB_SERVER = "127.0.0.1";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    $DB_NAME = "gi_user";

    $conn = new mysqli($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);
    //verification de la connexion
    if($conn->connect_error){
        Error(1001, "Error");
    }

    //selection de l'utilisateur dans la base
    $sql = "SELECT * FROM user WHERE name='$identifiant' OR email='$identifiant'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        while($ligne = $result->fetch_assoc()){
            $password_is_correct = password_verify($pwsd, $ligne["password"]);
            if ($password_is_correct) {
                Login_check($ligne);
            } else {
                Error(1005, "Password is incorrect");
            }
            
        }
    }else{
        Error(1004, "this user is not exits");
    }
        
    

?>