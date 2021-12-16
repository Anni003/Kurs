<!DOCTYPE html>
<html lang="en">
<?php
    require("head.php");
?>
<header class="header">
    <div class="container">
        <div class="header_inner">
            <div>
                <a class="header_logo" href="#map">TraVel</a>
            </div>
            <nav class="nav">
                <a class="nav_link" href="#">Search</a>
                <a class="nav_link" href="#section">About</a>
                <a class="nav_link" href="#section-2">Service</a>
                <a class="nav_link" href="#cont">Contact</a>
            </nav>
        </div>
    </div>
</header>
<body>
    <div class="intro">
        <div class="container">
            <div class="intro_inner">
                <h1 class="intro-subtitle">Welcom to...</h1>
                <h1 class="intro-title">Moscow</h1>
                    <div class="container">
                        <div class="search-form">
                            <input type="text" class="search-field" placeholder="Введите округ и найдите места для себя...">
                            <form method="LINK" action="search_page.php">
                                <button class="search-btn" >Search</button>
                            </form>
                        </div>
                    </div>
                <a class="btn" href="#section">Learn more</a>
            </div>
        </div>
    </div>

    <section class="section" id="section">
        <div class="container">

            <div class="section_header">
                <h3 class="section_suptitle">New places - new opportunities</h3>
                <h2 class="section_title">About application brief and history</h2>
                <div class="section_text">
                    <p>Устали быть дома и хотите сходить на выходных на прогулку, 
                    но не знаете куда? Данное веб-приложение - всё, что вам нужно. 
                    Этот удивительный путеводитель по памятным местам Москвы оставит
                    много невероятных впечатлений. 
                    </p>
                </div>
            </div>

            <div class="about">
                <div class="about-item">
                    <div class="about_img">
                        <img class="img" src="../New/images/number_1.jpg" alt="">
                    </div>
                    <div class="about_text">Музеи и галереи</div>
                </div>
                <div class="about-item">
                    <div class="about_img">
                        <img class="img" src="../New/images/number_2.jpg" alt="">
                    </div>
                    <div class="about_text">Дворцы и памятники культуры</div>
                </div>
                <div class="about-item">
                    <div class="about_img">
                        <img class="img" src="../New/images/number_3.jpg" alt="">
                    </div>
                    <div class="about_text">Объекты мирового наследия</div>
                </div>
            </div>

        </div>
    </section>

    <div class="statistic">
        <div class="container">
            <div class="stat">
                <div class="stat-item">
                    <div class="stat_count">1987</div>
                    <div class="stat_text">Cultural objects</div>
                </div>
                <div class="stat-item">
                    <div class="stat_count">567</div>
                    <div class="stat_text">Manors and palaces</div>
                </div>
                <div class="stat-item">
                    <div class="stat_count">432</div>
                    <div class="stat_text">Museum and open halls</div>
                </div>
                <div class="stat-item">
                    <div class="stat_count">54</div>
                    <div class="stat_text">Memorable places</div>
                </div>
                <div class="stat-item">
                    <div class="stat_count">553</div>
                    <div class="stat_text">Amazing adventures</div>
                </div>
            </div>
        </div>
    </div>

    <section class="section" id="section-2">
        <div class="container">

            <div class="section_header">
                <h3 class="section_suptitle">Only the newest</h3>
                <h2 class="section_title">About the services that were used</h2>
            </div>

            <div class="services">
                <div class="service-item">
                    <img class="service-icon" src="../New/images/html5.png" alt="">
                    <div class="service-title">HTML</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="service-item">
                    <img class="service-icon" src="../New/images/CSS3_logo.png" alt="">
                    <div class="service-title">CSS</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="service-item">
                    <img class="service-icon" src="../New/images/Figma-1-logo.png" alt="">
                    <div class="service-title">Figma</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
            </div>
            <div class="services">
                <div class="service-item">
                    <img class="service-icon-1" src="../New/images/PHP-logo.png" alt="">
                    <div class="service-title">PHP</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="service-item">
                    <img class="service-icon-1" src="../New/images/PhpMyAdmin_logo.png" alt="">
                    <div class="service-title">phpMyAdmin</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
                <div class="service-item">
                    <img class="service-icon-2" src="../New/images/javascript-logo.png" alt="">
                    <div class="service-title">JavaScript</div>
                    <div class="service-text">Lorem ipsum dolor sit amet, consectetur</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section--map" id="map">
        <div class="container">
            <div class="map">
                <h2 class="map_title">
                    <div><i class="fas fa-map-marker-alt"></i></div>
                    <a href="https://goo.gl/maps/ymPasHA5VcMdABoz9" target="_blank">Посмотреть Москву на карте</a>
                 </h2>
            </div>
        </div>
    </section>

    <section class="section-contact" id="cont">
        <div class="container">
            <div class="cont_header">
                <h3 class="cont_suptitle">We are always in touch</h3>
                <h2 class="cont_title">Contacts</h2>
                <div class="cont_text">
                    <p>Вы можете всегда связаться с нами в любое удобное для вас время. Мы всегда на связи.</p>
                </div>
                <div class="cont-icon">
                    <a href="https://vk.com/id186081125" class="href_cont" target="_blank"><i class="fab fa-vk"></i></a></i>
                    <a href="https://twitter.com" class="href_cont" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="https://ru-ru.facebook.com" class="href_cont" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="https://web.whatsapp.com" class="href_cont" target="_blank"><i class="fas fa-envelope-square"></i></a>
                    <a href="https://github.com/Anni003/Project" class="href_cont" target="_blank"><i class="fab fa-github-square"></i></a>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
    require("footer.php");
?>
</html>