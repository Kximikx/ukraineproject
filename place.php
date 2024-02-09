<?php
    include ('conf.php');
    include ('function.php');
    $place_id=$_GET['place_id'];
    if (!is_numeric($place_id)) exit();
    $place=get_place_by_id($place_id);
?>
<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Гусятинська синагога</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <section class="place_header">
        <div class="container">
            <nav>
                <img src="img/account.png" alt="account">
                <img src="img/logo.png" alt="Logo">
                    <ul class="main_menu">
                        <li><a href="#header">Головна</a></li>
                        <li><a href="#info">Про проєкт</a></li>
                        <li><a href="#places">Місця</a></li>
                        <li><a href="#gallery">Галерея</a></li>
                        <li><a href="#footer">Контакти</a></li>
                    </ul>
                </nav>
        </div>
        <div class="place_offer">
            <div class="container">
            <h1><?=$place['title']?></h1>
            <p><?= $place['description'] ?></p>
            <a href="#coment" class="btn">Залишити вігук </a>
            </div>
        </div>
    </section>
    <div class="background">
        <img src="<?=$place['fon']?>" alt="Головний фон">
    </div> 
    <section class="about_place">
        <div class="container">
        <main>
            <div class="content">
                <ul class="tabs">
                        <li><a href="#tab_01" class="tabs__item">Історія</a></li>
                        <li><a href="#tab_02" class="tabs__item">Галерея</a></li>
                        <li><a href="#tab_03" class="tabs__item">Відгуки</a></li>
                        <li><a href="#tab_04" class="tabs__item">Локації</a></li>
                </ul>
                    <div class="tabs__body">
                        <div id="tab_01" class="tabs__block">
                            <img class="tabs_img" src="<?=$place['img']?>" alt="Синагога">
                         <p>"<?=$place['article']?>"</p>   
                        </div>
                        <div id="tab_01" class="tabs__block">
                            </div>
                           <div id="tab_01" class="tabs__block">
                           </div>

                    </div>
                

            </div>   
        </main>
        </div>
    </section>
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer_nav">
                <div class="footer_logo">
                    <img src="img/logo.png" alt="Logo">
                    <div>
                        <span>Гусятинщина</span>
                        <span>туристична</span>
                    </div>   
                </div>
    
                <ul class="footer_menu">
                    <li><a href="#">Головна</a></li>
                    <li><a href="#info">Про проєкт</a></li>
                    <li><a href="#places">Місця</a></li>
                    <li><a href="#gallery">Галерея</a></li>
                    <li><a href="#footer">Контакти</a></li>
                </ul>
                <div class="kontakt">
                    <p>Контакти</p>
                    <p>gusiatyntravel@gmail.com</p>
                    <p>+38 (066) 405 25 88</p>
                    <p>+38 (068) 385 33 71</p>
                </div>
            </div>
            <ul class="social">
                <li><a href="https://www.instagram.com/kximikx/" target="_blank"></a><i class="fa-brands fa-instagram"></i></li>
                <li><a href="#"></a><i class="fa-brands fa-youtube"></i></li>
                <li><a href="#"></a><i class="fa-brands fa-square-facebook"></i></li>                      
            </ul>
             <div class="rights">  
            <p>Усі права захищено 2023 | Розробка Юрій Мушій</p>
            </div>    
            </div>
     </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="js/slick.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>