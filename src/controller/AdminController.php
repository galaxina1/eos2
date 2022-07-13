<?php

// var_dump($showFav);
// var_dump($_SESSION['token']);
// var_dump($_GET['token']);

class AdminController
{



    public function __construct()
    {
    }

    public function manage()
    {



        // AFFICHER IMAGES SLIDE 1
        $model = new Model();
        $images = $model->getImagesSlideHomePage();
        $images2 = $model->getImagesSlideAside();
        $showHotel = $model->show(1);
        $showRestaurant = $model->show(2);
        $showBrasserie = $model->show(3);
        $showBar = $model->show(4);
        $showSnack = $model->show(5);

        $showNews = $model->showNews();

        $users = $model->getUsers();

        $getFormContact = $model->getContact();
        $usersNewsletter = $model->getUsersNewsletter();



        // Si l'admin n'est pas connecté, on renvoie à l'accueil 
        if (!isset($_SESSION['admin'])) {
            header('Location:accueil');
        }

        // On supprime le compte
        if (isset($_GET['adminDeleteAccount'])) {

            $idAdminDeleteAccount = $_GET['adminDeleteAccount'];
            $model->deleteAccount($idAdminDeleteAccount);
            header('Location:admin-contacts');
        }

        // On supprime le contact
        if (isset($_GET['admindeletecontact'])) {
            $idAdminDeleteContact = $_GET['admindeletecontact'];
            $model->deleteContact($idAdminDeleteContact);
            header('Location:admin-contacts');
        }
        //  On supprime l'inscrit à la newsletter
        if (isset($_GET['admindeletenewsletter'])) {
            $idNewsletter = $_GET['admindeletenewsletter'];
            $model->deleteUserNewsletter($idNewsletter);
            header('Location:admin-contacts');
        }

        // SLIDE HOME PAGE -------------------------------------------------------------------
        // Add Image Slide Home Page

        if (count($images) < 10) {

            if (isset($_FILES['image'])) {

                if (!empty($_FILES['image']['tmp_name'])) {

                    $uniqueName = uniqid('', true);
                    $file = "$uniqueName.jpg";
                    $chemin = "src/public/picture/$file";
                    // $chemin = "images/$file";
                    $tmpName = $_FILES['image']['tmp_name'];

                    move_uploaded_file($tmpName, $chemin);

                    $model->insertImageSlideHomePage($file);

                    header("Location:admin-photos");
                    $messageSuccess = "Image Ajoutée";
                } else {
                    // header("Location:admin-photos");
                    $messageError = "Echec de l'upload,
                     merci de réessayer dans un moment";
                }
            }
        } else {
            $messageError = "Vous ne pouvez pas télécharger plus de 10 images";
        }

        // Delete Image Slide Home Page
        if (
            isset($_GET['id'])
            && array_key_exists('token', $_SESSION)
            && $_SESSION['token'] === $_GET['token']
        ) {
            if (!isset($_GET['M'])) {
                $s = $_GET['id'];
                $getImageSlide1Id = $model->getImageSlideHomePageId($s);
                unlink("src/public/picture/" . $getImageSlide1Id[1]);
                $model->deleteImageSlideHomePage($s);
                header("Location:admin-photos");
            }
        }

        // Update Image Slide Home Page
        if (isset($_FILES['imageM'])) {
            if (!empty($_FILES['imageM']['tmp_name'])) {
                $uniqueName2 = uniqid('', true);
                $file2 = "$uniqueName2.jpg";
                $chemin2 = "src/public/picture/$file2";
                // $chemin = "images/$file";
                $tmpName = $_FILES['imageM']['tmp_name'];
                // var_dump($_FILES['imageM']['name']);
                move_uploaded_file($tmpName, $chemin2);

                if (isset($_GET['M'])) {

                    $id = $_GET['id'];

                    $getImageSlide1Id = $model->getImageSlideHomePageId($id);
                    unlink("src/public/picture/" . $getImageSlide1Id[1]);

                    $model->updateImageSlideHomePage($file2, $id);
                    $messageSuccess = "Image Ajoutée";
                    // var_dump($file);
                    header("Location:admin-photos");
                }
            } else {
                header("Location:admin-photos");
                $messageError = "Echec de l'upload,
                 merci de réessayer dans un moment";
            }
        }

        // SLIDE ASIDE -----------------------------------------------------------------
        // Add Image Slide Aside

        if (isset($_FILES['imageSlide2'])) {
            $uniqueName = uniqid('', true);
            $file = "$uniqueName.jpg";
            $chemin = "src/public/picture/$file";
            // $chemin = "images/$file";
            $tmpName = $_FILES['imageSlide2']['tmp_name'];
            move_uploaded_file($tmpName, $chemin);
        }

        if (isset($_FILES['imageSlide2'])) {

            if (!empty($_FILES['imageSlide2']['tmp_name'])) {
                $model->insertImageSlideAside($file);

                header("Location:admin-photos");
                $messageSuccess = "Image Ajoutée";
            } else {
                $messageError = "Echec de l'upload,
                 merci de réessayer dans un moment";
            }
        }

        //  Delete Image Slide Aside
        if (isset($_GET['ad'])) {

            $a = $_GET['ad'];
            $getImageSlide2Id = $model->getImageSlideAsideId($a);
            unlink("src/public/picture/" . $getImageSlide2Id[1]);
            $model->deleteImageSlideAside($a);
            header("Location:admin-photos");
        }

        // Update Image Slide Aside

        if (isset($_FILES['imageUpdateSlide2'])) {
            if (!empty($_FILES['imageUpdateSlide2']['tmp_name'])) {
                $uniqueName3 = uniqid('', true);
                $file3 = "$uniqueName3.jpg";
                $chemin3 = "src/public/picture/$file3";
                // $chemin = "images/$file";
                $tmpName = $_FILES['imageUpdateSlide2']['tmp_name'];
                move_uploaded_file($tmpName, $chemin3);

                if (isset($_GET['modifslide2'])) {

                    $id = $_GET['modifslide2'];

                    $getImageSlide2Id = $model->getImageSlideAsideId($id);
                    unlink("src/public/picture/" . $getImageSlide2Id[1]);


                    $model->updateImageSlideAside($file3, $id);
                    $messageSuccess = "Image Modifiée";
                    // var_dump($file);
                    header("Location:admin-photos");
                }
            } else {
                header("Location:admin-photos");
                $messageError = "Echec de l'upload,
                 merci de réessayer dans un moment";
            }
        }
        // GOODS
        // Add a Good ---------------------------------------------------------------------
        if (!isset($_GET['update'])) {
            if (isset($_POST['prix'])) {
                if (
                    !empty($_POST['prix'])
                    && !empty($_POST['typeCommerce'])
                    && !empty($_POST['reference'])
                    && !empty($_POST['description'])
                    && !empty($_POST['secteur'])
                    && !empty($_POST['caTotalHt'])
                ) {
                    $prix = $_POST['prix'];
                    $typeCommerce = $_POST['typeCommerce'];


                    $reference = $_POST['reference'];
                    $verify = $model->verifyReference($reference);
                    // echo $verify[0];

                    if ($verify[0] !== "0") {
                        $messageError = "Cette référence existe déjà";
                    } else {



                        // $reference = $_POST['reference'];

                        $description = $_POST['description'];
                        $secteur = $_POST['secteur'];
                        $categorie = empty($_POST['categorie']) ? null : $_POST['categorie'];
                        $caTotalHt = $_POST['caTotalHt'];

                        $caHotel = empty($_POST['caHotel']) ? null : $_POST['caHotel'];

                        // $caHotel = $_POST['caHotel'];
                        $caRestauration = empty($_POST['caRestauration']) ? null : $_POST['caRestauration'];
                        $caBar = empty($_POST['caBar']) ? null : $_POST['caBar'];
                        $ebe = empty($_POST['ebe']) ? null : $_POST['ebe'];
                        $nbChambres = empty($_POST['nbChambres']) ? null : $_POST['nbChambres'];
                        $tauxOccupation = empty($_POST['tauxOccupation']) ? null : $_POST['tauxOccupation'];
                        $prixMoyenChambres = empty($_POST['prixMoyenChambre']) ? null : $_POST['prixMoyenChambre'];
                        $nbPlacesInterieur = empty($_POST['nbPlacesInterieur']) ? null : $_POST['nbPlacesInterieur'];
                        $nbPlacesTerrasse = empty($_POST['nbPlacesTerrasse']) ? null : $_POST['nbPlacesTerrasse'];
                        $horairesOuverture = $_POST['horairesOuverture'];
                        $fermetureHebdo = $_POST['fermetureHebdo'];
                        $conges = $_POST['conges'];
                        $pLimonade = empty($_POST['pLimonade']) ? null : $_POST['pLimonade'];
                        $qBiereAn = $_POST['qBiereAn'];
                        $qCafeSemaine = $_POST['qCafe'];
                        $nbSalaries = empty($_POST['nbSalaries']) ? null : $_POST['nbSalaries'];
                        $fermeSoir = empty($_POST['fermeSoir']) ? null : $_POST['fermeSoir'];
                        $lic4 = empty($_POST['lic4']) ? null : $_POST['lic4'];
                        $gaineExtraction = empty($_POST['gaineExtraction']) ? null : $_POST['gaineExtraction'];
                        $climatisation = empty($_POST['climatisation']) ? null : $_POST['climatisation'];
                        $terrasse = empty($_POST['terrasse']) ? null : $_POST['terrasse'];
                        $veranda = empty($_POST['veranda']) ? null : $_POST['veranda'];
                        $bureau = empty($_POST['bureau']) ? null : $_POST['bureau'];
                        $parking = empty($_POST['parking']) ? null : $_POST['parking'];
                        $alaune = empty($_POST['alaune']) ? null : $_POST['alaune'];


                        $model->insertGood(
                            $prix,
                            $typeCommerce,
                            $reference,
                            $description,
                            $secteur,
                            $categorie,
                            $caTotalHt,
                            $caHotel,
                            $caRestauration,
                            $caBar,
                            $ebe,
                            $nbChambres,
                            $tauxOccupation,
                            $prixMoyenChambres,
                            $nbPlacesInterieur,
                            $nbPlacesTerrasse,
                            $horairesOuverture,
                            $fermetureHebdo,
                            $conges,
                            $pLimonade,
                            $qBiereAn,
                            $qCafeSemaine,
                            $nbSalaries,
                            $fermeSoir,
                            $lic4,
                            $gaineExtraction,
                            $climatisation,
                            $terrasse,
                            $veranda,
                            $bureau,
                            $parking,
                            $alaune
                        );
                        $messageSuccess = "Bien enregistré";
                        header("Location:admin-annonces");
                    }
                } else {
                    $messageError = "Veuillez remplir tous les champs obligatoires";
                }
            }
        }
        // DETAILS GOOD

        if (isset($_POST['type'])) {
            if (isset($_POST['id'])) {
                $type = $_POST['type'];
                $s = $_POST['id'];
                $showDetails = $model->showDetails($type, $s);

                // $_SESSION['details'] = [$showDetails];
                // header("Location:admin");
                // var_dump($_SESSION['details']);
                // var_dump($showDetails);
            }
        }

        // DELETE A GOOD
        if (isset($_GET['showdetails'])) {
            $delete = $_GET['showdetails'];
            // $model->deleteAnnonceFavoris($delete);
            $model->deleteGood($delete);
            // if ($_GET['showdetails'])==="HÔTEL"
            header("Location:admin-annonces");
        }

        // MODIFY A GOOD

        if (isset($_GET['update'])) {
            if (isset($_POST['prix'])) {
                if (
                    !empty($_POST['prix'])
                    && !empty($_POST['typeCommerce'])
                    && !empty($_POST['reference'])
                    && !empty($_POST['description'])
                    && !empty($_POST['secteur'])
                    && !empty($_POST['caTotalHt'])
                ) {
                    $prix = $_POST['prix'];
                    $typeCommerce = $_POST['typeCommerce'];
                    $reference = $_POST['reference'];
                    $description = $_POST['description'];
                    $secteur = $_POST['secteur'];
                    $categorie = $_POST['categorie'];
                    $caTotalHt = $_POST['caTotalHt'];

                    $caHotel = empty($_POST['caHotel']) ? null : $_POST['caHotel'];

                    // $caHotel = $_POST['caHotel'];
                    $caRestauration = empty($_POST['caRestauration']) ? null : $_POST['caRestauration'];
                    $caBar = empty($_POST['caBar']) ? null : $_POST['caBar'];
                    $ebe = empty($_POST['ebe']) ? null : $_POST['ebe'];
                    $nbChambres = empty($_POST['nbChambres']) ? null : $_POST['nbChambres'];
                    $tauxOccupation = empty($_POST['tauxOccupation']) ? null : $_POST['tauxOccupation'];
                    $prixMoyenChambres = empty($_POST['prixMoyenChambre']) ? null : $_POST['prixMoyenChambre'];
                    $nbPlacesInterieur = empty($_POST['nbPlacesInterieur']) ? null : $_POST['nbPlacesInterieur'];
                    $nbPlacesTerrasse = empty($_POST['nbPlacesTerrasse']) ? null : $_POST['nbPlacesTerrasse'];
                    $horairesOuverture = $_POST['horairesOuverture'];
                    $fermetureHebdo = $_POST['fermetureHebdo'];
                    $conges = $_POST['conges'];
                    $pLimonade = empty($_POST['pLimonade']) ? null : $_POST['pLimonade'];
                    $qBiereAn = $_POST['qBiereAn'];
                    $qCafeSemaine = $_POST['qCafe'];
                    $nbSalaries = empty($_POST['nbSalaries']) ? null : $_POST['nbSalaries'];
                    $fermeSoir = empty($_POST['fermeSoir']) ? null : $_POST['fermeSoir'];
                    $lic4 = empty($_POST['lic4']) ? null : $_POST['lic4'];
                    $gaineExtraction = empty($_POST['gaineExtraction']) ? null : $_POST['gaineExtraction'];
                    $climatisation = empty($_POST['climatisation']) ? null : $_POST['climatisation'];
                    $terrasse = empty($_POST['terrasse']) ? null : $_POST['terrasse'];
                    $veranda = empty($_POST['veranda']) ? null : $_POST['veranda'];
                    $bureau = empty($_POST['bureau']) ? null : $_POST['bureau'];
                    $parking = empty($_POST['parking']) ? null : $_POST['parking'];
                    $alaune = empty($_POST['alaune']) ? null : $_POST['alaune'];

                    $id = $_GET['update'];


                    $model->updateGood(
                        $prix,
                        $typeCommerce,
                        $reference,
                        $description,
                        $secteur,
                        $categorie,
                        $caTotalHt,
                        $caHotel,
                        $caRestauration,
                        $caBar,
                        $ebe,
                        $nbChambres,
                        $tauxOccupation,
                        $prixMoyenChambres,
                        $nbPlacesInterieur,
                        $nbPlacesTerrasse,
                        $horairesOuverture,
                        $fermetureHebdo,
                        $conges,
                        $pLimonade,
                        $qBiereAn,
                        $qCafeSemaine,
                        $nbSalaries,
                        $fermeSoir,
                        $lic4,
                        $gaineExtraction,
                        $climatisation,
                        $terrasse,
                        $veranda,
                        $bureau,
                        $parking,
                        $alaune,
                        $id
                    );
                    $messageSuccess = "Bien Modifié";
                    header("Location:admin-annonces");
                } else {
                    $messageError = "Veuillez remplir tous les champs obligatoires";
                }
            }
        }


        // ADMIN ACTUALITES

        // Stocker photo dans dossier picture

        if (isset($_FILES['photo'])) {
            if (!empty($_FILES['photo'])) {
                if (!empty($_FILES['photo']['tmp_name'])) {
                    $uniqueName = uniqid('', true);
                    $file = "$uniqueName.jpg";
                    $chemin = "src/public/picture/$file";
                    // $chemin = "images/$file";
                    $tmpName = $_FILES['photo']['tmp_name'];

                    move_uploaded_file($tmpName, $chemin);
                }
            }
        }




        // Insérer Actus
        if (!isset($_GET['updatenews'])) {
            if (isset($_POST['title'])) {
                if (
                    !empty($_POST['title'])
                    && !empty($_POST['text'])

                ) {
                    $title = $_POST['title'];
                    $text = $_POST['text'];
                    $date = date('y-m-d');
                    $text2 = empty($_POST['text2']) ? null : $_POST['text2'];
                    $photo = empty($_FILES['photo']) ? null : $file;

                    $video = empty($_POST['video']) ? null : $_POST['video'];
                    // $video = $_POST['video'];

                    $model->insertNews(
                        $date,
                        $title,
                        $text,
                        $photo,
                        $text2,
                        $video
                    );
                    $messageSuccess = "Bien enregistré";
                    header("Location:admin-actualites");
                } else {
                    $messageError = "Veuillez remplir tous les champs obligatoires";
                }
            }
        }




        // Détails Actu ------------------------------
        if (isset($_POST['detailNews'])) {
            $id = $_POST['detailNews'];
            $showNewsDetails = $model->showNewsDetails($id);
        }

        // Supprimer Actu
        if (isset($_GET['deletenews'])) {
            $id = $_GET['deletenews'];

            $showNewsDetails = $model->showNewsDetails($id);
            unlink("src/public/picture/" . $showNewsDetails[4]);
            $model->deleteNews($id);
            header('Location:admin-actualites');
        }

        // Modifier Actu
        if (isset($_GET['updatenews'])) {

            if (isset($_POST['title'])) {
                if (
                    !empty($_POST['title'])
                    && !empty($_POST['text'])
                ) {
                    // $date = date('Y-m-d');
                    $date = date('y-m-d');
                    $title = $_POST['title'];
                    $text = $_POST['text'];
                    // $photo = $_POST['photo'];
                    $photo = empty($_FILES['photo']) ? null : $file;
                    $text2 = empty($_POST['text2']) ? null : $_POST['text2'];
                    $video = empty($_POST['video']) ? null : $_POST['video'];
                    // $video = $_POST['video'];
                    $id = $_GET['updatenews'];

                    $showNewsDetails = $model->showNewsDetails($id);
                    unlink("src/public/picture/" . $showNewsDetails[4]);

                    $model->updateNews(
                        $date,
                        $title,
                        $text,
                        $photo,
                        $text2,
                        $video,
                        $id
                    );
                    $messageSuccess = "Article Modifié";
                    header("Location:admin-actualites");
                } else {
                    $messageError = "Veuillez remplir tous les champs obligatoires";
                }
            }
        }


        include(__DIR__ . "./../view/include/header.php");
        include(__DIR__ . "./../view/include/nav.php");
        include(__DIR__ . "./../view/include/alertBox.php");
        include(__DIR__ . "./../view/admin.php");

        // include(__DIR__ . "./../view/include/aside.php");
        include(__DIR__ . "./../view/include/footer.php");
    }
}
