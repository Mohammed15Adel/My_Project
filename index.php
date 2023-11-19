<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'", 
                    $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();

    if ($user) {
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();

            $_SESSION["user_id"] = $user["id"];

            header("Location: session.php");
            exit;
        }
    }
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/logo3.png">
    <title>مستقبل الذكاء الإصطناعي</title>
    <link rel="stylesheet" href="index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&family=Rubik&display=swap" rel="stylesheet">
</head>

<body dir="rtl">
    <!-- bar styling -->
    <div id="progressbar"></div>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script type="text/javascript">
        $(window).scroll(function () {
            var scroll = $(window).scrollTop(),
                dh = $(document).height()
            wh = $(window).height()
            scrollPrecent = (scroll / (dh - wh)) * 100;
            $('#progressbar').css('height', scrollPrecent + '%');
        })
    </script>
    <audio loop autoplay>
        <source src="images/Glamyan.mp3">
    </audio>
    <div class="hero">
        <video autoplay loop muted plays-inline class="background">
            <source src="videos/video2.mp4" type="video/mp4">
        </video>
    </div>
    <!-- Start Nav Bar -->

    <div class="container">
        <div class="navbar">
            <img src="images/logo3.png" class="logo">
            <nav>
                <ul>
                    <li><a href="#">الصفحة الرئيسية</a></li>
                    <li><a href="about.html">من نحن</a></li>
                    <li><a href="English/ENIndex.html">English</a></li>
                </ul>
            </nav>
            <!-- <img src="images/menu.png" class="menu-icon"> -->
        </div>

        <!-- End Nav Bar -->
        <section>
            <div class="login-box">
                <form method="POST">
                    <h2>تسجيل الدخول</h2>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                        <input type="password" id="password" name="password" >
                        <label for="password">كلمة المرور</label>
                    </div>
                    <button type="submit">دخول</button>
                    <div class="register-link">
                        <p>لا تمتلك حساب&ThinSpace;<a href="signup.html">إنشاء حساب </a></p>
                    </div>
                </form>
            </div>
        </section>
    </div>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>