<?php

session_start();



?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="images/logo3.png">
    <title>مستقبل الذكاء الإصطناعي</title>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&family=Rubik&display=swap" rel="stylesheet">
</head>
<body dir="rtl"> 
    <div class="loader">
        <div class="scan">
            <div class="fingerprint"></div>
            <h3>تحميل...</h3>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- bar styling -->
    <div id="progressbar"></div>
    <audio loop autoplay>
        <source src="images/Glamyan.mp3">
    </audio>
    <div class="hero">
        <video autoplay loop muted plays-inline class="background">
            <source src="videos/video2.mp4" type="video/mp4">
        </video>
    </div>
    <div class="container">
        <div class="navbar">
            <img src="images/logo3.png" class="logo">
            <nav>
                <ul>
                    <li><a href="home2.html">الصفحة الرئيسية</a></li>
                    <li><a href="about.html">من نحن</a></li>
                    <li><a href="English/EnHome2.html">English</a></li>
                </ul>
            </nav>
            <!-- <img src="images/menu.png" class="menu-icon"> -->
        </div>
        <div class="row">
            <div class="col">
                <h1>الذكاء الإصطناعي</h1>
                <p>
                    الذكاء الاصطناعي (AI) هو ثورة تكنولوجية حديثة تؤثر على جميع جوانب حياتنا. ومن خلال تطوير الآلات التي يمكنها التفكير والتعلم والتصرف بشكل مستقل، يتمتع الذكاء الاصطناعي بالقدرة على حل العديد من المشكلات والتحديات التي نواجهها اليوم.
                </p>
            </div>
            <div class="col">
                <div class="card card1" onclick="location='pre-AI.html'">
                    <h5>ما قبل الذكاء الإصطناعي</h5>
                    <p class="card_p">تطور الذكاء الاصطناعي منذ بداياته وحتى يومنا هذا</p>
                </div>
                <div class="card card2" onclick="location='present.html'">
                    <h5>الذكاء الإصطناعي في الوقت الحالي</h5>
                    <p class="card_p">الوضع الحالي للذكاء الاصطناعي وكيف يمكن استخدامه لصالحنا</p>
                </div>
                <div class="card card3" onclick="location='future.html'"> 
                    <h5>مستقبل الذكاء الإصطناعي المتوقع</h5>
                    <p class="card_p">مستقبل الذكاء الاصطناعي وماذا يمكن أن يكون الذكاء الاصطناعي في المستقبل؟</p>
                </div>
                <div class="card card4" onclick="location='program.html'">
                    <h5>مواقع و برامج الذكاء الإصطناعي</h5>
                    <p class="card_p">أمثلة على استخدام الذكاء الاصطناعي وكيفية توظيفه لتلبية احتياجاتك الخاصة</p>
                </div>
            </div>
        </div>

    </div>
    <?php if(isset($_SESSION["user_id"])): ?>
    <?php endif;?>
    <script>
        $(window).on('load',function(){
            $('.loader').fadeOut(1000);
            $('.content').fadeIn(1000);
        });
    </script>
</body>
</html>