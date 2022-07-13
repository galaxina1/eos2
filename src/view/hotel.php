<?php
// var_dump($showDetails);

// var_dump($showAlaUne);
// var_dump($showDetails);
// var_dump($showFavoris);
// for ($i=0; $i < count($showFavoris); $i++) { 
//   echo $showFavoris[$i][7];
// }
?>

<header>
    <div class="bloc">
        <h2>Hôtel</h2>
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

                        <?php for ($i = 0; $i < count($showHotel); $i++) { ?>

                            <a href="hotel-<?php echo $showHotel[$i][2]; ?>-<?php echo $showHotel[$i][0]; ?>">
                                <p class="parag2"><?php echo $showHotel[$i][4]; ?></p>
                            </a>
                            <p id="texteAnnonces">

                                <?php
                                echo $showHotel[$i][4]; ?><br /><br />
                                Prix : <?php echo number_format($showHotel[$i][1], 0, ',', ' '); ?> €
                            </p>

                    <?php }
                    } ?>

                    <!-- DETAILS ------------------------------------------------------- -->
                    <!-- INCLUDE DETAILS -->
                    <div id="detailsH">
                        <?php if (isset($showDetails)) {
                            include(__DIR__ . "./../view/include/details.php"); ?>

                            <!-- -------------------------------------------------------------- -->
                            <div class="bottom">
                                <img src="src/public/picture/site/facebook.png" alt="facebook">
                                <img src="src/public/picture/site/google.png" alt="google">
                                <img src="src/public/picture/site/linkedin.png" alt="linkedin">
                                <img src="src/public/picture/site/twitter.png" alt="twitter">
                                
                                <a href="javascript:window.open('mailto:?subject=Un bon lien à visiter&body=Salut ! j\'ai trouvé cette annonce pour toi : index.php?page=hotel Bonne journée.')"> <img src="src/public/picture/site/mail.png" alt="mail"></a>

                                <a href="javascript:window.print()"><img src="src/public/picture/site/imprimer.png" alt="imprimer"></a>
                                <!-- ------------------------------------------- -->
                                <?php if (isset($_SESSION['name']) && !isset($_SESSION['admin'])) { ?>
                                    <a href="hotel-fav-1-<?php echo $showDetails[0]; ?>"> <img src="src/public/picture/site/like.png" alt="like" class="like"></a>
                                <?php } else { ?> <img src="src/public/picture/site/like.png" alt="like" class="like"> <?php } ?>


                            </div>

                        <?php } ?>
                        <!--  A LA UNE----------------------------------------- -->
                        <?php if (isset($showAlaUne) && !empty($showAlaUne)) {

                            include(__DIR__ . "./../view/include/spotlight.php"); ?>
                            <div class="bottom">
                                <img src="src/public/picture/site/facebook.png" alt="facebook">
                                <img src="src/public/picture/site/google.png" alt="google">
                                <img src="src/public/picture/site/linkedin.png" alt="linkedin">
                                <img src="src/public/picture/site/twitter.png" alt="twitter">
                                <!-- <img src="src/public/picture/mail.png" alt="mail"> -->
                                <a href="javascript:window.open('mailto:?subject=Un bon lien à visiter&body=Salut ! j\'ai trouvé cette annonce pour toi : index.php?page=hotel Bonne journée.')"> <img src="src/public/picture/site/mail.png" alt="mail"></a>
                                <a href="javascript:window.print()"><img src="src/public/picture/site/imprimer.png" alt="imprimer"></a>
                                <!-- <img src="src/public/picture/imprimer.png" alt="imprimer"> -->
                                <?php if (isset($_SESSION['name']) && !isset($_SESSION['admin'])) { ?>
                                    <a href="hotel-fav-1-<?php echo $showAlaUne[0]; ?>"> <img src="src/public/picture/site/like.png" alt="like" class="like"></a>
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