
<?php

// var_dump($_SESSION['password']);
// var_dump($_SESSION['id']);
// var_dump(session_id());


class MyAccountController
{

    private $model;

    public function __construct()
    {

        $this->model = new Model();
    }

    public function manage()
    {

        if (isset($_SESSION['admin'])) {
            header('Location:accueil');
        }

        // $model = new Model();
        $images2 = $this->model->getImagesSlideAside();
        $showLastNews = $this->model->showLastNews();
        $biens = $this->model->goods();
        // $countBiens = $this->model->countBiens();






        // header('Location:moncompte');

        // var_dump ($admin);
        // ACTUALITES
        if (isset($_GET['recentnews'])) {
            $id = $_GET['recentnews'];
            $showNewsDetails = $this->model->showNewsDetails($id);
        }

        // CONNEXION
        if (isset($_POST['emailConnect'])) {
            
            if (empty($_POST['emailConnect']) || empty($_POST['passwordConnect'])) {
                $messageError = " Merci de renseigner tous les champs.";
            } else {

                $user = $this->model->getUser($_POST['emailConnect']);

                if (empty($user) || !password_verify($_POST['passwordConnect'], $user['password_account']))
                 {     
                    $messageError = "Email ou mot de passe incorrect";
                } else if ($user[5] === "1") {
                    $_SESSION['id'] = $user['id_user_account'];
                    $_SESSION['name'] = $user['name_account'];
                    $_SESSION['admin'] = $user[5];
                    $token = uniqid().session_id();
                    $_SESSION['token'] = $token;
                    header('Location:admin');
                } else {
                    $_SESSION['id'] = $user['id_user_account'];
                    $_SESSION['name'] = $user['name_account'];
                    $_SESSION['dateInscription'] = $user['date_inscription_account'];
                    $messageSuccess = "Vous êtes connecté";
                }
            
            }
        }
        // FAVORITES
        // Recuperate Favorites  
        if (isset($_SESSION['name'])) {
            $id = $_SESSION['id'];
            $showFavoris = $this->model->getFavorites($id);
        }

        // Delete Favorite
        if (isset($_GET['deletefavori'])) {
            $idFavori = $_GET['deletefavori'];
            $this->model->deleteFavorite($idFavori);
            header('Location:moncompte');
        }

        // INSCRIPTION NEWSLETTER

        if (isset($_POST['emailNewsletter'])) {
            if (
                !empty($_POST['emailNewsletter'])
                && !empty($_POST['checkNewsletter'])
            ) {
                $emailNewsletter = $_POST['emailNewsletter'];
                $verify = $this->model->verifyEmailNewsletter($emailNewsletter);
                // echo $verify[0];

                if ($verify[0] !== "0") {
                    $messageError = "Vous êtes déjà inscrit à notre newsletter";
                } else {



                    // $emailNewsletter = $_POST['emailNewsletter'];
                    $checkNewsletter = $_POST['checkNewsletter'];
                    $dateNewsletter = date('Y-m-d H:i');

                    $this->model->Newsletter(
                        $emailNewsletter,
                        $checkNewsletter,
                        $dateNewsletter
                    );
                    $messageSuccess = "Merci pour votre inscription. Votre email a bien été envoyé";
                } // header("Location:admin");
            } else {
                $messageError = "Veuillez renseigner votre email et cocher la case de confidentialité";
            }
        }

        // SUPPIMER MON COMPTE
        if (isset($_POST['deleteAccount'])) {
            $idAccount = $_SESSION['id'];
            $this->model->deleteAccount($idAccount);
            session_destroy();
            header('Location:accueil');
        }




        // include(__DIR__ . "./../controller/include.php");

        include(__DIR__ . "./../view/include/header.php");
        include(__DIR__ . "./../view/include/nav.php");
        include(__DIR__ . "./../view/include/alertBox.php");
        include(__DIR__ . "./../view/myAccount.php");
        include(__DIR__ . "./../view/include/aside.php");
        include(__DIR__ . "./../view/include/footer.php");
    }
}
