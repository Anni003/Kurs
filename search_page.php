<?php
    $nav1='';
    $nav2='';
    $nav3='';
    $nav4='';

    if (isset($_SESSION["user"])){
        $auth='Выйти';
     }
     else $auth='Войти';


    require("head.php");
    require("header.php");
    require("connectdb.php");
    
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
        $result = mysqli_query($connect, "SELECT * FROM Travel WHERE Region LIKE '%$search%'");
    }
    else $result = mysqli_query($connect, "SELECT * FROM Travel");
   
?>
<body id="search-intro">
    <div class="intro-1">
        <div class="container">
            <div class="intro_inner">
                <div class="container">
                    <p class="info-text">Result</p>
                    <?php
                    while ($travel = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="table">
                        <div class="left-col">
                            <div class="title">
                            <?php echo $travel["Name"]; ?>
                            </div>
                            <div class="information">
                            <?php echo $travel["Status"]; ?>
                            </div>
                         </div>
                        <div class="right-col">
                            <div class="btn-table">
                                <form method="LINK" action="index.php">
                                    <button class="more">Подробнее</button>
                                </form>
                            </div>
                            <div class="map-table">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14144.122619249387!2d37.69155493732822!3d55.78105603653528!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b53572a0c77ddf%3A0x129e57fa4f32a530!2z0JbQuNC70L7QuSDQtNC-0LwgWElYINCy0LXQutCw!5e0!3m2!1sru!2sru!4v1639638303955!5m2!1sru!2sru" width="430" height="100" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                            <div class="information-1">
                            <?php echo $travel["Region"]; ?>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="button-inner">     
                     <form method="LINK" action="index.php">
                            <button class="btn-1">На главную</button>
                     </form>
                </div>  
            </div>
        </div>
    </div>
</body>
</html>