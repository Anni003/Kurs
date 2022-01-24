<?php 
   require("session.php");
    $nav1='';
    $nav2='';
    $nav3='';
    $nav4='';
 
    if(isset($user) && $user!=''){
        $auth = 'Выйти';
    }
    else {
        $auth = 'Войти';
    }

    require("head.php");
    require("header.php");
    require("connectdb.php");


    $_SESSION["search"] = $_POST['search'];
    $search = $_SESSION["search"];
    
    $result = mysqli_query($connect, "SELECT * FROM Travel INNER JOIN Images ON Travel.Travel_id=Images.Travel_id WHERE Region LIKE '%$search%'");


   $query = mysqli_query($connect, "SELECT * FROM Users WHERE login='$user'");
   $data = mysqli_fetch_assoc($query);

    if(isset($_POST['comm']))
    {
        mysqli_query($connect,"INSERT INTO Comment SET name='".$_POST["place"]."', content='".$_POST["content"]."', user_id='". $_SESSION["id"]."', user_login='". $_SESSION["login"]."'");
        header("Location: all-comments.php"); exit(); 
    }
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
                            <?php 
                                $_SESSION["Name"]=$travel["Name"];
                                $_SESSION["id"]=$data["id"];
                                $_SESSION["login"]=$data["login"];
                            ?>
                            <div class="information">
                                <?php echo $travel["Status"]; ?>
                            </div>
                         </div>
                        <div class="right-col">
                            <div class="btn-table">
                            <?php if(isset($user) && $user!=''):?> 
                                <a href="#openModal" class="more">Оставить отзыв</a>
                                <div id="openModal" class="modal">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title">Поделитесь своим мнением с другими</h3>
                                                <a href="#close" title="Close" class="close">×</a>
                                            </div>
                                            <div class="modal-body">    
                                                <form method="post">
                                                <div class="sign-form">
                                                    <input class="sing-inp_comm" type="text" name="place" id="place" placeholder="Введите название места..."><br>
                                                    <textarea class="sing-inp_comm" type="text" name="content" id="content-comm" placeholder="Введите отзыв..." required></textarea>
                                                </div>
                                                <div class="input">
                                                    <input class="btn-2" name="comm" type="submit" value="Оставить отзыв">
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endif;?>                
                            </div>
                            <div style="width: 430px; height: 100px; margin-top: 5px;">
                                <?php echo $travel["Image"]; ?>
                            </div>
                                <div class="information-1">
                                    <?php echo $travel["Region"];?><br>
                                    <?php echo $travel["Address"];?>
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