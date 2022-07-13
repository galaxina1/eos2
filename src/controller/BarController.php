<?php

class BarController
{

    public function __construct()
    {
    }

    public function manage()
    {

        $model = new Model();
        $images2 = $model->getImagesSlideAside();
        $showBar = $model->show(4);
        $showLastNews = $model->showLastNews();

        if (isset($_GET['type']) && isset($_GET['alaune'])) {
            if (!empty($_GET['alaune'])) {
                $type = $_GET['type'];
                $s = $_GET['alaune'];
                $showAlaUne = $model->alaUne($type, $s);
            }
        }


        if (isset($_GET['type']) && isset($_GET['id'])) {
            // if (isset($_POST['id'])) {
            $type = $_GET['type'];
            $s = $_GET['id'];
            $showDetails = $model->showDetails($type, $s);
        }

        if (isset($_GET['recentnews'])) {
            $id = $_GET['recentnews'];
            $showNewsDetails = $model->showNewsDetails($id);
        }

        // INSERT FAVORITE
        if (isset($_SESSION['name'])) {
            if (isset($_GET['favoris'])) {
                $bienId = $_GET['favoris'];
                $userId = $_SESSION['id'];

                $verifyFavoris = $model->verifyFavorite($bienId,$userId);
                if($verifyFavoris[0]=='0') { 
                $model->insertFavorite($bienId, $userId);
                $messageSuccess = "Bien ajouté aux favoris";
                }else { $messageError = "Ce bien est déjà dans vos favoris.";}

            }
        }
        // RECUPERATION FAVORIS
        // if(isset($_SESSION['name'])) {
        //     $id= $_SESSION['id'];
        //     $showFavoris = $model->getFavoris($id);
        // }




        include(__DIR__ . "./../controller/IncludeNewsletter.php");

        include(__DIR__ . "./../view/include/header.php");
        include(__DIR__ . "./../view/include/nav.php");
        include(__DIR__ . "./../view/include/alertBox.php");
        include(__DIR__ . "./../view/bar.php");
        // include(__DIR__ . "./../view/include/main.php");
        include(__DIR__ . "./../view/include/aside.php");
        include(__DIR__ . "./../view/include/footer.php");
    }
}
