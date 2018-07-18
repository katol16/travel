
<?php 

    if (!isset($_POST['country'])) {
        header("Location: index.php");
    }

?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Travel</title>
        <meta name="description" content="">
        <meta name="keywords" content="">

        <link rel="stylesheet" type="text/css" href="assets/styles/bootstrap.css" media="screen">
        <link rel="stylesheet" type="text/css" href="assets/styles/screen.css" media="screen">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="postBody">

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
                            <li class="menuCollapse__listItem"><a href="index.php" class="menuCollapse__listLink menuCollapse__listLink--first" href="#">Z Ryjem po świecie</a></li>
                            <li class="menuCollapse__listItem"><a href="index.php" class="menuCollapse__listLink menuCollapse__listLink">Strona główna</a></li>
                            <li class="menuCollapse__listItem"><a class="menuCollapse__listLink" href="#">O nas</a></li>
                            <li class="menuCollapse__listItem"><a href="gallery.php"  class="menuCollapse__listLink">Galeria</a></li>
                            <li class="menuCollapse__listItem"><a class="menuCollapse__listLink" href="#">Kontakt</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
           
        </header>

        <main>
            <div class="row">
                <div id="<?php $country = $_POST['country']; echo $country; ?>" class="col-xs-12 col-md-3 galleryBox">
                    <div style="background-image: url(posts/<?php $country = $_POST['country']; echo $country; ?>/1.jpg);" id="1" class="col-xs-3 col-sm-3 col-md-6 galleryBox__img"></div>
                    <div style="background-image: url(posts/<?php $country = $_POST['country']; echo $country; ?>/2.jpg);" id="2" class="col-xs-3 col-sm-3 col-md-6 galleryBox__img"></div>
                    <div style="background-image: url(posts/<?php $country = $_POST['country']; echo $country; ?>/3.jpg);" id="3" class="col-xs-3 col-sm-3 col-md-6 galleryBox__img"></div>
                    <div style="background-image: url(posts/<?php $country = $_POST['country']; echo $country; ?>/4.jpg);" id="4" class="col-xs-3 col-sm-3 col-md-6 galleryBox__img"></div>
                    <div style="background-image: url(posts/<?php $country = $_POST['country']; echo $country; ?>/5.jpg);" id="5" class="col-xs-3 col-sm-3 col-md-6 galleryBox__img"></div>
                    <div style="background-image: url(posts/<?php $country = $_POST['country']; echo $country; ?>/6.jpg);" id="6" class="col-xs-3 col-sm-3 col-md-6 galleryBox__img"></div>
                    <div style="background-image: url(posts/<?php $country = $_POST['country']; echo $country; ?>/7.jpg);" id="7" class="col-xs-3 col-sm-3 col-md-6 galleryBox__img"></div>
                    <div style="background-image: url(posts/<?php $country = $_POST['country']; echo $country; ?>/8.jpg);" id="8" class="col-xs-3 col-sm-3 col-md-6 galleryBox__img"></div>
                </div>
                <div class="col-xs-12 col-sm-9 col-md-7 postBox">
                    <div style="background-image: url(assets/images/<?php $bg_image_name = $_POST['bg_image_name'];
 echo $bg_image_name; ?>)" class="postHeader">
                        <h2 class="postBox__country">
                            <?php 
                                $country = $_POST['country'];
                                echo $country;
                            ?> 
                        </h2>
                    </div>
                    <h2 class="postBox__title">
                        <?php 
                            $title = $_POST['title'];
                            echo $title;
                        ?>  
                    </h2>
                    <p class="postBox__txt">
                        <?php 
                            $post_all = $_POST['post_all'];
                            echo $post_all;
                        ?>   
                    </p>                
                    <button class="galleryBox__btn">
<!--                         ten przycisk chyba trzeba przy jakiejś rozdzielczości wstawić w postBox -->
                        Zobacz galerię
                    </button>
                    <div class="col-xs-12 author">
                        autor: <span class="author__name">Przemysław Szczerba</span>
                    </div>
                    <div class="col-xs-12 bigFont">
                        Zobacz rownież
                    </div>
                    <div class="col-xs-12 morePosts">
                        <div class="col-xs-4 morePosts__post"></div>
                        <div class="col-xs-4 morePosts__post"></div>
                        <div class="col-xs-4 morePosts__post"></div>
                    </div>
                    <div class="col-xs-12 bigFont">
                        Komentarze
                    </div>
                    <p class="postBox__txt postBox__txt--login">
                        Zaloguj się za pomocą<i class="fa fa-fb menuIcon">&#xf09a;</i>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-2 socialMedia">
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
