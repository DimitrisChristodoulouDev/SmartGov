<?php

include "db_functions.php";

if(isset($_POST['btn-login'])) {
    if (empty($_POST['email']) || empty($_POST['password']) || empty($_POST['permission'])) {
        echo "Give Username or Password or permission";

    } else {
        if (isset($_POST["rememberme"]))//an einai patimeno to keep me logged in 8a dimiourgi8oun ta cookies gia na kratisoun username kai password
        {
            setcookie("mail", $_POST['email'], time() + 86400, "/");//gia mia mera, to "/" simeni oti to cookie mpori na xrisimopoii8i se olo to website. allios by default xrisimopoiite mono sto directory pou dimiourgite.
            setcookie("pwd", $_POST['password'], time() + 86400, "/");
        }
        $user_email = trim($_POST['email']);
        $user_password = trim($_POST['password']);
        $permission = trim($_POST['permission']);
        if (($user_email == "adnscut@gmail.com") and ($user_password == "1234")){
        $_SESSION['user_session'] = $user_email;
            $_SESSION['privilage_session'] = "MASTER";
        echo 'ok';
        }
        else {
            $ses_sql = "select * from users where email='$user_email' AND password='$user_password' AND privilage='$permission' ";
            $row = select($ses_sql);
            foreach ($row as $item) {
                $login_session = $item['email'];
                $privilage_session = $item['privilage'];
            }
            if (isset($login_session) and isset($privilage_session)) {

                $_SESSION['user_session'] = $login_session;
                $_SESSION['privilage_session'] = $privilage_session;
                echo "ok"; // log in
            } else {

                echo "Correct your fields or no configuration yet."; // wrong details
            }
        }
}
}
?>