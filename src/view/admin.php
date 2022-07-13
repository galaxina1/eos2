<?php

?>
<header>
    <div class="bloc">

        <h2>Administration</h2>
        <h3>eosConseil</h3>
    </div>
</header>
<!--NAVBAR ADMIN ------------------------------------------------- -->

<section>

    <div id="nav">

        <a href="admin-photos">
            <div id="clickPhotos">Photos</div>
        </a>


        <a href="admin-annonces">
            <div id="clickAnnonces">Annonces</div>
        </a>

        <a href="admin-actualites">
            <div id="clickActualites">Actualités</div>
        </a>

        <a href="admin-contacts">
            <div id="clickContacts">Contacts</div>
        </a>

    </div>

    <!-- PHOTOS -------------------------------------------------- -->
    <div id="blocs">
        <div class="section3">

            <p class="photosAccueil" id="photosAccueil">Photos Accueil</p>

            <div id="display1">

                <!-- ADD IMAGE SLIDE HOME PAGE -->
                <form action="" method="post" enctype="multipart/form-data" id="photos">


                    <label for="imageA" class="boutonChoisir">
                        Choisir une image</label>
                    <input type="file" name="image" id="imageA"><br /><br />


                    <button type="submit" class="btn btn-primary">Ajouter</button>

                </form>

                <?php if (empty($images)) {
                    echo "<p class='defaultImage'>Vous n'avez ajouté aucune image ! 
                    <br/>Image par défaut :</p><img src='src/public/picture/default.jpg' class='slide1' alt=''>";
                } ?>
                <!-- SHOW IMAGES SLIDE HOME PAGE -------------------------- -->

                <div class="imagesSlide1Flex">
                    <?php
                    for ($i = 0; $i < count($images); $i++) {
                    ?>
                        <div class="imgModif">

                            <div class="slide1"><img src="src/public/picture/<?php echo $images[$i][1]; ?>" alt="images" class="imagesSlide1">
                            </div>

                            <!-- DELETE IMAGE SLIDE HOME PAGE -->
                            
                            <div class="supp">
                                <a href="index.php?page=admin&id=<?php echo $images[$i][0]; ?>&token=<?php echo $_SESSION['token'];?>">
                                    <img src="src/public/picture/site/supprimer.png" alt="delete" class="delete" id="delete" title="Supprimer"></a>
                            </div>

                            <!-- UPDATE IMAGE SLIDE HOME PAGE -->
                            <div class="formModif">
                                <form action="index.php?page=admin&M&id=<?php echo $images[$i][0] ?>" method="post" enctype="multipart/form-data" id="photosUpdate">

                                    <input type="file" name="imageM" id="imageB"><br />

                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </form>
                            </div>

                        </div>
                        <!-- <img src="src/public/picture/update.png" alt="update" class="update" id="update" title="Mettre à jour"></a> -->

                    <?php } ?>
                </div>
                <!-- </div> -->

                <!-- SLIDE ASIDE ----------------------------------------------------->


            </div> <!-- </div> -->


        </div>

        <div class="section4">
            <p class="photosAside">Photos Aside</p>


            <div id="display2">
                <!-- Add Image Slide Aside -->
                <form action="" method="post" enctype="multipart/form-data" id="formSlide2">

                    <label for="input2" class="boutonChoisir">
                        Choisir une image</label>
                    <input type="file" name="imageSlide2" id="input2"><br /><br />

                    <button type="submit" class="btn btn-primary">Ajouter</button>

                </form><br />
                <?php if (empty($images2)) {
                    echo "<p class='defaultImage'>Vous n'avez ajouté aucune image ! 
                    <br/>Image par défaut :</p><img src='src/public/picture/default2.jpg' class='slide1' alt=''>";
                } ?>
                <!-- Show images slide Aside -->
                <div id="imgS2">
                    <?php for ($i = 0; $i < count($images2); $i++) {
                    ?> <img src="src/public/picture/<?php echo $images2[$i][1]; ?>" alt="images_slide_2" class="imgSlide2">

                        <!-- Delete image Slide Aside -->
                        <div class="deleteImgSlide2">
                            <a href="index.php?page=admin&ad=<?php echo $images2[$i][0]; ?>">
                                <img src="src/public/picture/site/supprimer.png" alt="Supprimer" class="deleteImgS2" id="deleteImgS2" title="Supprimer"></a>
                        </div>
                        <!-- Update image Slide Aside -->

                        <form action="index.php?page=admin&modifslide2=<?php echo $images2[$i][0] ?>" method="post" enctype="multipart/form-data" id="photosUpdateSlide2">
                            <input type="file" name="imageUpdateSlide2" id="imageUpdateS2"><br />
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- BIENS ------------------------------------------------------------------------------------- -->

    <div id="blocs2">

        <div id="blocCategories" class="categories">

            <?php

            if (!isset($_POST['type'])) { ?>

                <p class="ajouterBien" id="ajouterBien"> Ajouter un bien</p>
            <?php } else if (isset($_POST['type'])) { ?>


                <p class="modifierBien" id="modifierBien"> Modifier un bien</p>

            <?php } ?>

            <!-- SELECT (AT RIGHT) -->
            <div class="afficherBien" id="typeBien">
                <select class="afficherBien" aria-label="" name="afficherBien" id="afficherBien">

                    <option value="HÔTEL">Hôtel</option>
                    <option value="RESTAURANT" <?php if (
                                                    isset($_POST['type'])
                                                    && $_POST['type'] === "2"
                                                ) {
                                                    echo "selected";
                                                } ?>>Restaurant</option>
                    <option value="BRASSERIE" <?php if (
                                                    isset($_POST['type'])
                                                    && $_POST['type'] === "3"
                                                ) {
                                                    echo "selected";
                                                } ?>>Brasserie</option>
                    <option value="BAR" <?php if (
                                            isset($_POST['type'])
                                            && $_POST['type'] === "4"
                                        ) {
                                            echo "selected";
                                        } ?>>Bar</option>
                    <option value="SNACK" <?php if (
                                                isset($_POST['type'])
                                                && $_POST['type'] === "5"
                                            ) {
                                                echo "selected";
                                            } ?>>Snack</option>
                </select>
            </div>
            <p id="ok" onclick="ok()" class="ok">Ok</p>
        </div>
        <script type="text/javascript" src="src/public/js/okButtonAdmin.js">
        </script>

        <!-- FORM GOODS-------------------------------------------- -->

        <div id="blocFormAffich">

            <div id="formBien">
                <?php if (isset($showDetails)) { ?>
                    <form action="index.php?page=admin&update=<?php echo $showDetails[0]; ?>" method="post"><?php
                                                                                                        } else { ?> <form action="" method="post"><?php } ?>


                        <div class="mb-3">
                            <label for="prix" class="form-label">Prix * : </label>
                            <input type="number" value="<?php if (isset($showDetails[1])) {
                                                            echo $showDetails[1];
                                                        } ?>" maxLength="9" name="prix" class="form-control" id="prix" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <label for="typeCommerce" class="form-label">Type du commerce * : </label>
                        <select class="form-select" aria-label="default" name="typeCommerce" id="typeCommerce">
                            <!-- <option selected>Choisir</option> -->
                            <option value="1" <?php if (isset($showDetails[2]) && $showDetails[2] === "1") {
                                                    echo "selected";
                                                } ?>>Hôtel</option>
                            <option value="2" <?php if (isset($showDetails[2]) && $showDetails[2] === "2") {
                                                    echo "selected";
                                                } ?>>Restaurant</option>
                            <option value="3" <?php if (isset($showDetails[2]) && $showDetails[2] === "3") {
                                                    echo "selected";
                                                } ?>>Brasserie</option>
                            <option value="4" <?php if (isset($showDetails[2]) && $showDetails[2] === "4") {
                                                    echo "selected";
                                                } ?>>Bar</option>
                            <option value="5" <?php if (isset($showDetails[2]) && $showDetails[2] === "5") {
                                                    echo "selected";
                                                } ?>>Snack</option>
                        </select>

                        <div class="mb-3">
                            <label for="reference" class="form-label">Référence * : </label>
                            <input type="number" value="<?php if (isset($showDetails[3])) {
                                                            echo $showDetails[3];
                                                        } ?>" maxLength="4" name="reference" class="form-control" id="reference" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>


                        <div class="mb-3">
                            <label for="description" class="form-label">Description * : </label>
                            <textarea class="form-control" name="description" id="description" rows="3"><?php if (isset($showDetails[4])) {
                                                                                                            echo $showDetails[4];
                                                                                                        } ?></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="secteur" class="form-label">Secteur * : </label>
                            <input type="text" value="<?php if (isset($showDetails[5])) {
                                                            echo $showDetails[5];
                                                        } ?>" name="secteur" class="form-control" id="secteur">
                        </div>

                        <label for="categorie" class="form-label">Catégorie hôtel : </label>
                        <select class="form-select" aria-label="default" name="categorie" id="categorie">
                            <option value="1" <?php if (isset($showDetails[6]) && ($showDetails[6]) === "1") {
                                                    echo "selected";
                                                } ?>></option>
                            <option value="2" <?php if (isset($showDetails[6]) && $showDetails[6] === "2") {
                                                    echo "selected";
                                                } ?>>⭐️</option>
                            <option value="3" <?php if (isset($showDetails[6]) && $showDetails[6] === "3") {
                                                    echo "selected";
                                                } ?>>⭐️⭐️</option>
                            <option value="4" <?php if (isset($showDetails[6]) && $showDetails[6] === "4") {
                                                    echo "selected";
                                                } ?>>⭐️⭐️⭐️</option>
                            <option value="5" <?php if (isset($showDetails[6]) && $showDetails[6] === "5") {
                                                    echo "selected";
                                                } ?>>⭐️⭐️⭐️⭐️</option>
                            <option value="6" <?php if (isset($showDetails[6]) && $showDetails[6] === "6") {
                                                    echo "selected";
                                                } ?>>⭐️⭐️⭐️⭐️⭐️</option>
                        </select>

                        <div class="mb-3">
                            <label for="caTotalHt" class="form-label">C.A Total hors taxes * : </label>
                            <input type="number" value="<?php if (isset($showDetails[7])) {
                                                            echo $showDetails[7];
                                                        } ?>" name="caTotalHt" maxLength="9" class="form-control" id="caTotalHt" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="caHotel" class="form-label">C.A Hôtel : </label>
                            <input type="number" value="<?php if (isset($showDetails[8])) {
                                                            echo $showDetails[8];
                                                        } ?>" name="caHotel" maxLength="9" class="form-control" id="caHotel" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="caRestauration" class="form-label">C.A Restauration : </label>
                            <input type="number" value="<?php if (isset($showDetails[9])) {
                                                            echo $showDetails[9];
                                                        } ?>" name="caRestauration" maxLength="9" class="form-control" id="caRestauration" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="caBar" class="form-label">C.A Bar : </label>
                            <input type="number" value="<?php if (isset($showDetails[10])) {
                                                            echo $showDetails[10];
                                                        } ?>" name="caBar" maxLength="9" class="form-control" id="caBar" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="ebe" class="form-label">E.B.E : </label>
                            <input type="number" value="<?php if (isset($showDetails[11])) {
                                                            echo $showDetails[11];
                                                        } ?>" name="ebe" maxLength="9" class="form-control" id="ebe" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="nbChambres" class="form-label">NB de chambres : </label>
                            <input type="number" value="<?php if (isset($showDetails[12])) {
                                                            echo $showDetails[12];
                                                        } ?>" name="nbChambres" maxLength="4" class="form-control" id="nbChambres" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="tauxOccupation" class="form-label">Taux d'occupation : </label>
                            <input type="number" value="<?php if (isset($showDetails[13])) {
                                                            echo $showDetails[13];
                                                        } ?>" name="tauxOccupation" maxLength="4" class="form-control" id="tauxOccupation" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="prixMoyenChambre" class="form-label">Prix moyen chambre : </label>
                            <input type="number" value="<?php if (isset($showDetails[14])) {
                                                            echo $showDetails[14];
                                                        } ?>" name="prixMoyenChambre" maxLength="4" class="form-control" id="prixMoyenChambre" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="nbPlacesInterieur" class="form-label">NB places intérieur : </label>
                            <input type="number" value="<?php if (isset($showDetails[15])) {
                                                            echo $showDetails[15];
                                                        } ?>" name="nbPlacesInterieur" maxLength="4" class="form-control" id="nbPlacesInterieur" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="nbPlacesTerrasse" class="form-label">NB places terrasse : </label>
                            <input type="number" value="<?php if (isset($showDetails[16])) {
                                                            echo $showDetails[16];
                                                        } ?>" name="nbPlacesTerrasse" maxLength="4" class="form-control" id="nbPlacesTerrasse" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="horairesOuverture" class="form-label">Horaires d'ouverture : </label>
                            <input type="text" value="<?php if (isset($showDetails[17])) {
                                                            echo $showDetails[17];
                                                        } ?>" name="horairesOuverture" class="form-control" id="horairesOuverture">
                        </div>

                        <div class="mb-3">
                            <label for="fermetureHebdo" class="form-label">Fermeture hebdomadaire : </label>
                            <input type="text" value="<?php if (isset($showDetails[18])) {
                                                            echo $showDetails[18];
                                                        } ?>" name="fermetureHebdo" class="form-control" id="fermetureHebdo">
                        </div>

                        <div class="mb-3">
                            <label for="conges" class="form-label">Congés : </label>
                            <input type="text" value="<?php if (isset($showDetails[19])) {
                                                            echo $showDetails[19];
                                                        } ?>" name="conges" class="form-control" id="conges">
                        </div>

                        <div class="mb-3">
                            <label for="pLimonade" class="form-label">% Limonade : </label>
                            <input type="number" value="<?php if (isset($showDetails[20])) {
                                                            echo $showDetails[20];
                                                        } ?>" name="pLimonade" maxLength="2" class="form-control" id="pLimonade" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>

                        <div class="mb-3">
                            <label for="qBiereAn" class="form-label">Q bière/ An : </label>
                            <input type="text" value="<?php if (isset($showDetails[21])) {
                                                            echo $showDetails[21];
                                                        } ?>" name="qBiereAn" class="form-control" id="qBiereAn">
                        </div>

                        <div class="mb-3">
                            <label for="qCafe" class="form-label">Q café/ Semaine : </label>
                            <input type="text" value="<?php if (isset($showDetails[22])) {
                                                            echo $showDetails[22];
                                                        } ?>" name="qCafe" class="form-control" id="qCafe">
                        </div>

                        <div class="mb-3">
                            <label for="nbSalaries" class="form-label">NB total salariés : </label>
                            <input type="number" value="<?php if (isset($showDetails[23])) {
                                                            echo $showDetails[23];
                                                        } ?>" name="nbSalaries" maxLength="9" class="form-control" id="nbSalaries" oninput="if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                        </div>


                        <div class="mb-3 form-check" id="formCheck">
                            <label for="fermeSoir" id="fermeSoir">Fermé le soir : </label>
                            <input type="checkbox" name="fermeSoir" value=1 <?php if (isset($showDetails[24]) && $showDetails[24] == 1) {
                                                                                echo "checked";
                                                                            } ?> class="form-check-input" id="checkFermeSoir">
                        </div>

                        <div class="mb-3 form-check" id="formCheck">
                            <label for="lic4" id="lic4">Licence IV : </label>
                            <input type="checkbox" name="lic4" value=1 <?php if (isset($showDetails[25]) && $showDetails[25] == 1) {
                                                                            echo "checked";
                                                                        } ?> class="form-check-input" id="checkLicence4">
                        </div>

                        <div class="mb-3 form-check" id="formCheck">
                            <label for="gaineExtraction" id="gaineExtraction">Gaine d'extraction : </label>
                            <input type="checkbox" <?php if (isset($showDetails[26]) && $showDetails[26] == 1) {
                                                        echo "checked";
                                                    } ?> name="gaineExtraction" value=1 class="form-check-input" id="checkGaineExtraction">
                        </div>

                        <div class="mb-3 form-check" id="formCheck">
                            <label for="climatisation" id="climatisation">Climatisation : </label>
                            <input type="checkbox" name="climatisation" value=1 <?php if (isset($showDetails[27]) && $showDetails[27] == 1) {
                                                                                    echo "checked";
                                                                                } ?> class="form-check-input" id="checkClim">
                        </div>

                        <div class="mb-3 form-check" id="formCheck">
                            <label for="terrasse" id="terrasse">Terrasse : </label>
                            <input type="checkbox" name="terrasse" value=1 <?php if (isset($showDetails[28]) && $showDetails[28] == 1) {
                                                                                echo "checked";
                                                                            } ?> class="form-check-input" id="checkTerrasse">
                        </div>

                        <div class="mb-3 form-check" id="formCheck">
                            <label for="veranda" id="veranda">Véranda : </label>
                            <input type="checkbox" name="veranda" value=1 <?php if (isset($showDetails[29]) && $showDetails[29] == 1) {
                                                                                echo "checked";
                                                                            } ?> class="form-check-input" id="checkVeranda">
                        </div>

                        <div class="mb-3 form-check" id="formCheck">
                            <label for="bureau" id="bureau">Bureau : </label>
                            <input type="checkbox" name="bureau" value=1 <?php if (isset($showDetails[30]) && $showDetails[30] == 1) {
                                                                                echo "checked";
                                                                            } ?> class="form-check-input" id="checkBureau">
                        </div>

                        <div class="mb-3 form-check" id="formCheck">
                            <label for="parking" id="parking">Parking : </label>
                            <input type="checkbox" name="parking" value=1 <?php if (isset($showDetails[31]) && $showDetails[31] == 1) {
                                                                                echo "checked";
                                                                            } ?> class="form-check-input" id="checkParking">
                        </div>

                        <div class="mb-3 form-check" id="formCheck">
                            <label for="alaune" id="alaune">A la une : </label>
                            <input type="checkbox" name="alaune" value=1 <?php if (isset($showDetails[32]) && $showDetails[32] == 1) {
                                                                                echo "checked";
                                                                            } ?> class="form-check-input" id="checkalaune">
                        </div>


                        <br /><br />



                        <?php if (!isset($type)) { ?>
                            <button type="submit" class="btn btn-outline-info btn-lg" id="subscribe1">Ajouter</button><br /><br />
                        <?php } else { ?>
                            <button type="submit" class="btn btn-outline-info btn-lg" id="upDate">Modifier</button><br /><br />
                        <?php } ?>


                        </form>

                        <br />
            </div>

            <div id="affBiens">

                <div id="affHotel">
                    <?php
                    for ($i = 0; $i < count($showHotel); $i++) {
                    ?>Référence : <?php echo $showHotel[$i][3] ?> <br />
                    Description : <?php echo $showHotel[$i][4]; ?> <br />
                    Prix : <?php echo number_format($showHotel[$i][1], 0, ',', ' '); ?> €

                    <form action="" method="post">
                        <input type="hidden" name="type" value="<?php echo $showHotel[$i][2]; ?>">
                        <input type="hidden" name="id" value="<?php echo $showHotel[$i][0]; ?>">
                        <button type="submit" class="btn btn-outline-info btn-lg" id="detailHotel">Détails</button><br />
                    </form>
                <?php } ?>
                </div>

                <div id="affRestaurant">
                    <?php
                    for ($i = 0; $i < count($showRestaurant); $i++) {
                    ?>Référence : <?php echo $showRestaurant[$i][3] ?> <br />
                    Description : <?php echo $showRestaurant[$i][4]; ?> <br />
                    Prix : <?php echo number_format($showRestaurant[$i][1], 0, ',', ' '); ?> €

                    <form action="" method="post">
                        <input type="hidden" name="type" value="<?php echo $showRestaurant[$i][2]; ?>">
                        <input type="hidden" name="id" value="<?php echo $showRestaurant[$i][0]; ?>">
                        <button type="submit" class="btn btn-outline-info btn-lg" id="detailRestaurant">Détails</button><br />
                    </form>
                <?php } ?>
                </div>

                <div id="affBrasserie">
                    <?php
                    for ($i = 0; $i < count($showBrasserie); $i++) {
                    ?>Référence : <?php echo $showBrasserie[$i][3] ?> <br />
                    Description : <?php echo $showBrasserie[$i][4]; ?> <br />
                    Prix : <?php echo number_format($showBrasserie[$i][1], 0, ',', ' '); ?> €

                    <form action="" method="post">
                        <input type="hidden" name="type" value="<?php echo $showBrasserie[$i][2]; ?>">
                        <input type="hidden" name="id" value="<?php echo $showBrasserie[$i][0]; ?>">
                        <button type="submit" class="btn btn-outline-info btn-lg" id="detailBrasserie">Détails</button><br />
                    </form>
                <?php } ?>
                </div>

                <div id="affBar">
                    <?php
                    for ($i = 0; $i < count($showBar); $i++) {
                    ?>Référence : <?php echo $showBar[$i][3] ?> <br />
                    Description : <?php echo $showBar[$i][4]; ?> <br />
                    Prix : <?php echo number_format($showBar[$i][1], 0, ',', ' '); ?> €

                    <form action="" method="post">
                        <input type="hidden" name="type" value="<?php echo $showBar[$i][2]; ?>">
                        <input type="hidden" name="id" value="<?php echo $showBar[$i][0]; ?>">
                        <button type="submit" class="btn btn-outline-info btn-lg" id="detailBar">Détails</button><br />
                    </form>
                <?php } ?>
                </div>

                <div id="affSnack">
                    <?php
                    for ($i = 0; $i < count($showSnack); $i++) {
                    ?>Référence : <?php echo $showSnack[$i][3] ?> <br />
                    Description : <?php echo $showSnack[$i][4]; ?> <br />
                    Prix : <?php echo number_format($showSnack[$i][1], 0, ',', ' '); ?> €
                    <!-- <a href="index.php?page=admin&type=<?php echo $showSnack[$i][2]; ?>&bd=<?php echo $showSnack[$i][0]; ?>"> -->
                    <form action="" method="post">
                        <input type="hidden" name="type" value="<?php echo $showSnack[$i][2]; ?>">
                        <input type="hidden" name="id" value="<?php echo $showSnack[$i][0]; ?>">
                        <button type="submit" class="btn btn-outline-info btn-lg" id="detailSnack">Détails</button><br />
                    </form>
                    <!-- </a> -->
                <?php } ?>
                </div>

                <div id="showDetails">
                    <?php
                    if (isset($showDetails)) {
                        // for ($i = 1; $i < count($showDetails); $i++) {
                        //     if (isset($showDetails[$i])) {
                        //         if ($showDetails[$i] !== null && !empty($showDetails[$i])) {
                    ?>
                        <ul>
                            <li>Référence : <?php echo $showDetails[3]; ?></li>
                            <li>Type de commerce : <?php echo $showDetails[35]; ?></li>
                            <li>Description : <?php echo $showDetails[4]; ?></li>
                            <li>Prix : <?php echo number_format($showDetails[1], 0, ',', ' '); ?> €</li>
                            <li>Secteur : <?php echo $showDetails[5]; ?></li>
                            <li><?php if (!empty($showDetails[37])) { ?>Catégorie hôtel : <?php echo $showDetails[37];
                                                                                        } ?></li>
                            <li>C.A Total Hors taxes : <?php echo number_format($showDetails[7], 0, ',', ' '); ?> €</li>
                            <li><?php if (!empty($showDetails[8])) { ?>C.A Hôtel : <?php echo number_format($showDetails[8], 0, ',', ' ');
                                                                                    ?> € <?php  } ?></li>
                            <li><?php if (!empty($showDetails[9])) { ?>C.A restauration : <?php echo number_format($showDetails[9], 0, ',', ' ');
                                                                                            ?> € <?php  } ?></li>
                            <li><?php if (!empty($showDetails[10])) { ?>C.A Bar : <?php echo number_format($showDetails[10], 0, ',', ' ');
                                                                                    ?> € <?php  } ?></li>
                            <li><?php if (!empty($showDetails[11])) { ?>E.B.E : <?php echo number_format($showDetails[11], 0, ',', ' ');
                                                                                ?> € <?php  } ?></li>
                            <li><?php if (!empty($showDetails[12])) { ?>NB Chambres : <?php echo $showDetails[12];
                                                                                    } ?></li>
                            <li><?php if (!empty($showDetails[13])) { ?>Taux d'occupation : <?php echo $showDetails[13];
                                                                                        } ?></li>
                            <li><?php if (!empty($showDetails[14])) { ?>Prix moyen chambre : <?php echo $showDetails[14];
                                                                                                ?> € <?php  } ?></li>
                            <li><?php if (!empty($showDetails[15])) { ?>NB Places intérieur : <?php echo $showDetails[15];
                                                                                            } ?></li>
                            <li><?php if (!empty($showDetails[16])) { ?>NB Places Terrasse : <?php echo $showDetails[16];
                                                                                            } ?></li>
                            <li> <?php if (!empty($showDetails[17])) { ?>Horaires d'ouverture : <?php echo $showDetails[17];
                                                                                            } ?></li>
                            <li> <?php if (!empty($showDetails[18])) { ?>Fermeture Hebdomadaire : <?php echo $showDetails[18];
                                                                                                } ?></li>
                            <li><?php if (!empty($showDetails[19])) { ?>Congés : <?php echo $showDetails[19];
                                                                                } ?></li>
                            <li><?php if (!empty($showDetails[20])) { ?>% Limonade : <?php echo $showDetails[20];
                                                                                    } ?></li>
                            <li><?php if (!empty($showDetails[21])) { ?> Q Bière / An : <?php echo $showDetails[21];
                                                                                    } ?></li>
                            <li><?php if (!empty($showDetails[22])) { ?> Q Café / Semaine : <?php echo $showDetails[22];
                                                                                        } ?></li>
                            <li><?php if (!empty($showDetails[23])) { ?> NB Salariés : <?php echo $showDetails[23];
                                                                                    } ?></li>
                            <li><?php if (!empty($showDetails[24])) { ?> Fermé le Soir : <?php echo "Oui";
                                                                                        } ?></li>
                            <li><?php if (!empty($showDetails[25])) { ?> Licence IV : <?php echo "Oui";
                                                                                    } ?></li>
                            <li><?php if (!empty($showDetails[26])) { ?> Gaine d'extraction : <?php echo "Oui";
                                                                                            } ?></li>
                            <li><?php if (!empty($showDetails[27])) { ?> Climatisation : <?php echo "Oui";
                                                                                        } ?></li>
                            <li><?php if (!empty($showDetails[28])) { ?> Terrasse : <?php echo "Oui";
                                                                                } ?></li>
                            <li><?php if (!empty($showDetails[29])) { ?> Veranda : <?php echo "Oui";
                                                                                } ?></li>
                            <li><?php if (!empty($showDetails[30])) { ?> Bureau : <?php echo "Oui";
                                                                                } ?></li>
                            <li><?php if (!empty($showDetails[31])) { ?> Parking : <?php echo "Oui";
                                                                                } ?></li>
                            <li><?php if (!empty($showDetails[32])) { ?> A la Une : <?php echo "Oui";
                                                                                } ?></li>
                        </ul>
                        <!-- S_POST POSSIBLE ? -->

                        <a href="index.php?page=admin&showdetails=<?php echo $showDetails[0]; ?>">
                            <button type="button" class="btn btn-outline-danger btn-lg" id="deleteAnnonce">Supprimer</button></a>



                        <script>
                            document.getElementById("affHotel").setAttribute("style", "display:none");
                            document.getElementById("affRestaurant").setAttribute('style', 'display:none');
                            document.getElementById("affBrasserie").setAttribute('style', 'display:none');
                            document.getElementById("affSnack").setAttribute('style', 'display:none');
                            document.getElementById("affBar").setAttribute('style', 'display:none');
                        </script>
                    <?php

                    };
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- ACTUALITES ----------------------------------------------------------->
    <!-- Formulaire -->
    <div id="actualites">

        <p class="actuTitre">Actualités</p>
        <div class="actuForm">
            <?php if (isset($showNewsDetails)) { ?>
                <form action="index.php?page=admin&updatenews=<?php echo $showNewsDetails[0]; ?>" method="post" enctype="multipart/form-data"><?php
                                                                                                                                            } else { ?> <form action="" method="post" enctype="multipart/form-data"><?php } ?>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titre</label>
                        <input type="text" name="title" class="form-control" value="<?php if (isset($showNewsDetails[2])) {
                                                                                        echo $showNewsDetails[2];
                                                                                    } ?>">
                    </div>

                    <div class="mb-3">
                        <label for="text" class="form-label">Texte : </label>
                        <textarea class="form-control" name="text" id="text" rows="6"><?php if (isset($showNewsDetails[3])) {
                                                                                            echo $showNewsDetails[3];
                                                                                        } ?></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="photo" class="form-label">Photo</label>
                        <input type="file" name="photo" class="form-control" value="<?php if (isset($showNewsDetails[4])) {
                                                                                        echo
                                                                                        $showNewsDetails[4];
                                                                                    } else {
                                                                                        echo null;
                                                                                    } ?>">

                    </div>

                    <div class="mb-3">
                        <label for="text2" class="form-label">Texte : </label>
                        <textarea class="form-control" name="text2" id="text2" rows="6"><?php if (isset($showNewsDetails[5])) {
                                                                                            echo $showNewsDetails[5];
                                                                                        } ?></textarea>
                    </div>


                    <div class="mb-3">
                        <label for="video" class="form-label">Vidéo</label>
                        <input type="text" name="video" class="form-control" value="<?php if (isset($showNewsDetails[6])) {
                                                                                        echo $showNewsDetails[6];
                                                                                    } ?>"><br />
                    </div>

                    <button type="submit" class="btn btn-outline-info btn-lg" id="addNews">Ajouter</button><br /><br />

                    </form>
        </div>

        <div class="actuShow">

            <!-- Affiche la date et le titre de l'actu ( dans l'admin ) -->
            <?php
            if (!isset($showNewsDetails)) {
                for ($i = 0; $i < count($showNews); $i++) {
            ?>
                    <div class="actuShowFlex">
                        <div class="a"><?php
                                        echo $showNews[$i][1]; ?>
                        </div>

                        <div class="b"><?php
                                        echo $showNews[$i][2]; ?>
                        </div>

                        <div class="c">
                            <form action="" method="post">
                                <input type="hidden" name="detailNews" value="<?php echo $showNews[$i][0]; ?>">
                                <button type="submit" class="btn btn-outline-info btn-lg" id="detailNews">Détails</button><br />
                            </form>

                        </div>
                    </div>

            <?php }
            } ?>

            <!-- Affiche les détails de l'actu -->
            <?php if (isset($showNewsDetails)) { ?>
                Date de publication : <?php echo $showNewsDetails[1]; ?><br /><br />

                Titre de l'article : <?php echo $showNewsDetails[2]; ?><br /><br />

                Texte : <?php echo $showNewsDetails[3]; ?><br /><br />

                <?php
                if (!empty($showNewsDetails[4])) { ?>
                    Photo : <br />
                    <img src="src/public/picture/<?php echo $showNewsDetails[4]; ?>" alt="photo" class="photoNews"><br /><br />
                <?php };

                if (!empty($showNewsDetails[5])) { ?>
                    Texte : <?php echo $showNewsDetails[5]; ?><br /><br />
                <?php };

                if (!empty($showNewsDetails[6])) { ?>
                    Vidéo : <br />
                    <?php
                    $var = $showNewsDetails[6];
                    $var = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $var); ?>
                    <iframe src="<?php echo $var; ?>" class="iframe" allowfullscreen></iframe>
                    <br />
                <?php }; ?>

                <a href="index.php?page=admin&deletenews=<?php echo $showNewsDetails[0]; ?>">
                    <button type="button" class="btn btn-outline-danger btn-lg" id="deleteNews">Supprimer</button></a>

                <script>
                    document.getElementById('addNews').innerHTML = "Modifier";
                </script>
            <?php } ?>

        </div>



    </div>
    <!-- CONTACTS ---------------------------------------------------------------->
    <div id="contacts">

        <p class="contactsTitre"> Contacts</p>

        <div class="contactsFlex">
            <!-- AFFICHE LES COMPTES ------------------------------->
            <div class="contacts"><span class="titre">Comptes</span><br /><br />


                <!-- ----------------------- -->
                <?php for ($i = 0; $i < count($users); $i++) {
                    $identif = $users[$i][0];
                ?>Email : <?php echo $users[$i][1]; ?><br />
                Nom et Prénom : <?php echo $users[$i][3]; ?><br />
                Date d'inscription : <?php echo $users[$i][4]; ?><br />
                <?php $showFav = $model->getFavorites($identif);
                    if (!empty($showFav)) { ?>

                    Favoris : <br /><?php for ($a = 0; $a < count($showFav); $a++) { ?>
                        Réf : <?php echo $showFav[$a][6]; ?><br />
                        <?php echo $showFav[$a][7];
                        ?><br /><?php }
                                }
                                if ($users[$i][5] == "1") {
                                    echo "<p class='admin'>ADMIN</p>";
                                }
                                ?>

                <br />
                <!-- bouton supprimer  -->


                <a href="index.php?page=admin&adminDeleteAccount=<?php echo $identif; ?>"><button type="button" class="btn btn-outline-danger" id="adminDeleteButton">Supprimer</button></a>

                <br />

                <!-- ----------------- -->
            <?php  } ?>

            <!-- ------------------------ -->
            </div>

            <!-- AFFICHE LES INSCRITS AU FORMULAIRE DE CONTACT -->
            <div class="contacts"><span class="titre">Formulaire de Contact</span><br /><br />


                <?php for ($i = 0; $i < count($getFormContact); $i++) {
                ?>
                    Nom et Prénom : <?php echo $getFormContact[$i][1]; ?><br />
                    <?php
                    if (isset($getFormContact[$i][2])) {
                    ?> Téléphone : <?php echo chunk_split($getFormContact[$i][2], 2, ' '); ?><br />
                    <?php
                    }
                    if (isset($getFormContact[$i][3])) { ?>
                        Adresse : <?php echo $getFormContact[$i][3]; ?><br />
                    <?php }
                    if (isset($getFormContact[$i][4])) { ?>
                        Ville : <?php echo $getFormContact[$i][4]; ?><br />
                    <?php } ?>
                    Sujet : <?php echo $getFormContact[$i][5]; ?><br />

                    Email : <?php echo $getFormContact[$i][6]; ?><br />
                    <?php
                    if (isset($getFormContact[$i][7])) { ?>
                        Société : <?php echo $getFormContact[$i][7]; ?><br />
                    <?php }
                    if (isset($getFormContact[$i][8])) { ?>
                        Code postal : <?php echo $getFormContact[$i][8]; ?><br />
                    <?php }
                    if (isset($getFormContact[$i][9])) { ?>
                        Pays : <?php echo $getFormContact[$i][9]; ?><br />
                    <?php } ?>
                    Message : <?php echo $getFormContact[$i][10]; ?><br />

                    Date et Heure : <?php echo $getFormContact[$i][12]; ?><br />

                    <a href="index.php?page=admin&admindeletecontact=<?php echo $getFormContact[$i][0]; ?>"><button type="button" class="btn btn-outline-danger" id="adminDeleteContactButton">Supprimer</button></a>

                    <br /><br />
                <?php


                } ?>

            </div>
            <!-- AFFICHE LES INSCRITS A LA NEWSLETTER -->
            <div class="contacts"><span class="titre">Inscrits à la Newsletter<br /><br /></span>
                <?php for ($i = 0; $i < count($usersNewsletter); $i++) { ?>
                    Email : <?php echo $usersNewsletter[$i][1]; ?><br />

                    Date d'inscription : <?php echo $usersNewsletter[$i][3]; ?><br />
                    <a href="index.php?page=admin&admindeletenewsletter=<?php echo $usersNewsletter[$i][0]; ?>"><button type="button" class="btn btn-outline-danger" id="adminDeleteNewsletterButton">Supprimer</button></a>
                    <br />
                <?php
                } ?>
            </div>
        </div>

    </div>
    <!-- NAV -->

    <?php
    if (isset($_GET['photos'])) {
    ?><script>
            document.getElementById("blocs2").setAttribute('style', 'display:none');
            document.getElementById("actualites").setAttribute('style', 'display:none');
            document.getElementById("contacts").setAttribute('style', 'display:none');
            document.getElementById('clickPhotos').setAttribute('style', 'background-color:#4990fb; color:white;');
        </script>
    <?php }


    if (isset($_GET['annonces'])) {
    ?><script>
            document.getElementById("blocs").setAttribute('style', 'display:none');
            document.getElementById("actualites").setAttribute('style', 'display:none');
            document.getElementById("contacts").setAttribute('style', 'display:none');
            document.getElementById('clickAnnonces').setAttribute('style', 'background-color:#4990fb; color:white;');
        </script>
    <?php }

    if (isset($_GET['actualites'])) {
    ?><script>
            document.getElementById("blocs").setAttribute('style', 'display:none');
            document.getElementById("blocs2").setAttribute('style', 'display:none');
            document.getElementById("contacts").setAttribute('style', 'display:none');
            document.getElementById('clickActualites').setAttribute('style', 'background-color:#4990fb; color:white;');
        </script>
    <?php }

    if (isset($_GET['contacts'])) {
    ?><script>
            document.getElementById("blocs").setAttribute('style', 'display:none');
            document.getElementById("blocs2").setAttribute('style', 'display:none');
            document.getElementById("actualites").setAttribute('style', 'display:none');
            document.getElementById('clickContacts').setAttribute('style', 'background-color:#4990fb; color:white;');
        </script><?php } ?>
</section>