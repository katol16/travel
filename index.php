

<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <title>Hikers</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/styles/screen.css" media="screen">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <header>
            <nav class="menu navbar navbar-default">
                <div class="container fill">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="menuCollapse collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="menuCollapse__list nav navbar-nav">
                            <li class="menuCollapse__listItem"><a href="index.php" class="menuCollapse__listLink menuCollapse__listLink--active">Strona główna</a></li>
                            <li class="menuCollapse__listItem"><a class="menuCollapse__listLink" href="#">O nas</a></li>
                            <li class="menuCollapse__listItem"><a href="gallery.html" class="menuCollapse__listLink">Galeria</a></li>
                            <li class="menuCollapse__listItem"><a class="menuCollapse__listLink" href="#">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                <h1 class="col-xs-12 header__title">
                    Hikers
                </h1>             
            </div>
        </header>

        <main>
            <div class="row">
                <div class="postContainer col-xs-12 col-lg-10">
                    <?php
                        session_start();
                        $post_connection = mysqli_connect('localhost', 'root', '', 'Hikers');
                        mysqli_set_charset($post_connection,"utf8");
                        
                        if (!$post_connection) {
                            die("connection failed: ".mysqli_connect_error());
                        } 

                        $query="SELECT * FROM posts";
                        $results = mysqli_query($post_connection, $query);

                        while ($row = mysqli_fetch_array($results)) {          
                           
                                ?>
                                <div class="col-xs-12 postBox">
                                    <div class="col-xs-12 col-sm-7 postBox__left" style="background-image: url(assets/images/<?php echo $row['bg_image_name'] ?>)">
                                        <h2 class="postBox__country">
                                            <?php echo $row['country'] ?>
                                        </h2>
                                    </div>
                                    <div class="col-xs-12 col-sm-5 postBox__right">
                                        <h2 class="postBox__title">
                                            <?php echo $row['title'] ?>
                                        </h2>
                                        <p class="postBox__txt">
                                            <?php echo $row['post'] ?>
                                        </p>
                                        <form action="post.php" method="POST">
                                        <input hidden type="text" name="bg_image_name" value="<?php echo $row['bg_image_name'] ?>"/> 
                                            <input hidden type="text" name="country" value="<?php echo $row['country'] ?>"/> 
                                            <input hidden type="text" name="title" value="<?php echo $row['title'] ?>"/> 
                                            <input hidden type="text" name="post_all" value="<?php echo $row['post_all'] ?>"/> 
                                            <a class="postBox__link" target="_blank">
                                                <button class="postBox__btn">
                                                   Przeczytaj więcej <i class="fa fa-angle-right"></i>
                                                </button>
                                            </a>
                                        </form>
                                        <button class="postBox__likeBtn">
                                            <i class="far fa-thumbs-up"></i>&nbsp; 18 polubień
                                        </button>
                                        <a class="postBox__commentLink" target="_blank">
                                            <button class="postBox__commentBtn">
                                                <i class="far fa-comment-dots"></i>&nbsp; 7 komentarzy
                                            </button>
                                        </a>
                                    </div>
                                </div>

                            <?php
                            
                        }
                    ?>                   
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2 socialMedia socialMedia--mainSite">
                    <h3 class="socialMedia__title">
                        Media społecznościowe
                    </h3>
                    <div class="socialMedia__icons">
                        <i class="fa fa-fb menuIcon">&#xf09a;</i>
                        <i class="fa fa-instagram menuIcon menuIcon--instagram"></i>
                    </div>
                    <h3 class="socialMedia__popular">
                        Najpopularniejsze artykuły
                    </h3>
                    <ul class="socialMedia__list">
                        <li class="socialMedia__listItem">
                            Kaj Ty leziesz...?
                            <span class="socialMedia__listItemDate">
                                21.11.2017
                            </span>
                        </li>
                        <li class="socialMedia__listItem">
                            Co to k**wa jest!
                            <span class="socialMedia__listItemDate">
                                21.11.2017
                            </span>
                        </li>
                        <li class="socialMedia__listItem">
                            Kanary, dwa byki i dolary
                            <span class="socialMedia__listItemDate">
                                21.11.2017
                            </span>                           
                        </li>
                    </ul>
                </div>
            </div>
        </main>

        <footer>
            <div class="row row-footer">
                <ul class="footerList">
                    <li class="footerList__item">
                        <a class="footerList__itemTxt">Z ryjem po świecie</a>
                    </li>
                    <li class="footerList__item">
                        <i class="fa fa-fb">&#xf09a; </i>
                    </li>
                    <li class="footerList__item">
                        <i class="fa fa-instagram"></i>
                    </li>
                </ul>
                <ul class="footerList footerList--right">
                    <li class="footerList__item">
                        Kontakt
                    </li>
                    <li class="footerList__item">
                        <i class="far fa-envelope"></i>
                    </li>
                    <li class="footerList__item footerList__item--bold">
                        hikers@gmail.com
                    </li>
                </ul>
            </div>
        </footer>


        <script src="assets/scripts/jquery-3.2.1.min.js"></script>
        <script src="assets/scripts/bootstrap.js"></script> 
        <script type="text/javascript" src="assets/scripts/main.js"></script>

    </body>

</html>
