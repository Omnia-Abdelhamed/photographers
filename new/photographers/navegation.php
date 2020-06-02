      <!--navigation-->
    <div class="top-nav">
        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                   </button>
                    <br>
                    <h2><a  style="visibility: visible; -webkit-animation-delay: .5s;">مبدعي التصوير </a></h2>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-left">
                        <?php

                            if (isset($_SESSION['photographer_id'])) { ?>
                                <li class="hvr-bounce-to-bottom"><a href="logout.php"> تسجيل خروج </a></li>
                                <li class="hvr-bounce-to-bottom"><a href="register.php"> حسابى </a></li>
                                
                            <?php }else{?>
                            <li class="hvr-bounce-to-bottom"><a href="register.php">انشاء حساب </a></li>

                           <?php }
                        ?>

                        <li class="hvr-bounce-to-bottom"><a href="photo_session.php">اماكن التصوير</a></li>
                         <li class="hvr-bounce-to-bottom"><a href="photographers.php">المصورين</a></li>

                        <li class="hvr-bounce-to-bottom"><a href="index.php">الرئيسية</a></li>
                    </ul>   
                    <div class="clearfix"> </div>
                </div>
            </div>  
        </nav>      
    </div>  
    <!--/navigation--> 