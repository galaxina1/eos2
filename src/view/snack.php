<?php

?>

<header>
    <div class="bloc">
        <h2>Snack</h2>
        <h3>Fonds de commerces</h3>
    </div>
</header>

<section>
    <div class="section">
        <!-- CENTRE EN GRIS -->
        <div class="beforePage">
            <div class="page" id="page">


                <div class="blocCentre" id="blocCentre">
                    <?php if (!isset($_GET['id']) && !isset($showAlaUne)) { ?>

                        <?php for ($i = 0; $i < count($showSnack); $i++) { ?>



                            <a href="snack-<?php echo $showSnack[$i][2]; ?>-<?php echo $showSnack[$i][0]; ?>">
                                <p class="parag2"><?php echo $showSnack[$i][4]; ?></p>
                            </a>
                            <p id="texteAnnonces">

                                <?php
                                echo $showSnack[$i][4]; ?><br /><br />
                                Prix : <?php echo number_format($showSnack[$i][1], 0, ',', ' '); ?> €
                            </p>

                    <?php }
                    } ?>

                    <!-- DETAILS ------------------------------------------------------- -->

                    <div id="detailsH">
                        <?php if (isset($showDetails)) {
                            include(__DIR__ . "./../view/include/details.php"); ?>

                            <div class="bottom">
                                <img src="src/public/picture/site/facebook.png" alt="facebook">
                                <img src="src/public/picture/site/google.png" alt="google">
                                <img src="src/public/picture/site/linkedin.png" alt="linkedin">
                                <img src="src/public/picture/site/twitter.png" alt="twitter">
                                <!-- <img src="src/public/picture/mail.png" alt="mail"> -->
                                <a href="javascript:window.open('mailto:?subject=Un bon lien à visiter&body=Salut ! j\'ai trouvé cette annonce pour toi : index.php?page=snack Bonne journée.')"> <img src="src/public/picture/site/mail.png" alt="mail"></a>
                                <a href="javascript:window.print()"><img src="src/public/picture/site/imprimer.png" alt="imprimer"></a>
                                <!-- <img src="src/public/picture/imprimer.png" alt="imprimer"> -->
                                <?php if (isset($_SESSION['name']) && !isset($_SESSION['admin'])) { ?>
                                    <a href="snack-fav-5-<?php echo $showDetails[0]; ?>"> <img src="src/public/picture/site/like.png" alt="like" class="like"></a>
                                <?php } else { ?> <img src="src/public/picture/site/like.png" alt="like" class="like"> <?php } ?>


                            </div>

                        <?php } ?>
                        <!--  A LA UNE----------------------------------------- -->
                        <?php if (isset($showAlaUne) && !empty($showAlaUne)) {
                            include(__DIR__ . "./../view/include/spotlight.php"); ?>

                            <div class="bottom">
                                <!-- FACEBOOK -->
                                <img src="src/public/picture/site/facebook.png" alt="facebook">


                                <head>
                                    <title>Your Website Title</title>
                                    <!-- You can use Open Graph tags to customize link previews.
Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
                                    <meta property="og:url" content="localhost:8888/EOS/accueil" />
                                    <meta property="og:type" content="website" />
                                    <meta property="og:title" content="Your Website Title" />
                                    <meta property="og:description" content="Your description" />
                                    <meta property="og:image" content="https://www.your-domain.com/path/image.jpg" />
                                </head>

                                <body>

                                    <!-- Load Facebook SDK for JavaScript -->
                                    <div id="fb-root"></div>
                                    <script>
                                        (function(d, s, id) {
                                            var js, fjs = d.getElementsByTagName(s)[0];
                                            if (d.getElementById(id)) return;
                                            js = d.createElement(s);
                                            js.id = id;
                                            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
                                            fjs.parentNode.insertBefore(js, fjs);
                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>

                                    <!-- Your share button code -->
                                    <div class="fb-share-button" data-href="localhost:8888/EOS/accueil" data-layout="button_count">
                                    </div>

                                </body>


                                <!-- -------------------------------------------------- -->
                                <img src="src/public/picture/site/google.png" alt="google">
                                <img src="src/public/picture/site/linkedin.png" alt="linkedin">
                                <img src="src/public/picture/site/twitter.png" alt="twitter">
                                <!-- <img src="src/public/picture/mail.png" alt="mail"> -->
                                <a href="javascript:window.open('mailto:?subject=Un bon lien à visiter&body=Salut ! j\'ai trouvé cette annonce pour toi : index.php?page=snack Bonne journée.')"> <img src="src/public/picture/site/mail.png" alt="mail"></a>
                                <a href="javascript:window.print()"><img src="src/public/picture/site/imprimer.png" alt="imprimer"></a>
                                <!-- <img src="src/public/picture/imprimer.png" alt="imprimer"> -->
                                <?php if (isset($_SESSION['name']) && !isset($_SESSION['admin'])) { ?>
                                    <a href="snack-fav-5-<?php echo $showAlaUne[0]; ?>"> <img src="src/public/picture/site/like.png" alt="like" class="like"></a>
                                <?php } else { ?> <img src="src/public/picture/site/like.png" alt="like" class="like"> <?php } ?>

                                <!-- <p>hjhkjh</p> -->
                            </div>

                        <?php } else if (isset($showAlaUne) && empty($showAlaUne)) {
                            echo "Il n'y a pas de " . $_GET['page'] . " à la Une";
                        } ?>



                        <!-- ----------------------------------------- -->
                    </div>

                </div>
            </div>
        </div>