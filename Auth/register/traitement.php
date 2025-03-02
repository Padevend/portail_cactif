<?php
    session_start();
    error_reporting(0);
    ini_set("display_errors", 0);

    //funcion de renvoi d'erreur
    function Error($code, $message){
        
        $_SESSION["status"] = [
            "code"=> $code,
            "message"=>$message,
            "name"=>$_POST["name"],
            "email"=>$_POST["email"],
            "pwsd"=>$_POST["pwsd"],
            "pwsd_c"=>$_POST["pwsd-c"]
        ];

        header("location: index.php");
        exit();
    };

    //funvtion de redirection vars la page de regiset
    function Login(){
        $_SESSION["status"] = "Your account as created";
        header("location: ../login/index.php");
        exit();
    }

    //Donne de l'ustilisateur
    $username = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $pwsd = htmlspecialchars($_POST["pwsd"]);
    $confirm_password = htmlspecialchars($_POST["pwsd-c"]);

    //donnees de liaison a la base de donnes
    $DB_SERVER = "127.0.0.1";
    $DB_USER = "root";
    $DB_PASSWORD = "";
    $DB_NAME = "gi_user";
    $is_confirm = true;
    $pass_length_checked = true;

    if(strlen($pwsd)<8){
        Error(1003, "the password is too short");
    }else{
        if ($pwsd===$confirm_password) {
            $is_confirm = true;
            //$_SESSION["status"] = "Votre a ete creez avec success" : "error lors de la creation du compte" ;
        } else {
            Error(1000, "confirm password fields is incorrect");
        }
    }

    //connexion a la base de donne avec la methose mysqli
    if($is_confirm && $pass_length_checked){ //verified si les mot de passe sont confimer
        $conn = new mysqli($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);
        //verification de la connexion
        if($conn->connect_error){
            Error(1001, "error when creating account");
        }

        //insetion des donnes dans la bd
        $hash_pwsd = password_hash($pwsd, PASSWORD_DEFAULT); // hashage du mot de passe
        $sql = "INSERT INTO user (name, email, password) VALUES ('$username','$email','$hash_pwsd')";
        try {
            $conn->query($sql);
            Login();
        } catch (\Throwable $th) {
            Error(1002, "This user already exist");
        }
        
    }

?>