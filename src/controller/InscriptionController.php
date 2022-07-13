
<?php

class InscriptionController
{

    public function __construct()
    {
    }

    public function manage()
    {


        $model = new Model();
        $images2 = $model->getImagesSlideAside();
        $showLastNews = $model->showLastNews();

        if (isset($_SESSION['name'])) {
            header("Location:accueil");
        }

        if (isset($_GET['recentnews'])) {
            $id = $_GET['recentnews'];
            $showNewsDetails = $model->showNewsDetails($id);
        }




        if (isset($_POST['email'])) {
            if (
                !empty($_POST['email'])
                && !empty($_POST['password'])
                && !empty($_POST['name'])
            ) {
                $emailAccount = $_POST['email'];
                // Has email a Valid form ?
                if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $emailAccount)) {
                    // Verify if email already exists
                    $verifyEmailInscription = $model->verifyEmailInscription($emailAccount);

                    if ($verifyEmailInscription[0] !== "0") {
                        $messageError = "Cet email existe déjà";
                    } else {

                        $email = strip_tags($_POST['email']);
                        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                        $name = strip_tags($_POST['name']);

                        $model->inscription($email, $password, $name);
                        $messageSuccess = " Vous êtes inscrit";
                    }
                } else {
                    $messageError = "Adresse email non valide";
                }
            } else {
                $messageError = "Veuillez remplir tous les champs";
            }
        }







        include(__DIR__ . "./../controller/IncludeNewsletter.php");

        include(__DIR__ . "./../view/include/header.php");
        include(__DIR__ . "./../view/include/nav.php");
        include(__DIR__ . "./../view/include/alertBox.php");
        include(__DIR__ . "./../view/inscription.php");

        include(__DIR__ . "./../view/include/aside.php");
        include(__DIR__ . "./../view/include/footer.php");
    }
}
