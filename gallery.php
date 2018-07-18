<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Hikers</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/styles/screen.css" media="screen">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="galleryBody">
        
        <header class="post">
            <nav class="menu menu--post navbar navbar-default">
                <div class="container fill">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="menuCollapse menuCollapse--left collapse navbar-collapse" id="navbar-collapse-1">
                        <ul class="menuCollapse__list nav navbar-nav">
                            <li class="menuCollapse__listItem"><a class="menuCollapse__listLink menuCollapse__listLink--first" href="index.php">Z Ryjem po świecie</a></li>
                            <li class="menuCollapse__listItem"><a href="index.php" class="menuCollapse__listLink menuCollapse__listLink">Strona główna</a></li>
                            <li class="menuCollapse__listItem"><a class="menuCollapse__listLink" href="#">O nas</a></li>
                            <li class="menuCollapse__listItem"><a href="gallery.php" class="menuCollapse__listLink">Galeria</a></li>
                            <li class="menuCollapse__listItem"><a class="menuCollapse__listLink" href="#">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
           
        </header>

        <main>
            <div class="row">
                <div class="col-xs-12 col-sm-9 col-lg-10 postBox postBox__galleryContainer">
                    <h2 class="galleryHeader">
                        Galeria
                    </h2>
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
                                    <div id="<?php echo $row['country'] ?>" style="background-image: url(assets/images/<?php echo $row['bg_image_name'] ?>)" class="col-xs-6 col-sm-4 col-lg-3 postBox--gallery">
                                        <div>
                                            <h2 class="postBox__country postBox__country--gallery">
                                                <?php echo $row['country'] ?>
                                            </h2>
                                            <div class="postBox__galleryTxt">
                                                <?php echo $row['title'] ?>
                                            </div>
                                        </div>
                                    </div>
                            <?php
                            
                        }
                    ?>                                          
                </div>
                <div class="col-xs-12 col-sm-3 col-lg-2 socialMedia">
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
            <div class="push"></div>
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
                        zryjemposwiecie@gmail.com
                    </li>
                </ul>
            </div>
        </footer>

        <aside>
            <i class="fas fa-times"></i>
            <i class="fa fa-angle-left arrow-left"></i>
            <img class="galleryImg">
            <i class="fa fa-angle-right arrow-right"></i>
        </aside>

        <script src="assets/scripts/jquery-3.2.1.min.js"></script>
        <script src="assets/scripts/bootstrap.js"></script> 
        <script type="text/javascript" src="assets/scripts/main.js"></script>

    </body>

</html>
