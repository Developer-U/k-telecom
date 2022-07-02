<?php ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" >   
 
    <link rel="shortcut icon" href="/wp-content/themes/k-telecom/images/favicon-k.ico">    
    
    <title>К-телеком тестовое</title>

    <?php wp_head(); ?>
</head>
    <body>
    <?php ?>
        <header class="header">
            <div class="container header__contain">
                <a href="/" class="header__logo">
                    <img class="header__img" src="/wp-content/themes/k-telecom/images/logo.svg" alt="Логотип">                
                </a>

                <nav id="menu" class="menu header__menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <a class="menu__link" href="#">для дома</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">для офиса</a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__link" href="#">для операторов связи</a>
                        </li>                   
                    </ul>                    
                </nav> 

                <button id="burger" class="burger" aria-label="Открыть меню">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </header>
    <?php  ?>