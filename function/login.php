<?php
    include 'connect.php';

    $user2 = $_POST['user2'];
    $pass = $_POST['pass2'];

    $sqle = "SELECT * FROM users WHERE userName = '$user2'";
    $querye = mysqli_query($connect, $sqle);

    if ($data = mysqli_fetch_assoc($querye)) {
        $pwdHashed = $data['userPassword'];

        $checkpwd = password_verify($pass, $pwdHashed);

        if ($checkpwd === false) {
            echo "Wrong Password!";
            exit;
        }elseif ($checkpwd === true) {
            session_start();
            $_SESSION["userid"] = $data['idUser'];
            $_SESSION["UserName"] = $data['userName'];
            echo "Login-ed!";
        }


    }else{
        echo 'Account is missing!';
    }
?>
