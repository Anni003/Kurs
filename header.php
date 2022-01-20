<?php
echo'
   <header class="header">
   <div class="container">
       <div class="header_inner">
           <div>
               <a class="header_logo" href="#map">TraVel</a>
           </div>'
?>
<?php
        echo'
           <nav class="nav">
               <a class="nav_link" href="#">' . $nav1 . '</a>
               <a class="nav_link" href="#section">' . $nav2 . '</a>
               <a class="nav_link" href="#section-2">' . $nav3 . '</a>
               <a class="nav_link" href="#cont">' . $nav4 . '</a>
               <form class=nav_link method="LINK" action="login.php">
                    <input type="submit" class="btn-enter" value="' . $auth . '">  
               </form>
           </nav>
       </div>
   </div>
</header>'
?>