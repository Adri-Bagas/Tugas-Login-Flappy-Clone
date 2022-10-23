<?php
    include './connect.php';

    date_default_timezone_set("Asia/Bangkok");

    $time = date("Y-m-d");

    $id = $_POST['gamertag'];

    $nama = $_POST['Full'];
    $username = $_POST['Username'];
    $pwd = $_POST['Pass'];
    $pwdre =$_POST['RePass'];

    $sqle = "SELECT * FROM users WHERE UserName = '$username'";
    $querye = mysqli_query($connect, $sqle);

    if (mysqli_num_rows($querye) > 0) {
        echo "Email already Exist in the server!";
        exit;
    }


    $pwdHash = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `users`(`idUser`, `userFullname`, `userName`, `userPassword`, `Joined`) VALUES ('$id','$nama','$username','$pwdHash','$time')";

    $query = mysqli_query($connect, $sql);

    echo "You Have Been Registered!";
    exit;
?>