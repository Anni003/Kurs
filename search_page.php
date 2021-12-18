<?php
    $nav1="";
    $nav2="";
    $nav3="Learn more about app";
    $nav4="";

    require("head.php");
    require("header.php");
    require("connectdb.php");

    if (isset($_GET['page'])) {
         $page = isset($_GET['page']) ? $_GET['page']:1;
    }
    else $page=1;
    $limit = 3;
    $from = $limit * ($page - 1);
    
    $result = mysqli_query($connect, "SELECT * FROM Travel LIMIT $from,$limit");
   
?>
<body>
    <div class="intro">
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
                        </div>
                    </div>
                    <?php
                    }
                    $result = mysqli_query($connect, "SELECT COUNT(*) as count FROM Travel");
                    $count = mysqli_fetch_assoc($result)['count'];
                    $pagesCount = ceil($count / $limit);
                    ?>
                </div>
                <div class="pagin">
                     <?php
                        if($page <> 1){
                            $prev = $page - 1;
                            echo "<a class='sss' href=\"?page=$prev\">ᐊ</a>    ";
                        }
                        else echo "<a class='sss-1' href='' disabled>ᐊ</a>    ";
                        print_r($page);
                        if($page <>  $pagesCount){
                            $next = $page + 1;
                            echo "    <a class='sss' href=\"?page=$next\">ᐅ</a> ";
                            }
                        else  echo " <a class='sss-1' href='' disabled>ᐅ</a>    ";
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
<!-- <?php
    require("footer.php");
?> -->
</html>