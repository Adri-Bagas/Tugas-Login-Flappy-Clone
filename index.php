<?php
    include './function/connect.php';

    session_start();

    if(isset($_SESSION['userid'])) {
        header('Location: game.html');
    };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./src/style.css">

    <script src="./node_modules/animejs/lib/anime.min.js"></script>

    <script src="./node_modules/sweetalert2/dist/sweetalert2.all.js"></script>

    <script src="./node_modules/jquery/dist/jquery.js"></script>

    <link rel="stylesheet" href="./node_modules/sweetalert2/dist/sweetalert2.css">
    
    <title>Obj</title>
</head>
<body>

    <section id="signPart">
        <img src="./src/MineLog.jpg" alt="">
        <p class="ifyou" id="ifSign">Already have an Account? <span class="green-link" onclick="move()">Log In!</span></p>
        <p class="ifyou none" id="ifLog">Don't have an Account? <span class="green-link" onclick="move2()">Sign In!</span></p>
        <div class="card">
        <div id="sign">
            <h1 class="Title">Sign In</h1>
                <form class="form-input">
                    <input class="form" type="text" id="gamertag" name="gamertag" style="display: none;">
                    <p class="label">Fullname :</p>
                    <input class="form" type="text" id="fullname" name="Full">
                    <p class="label">Username :</p>
                    <input class="form" type="text" id="username" name="Username">
                    <p class="label">Password :</p>
                    <input class="form" type="text" id="password" name="Pass">
                    <p class="label">Repeat Password :</p>
                    <input class="form" type="text" id="repass" name="RePass">
                </form>
            <button class="button button-style" onclick="submit()">Sign In!</button>

            <div id="login">

            <form class="loggin">
                <h1 class="Title">Log In</h1>

                <p class="label">Username :</p>

                <input class="form" type="text" id="username2" name="user2">

                <p class="label">Password :</p>
                <input class="form" type="text" id="password2" name="pass2">

            </form>
            <button class="button button-style" onclick="login()">Log In!</button>

            </div>
        </div>
        </div>
    </section>


    <!-- <section>
        <input type="text" id="username">
        <input type="text" id="Email">
        <input type="text" id="Password">
        <input type="text" id="RePass">
        <button onclick="submit()">Submit</button>
    </section> -->
</body>
<script>
    let h = document.getElementById('gamertag')

    setInterval(
        function(){
            h.value = Math.floor(Math.random() * (99999 - 10000) + 10000)
            console.log(h.value)
        },
        1000
    )
</script>
<script src="./src/main.js"></script>
</html>