
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/normalize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/swiper.js"></script>

    <?php wp_head(); ?>
</head>

<body>

    <header>
        <h2 class="header_title"><a href="<?php echo home_url(); ?>">宮崎キャリアデザインスクール</a></h2>

        <div class="grobal_navi">
            <div class="change_wrapper">
                <ul>
                    <li><a href="<?php echo home_url(); ?>/feature">当校の特徴</a></li>
                    <li><a href="<?php echo home_url(); ?>/lessons">授業紹介</a></li>
                    <li><a href="<?php echo home_url(); ?>/outcome">受講生の成果</a></li>
                </ul>
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </header>