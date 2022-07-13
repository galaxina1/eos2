<?php
// session_destroy();

//    var_dump($_SESSION['name']);
// var_dump($_SESSION['id']);
// if(isset($_SESSION['admin'])) {
//     header('Location:admin');
// // }
// var_dump($biens);
// var_dump($verifyFavoris);
// echo $verifyFavoris[0];
?>

<header>
    <div class="bloc">

        <h2 id="myName">Mon compte</h2>
        <h3>eosConseil</h3>
    </div>
</header>
<!-- THERE'S A SESSION BUT NOT ADMIN ------------------------------->
<?php if (isset($_SESSION['name']) && !isset($_SESSION['admin'])) { ?>
    <script>
        let name = "<?php echo $_SESSION['name']; ?>";
        document.getElementById("myName").innerHTML = name;
    </script>
<?php } ?>



<!-- IL N'Y A PAS DE SESSION-------------------------------------------->
<section>
    <div class="section">

        <div class="page2">
            <?php if (!isset($_SESSION['name'])) { ?>

                <div class="form2">

                    <form action="" method="post">
                        <div id="flexForm2">
                            <div class="form2a">
                                <div class="mb-3">
                                    <label for="mail" class="form-label">Email</label>
                                    <input type="email" name="emailConnect" class="form-control" id="mail">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" name="passwordConnect" class="form-control" id="password">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" name="checkConnect" class="form-check-input" id="checkc">
                            <label class="labeForm2" for="checkc" id="labelForm2">
                                Se souvenir de moi
                            </label>
                        </div>

                        <button type="submit" class="btn btn-outline-danger btn-lg" id="connect">Se connecter</button>

                        <a href="inscription"><button type="button" class="btn btn-outline-info btn-lg" id="subscribe">S'inscrire</button></a>
                    </form>

                    <br />
                    <p><a href="" class="forgetPass">Mot de passe oublié ?</a></p>
                </div>

            <?php }
            // THERE'S A SESSION BUT NOT ADMIN --------------------------------
            // Favorites
            if (isset($_SESSION['name']) && !isset($_SESSION['admin'])) {
            ?>
                <p class="favoris">Mes Favoris</p>
                <?php if (empty($showFavoris)) { ?>
                    <p class="favorisVide">Vous n'avez aucun favoris pour l'instant.</p><?php } ?>
                <div id="card">

                    <?php
                    // ------------------------
                    for ($i = 0; $i < count($showFavoris); $i++) { ?>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $showFavoris[$i][7]; ?></h5>
                                <p class="card-text"><?php echo $showFavoris[$i][7]; ?><br />
                                    <span class="prixFavoris"> Prix : <?php echo number_format($showFavoris[$i][4], 0, ',', ' '); ?> €</span><br />
                                </p>
                                <a href="index.php?page=<?php
                                                        if ($showFavoris[$i][37] == '1') {
                                                            echo 'hotel';
                                                        } else {
                                                            echo strtolower($showFavoris[$i][38]);
                                                        } ?>&type=<?php echo $showFavoris[$i][5]; ?>&id=<?php echo $showFavoris[$i][1]; ?>" class="btn btn-outline-primary">Détails</a>

                                <a href="index.php?page=moncompte&deletefavori=<?php echo $showFavoris[$i][0]; ?>" class="btn btn-outline-danger">Supprimer</a>
                            </div>
                        </div>

                    <?php }  ?>
                </div>
                <!-- NOS NOUVEAUTES------------ -->
                <p class="nouveautes">Nos nouveautés</p>

                <div id="card">
                    <?php



                    for ($i = 0; $i < count($biens); $i++) {



                    ?>

                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title"><?php
                                                        echo $biens[$i][4];
                                                        ?></h5>
                                <p class="card-text"><?php echo $biens[$i][4]; ?><br />
                                    <span class="prixFavoris"> Prix : <?php echo number_format($biens[$i][1], 0, ',', ' '); ?> €</span><br />
                                </p>
                                <a href="index.php?page=<?php if ($biens[$i][34] == '1') {
                                                            echo 'hotel';
                                                        } else {
                                                            echo strtolower($biens[$i][35]);
                                                        }
                                                        ?>&type=<?php echo $biens[$i][34]; ?>&id=<?php echo $biens[$i][0]; ?>" <?php
                                                                                                                                ?> class="btn btn-outline-primary">Détails</a>


                            </div>
                        </div>


                    <?php }

                    ?>
                </div>


                <!-- MODAL ----------- -->
                <!-- Button trigger modal -->
                <p data-toggle="modal" data-target="#exampleModalCenter">
                    <span class="deleteAccount"> Supprimer mon compte</span>
                </p>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Supprimer mon compte</h5>

                            </div>
                            <div class="modal-body">
                                Êtes-vous sûr de vouloir nous quitter <?php echo $_SESSION['name']; ?> ?
                            </div>
                            <div class="modal-footer">

                                <form action="moncompte" method="post" id="formDelete">
                                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Je reste</button>
                                    <input type="hidden" name="deleteAccount">
                                    <button type="submit" class="btn btn-outline-danger">C'est mon dernier choix</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ----------------- -->

            <?php  } ?>



        </div>