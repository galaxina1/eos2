<?php
// INSCRIPTION NEWSLETTER

if (isset($_POST['emailNewsletter'])) {
    if (
        !empty($_POST['emailNewsletter'])
        && !empty($_POST['checkNewsletter'])
    ) {

        $emailNewsletter = $_POST['emailNewsletter'];
        $verify = $model->verifyEmailNewsletter($emailNewsletter);
        // echo $verify[0];

        if ($verify[0] !== "0") {
            $messageError = "Vous êtes déjà inscrit à notre newsletter";
        } else {



            // $emailNewsletter = $_POST['emailNewsletter'];
            $checkNewsletter = $_POST['checkNewsletter'];
            $dateNewsletter = date('Y-m-d H:i');

            $model->Newsletter(
                $emailNewsletter,
                $checkNewsletter,
                $dateNewsletter
            );
            $messageSuccess = "Merci pour votre inscription. Votre email a bien été envoyé";
        }
    } else {
        $messageError = "Veuillez renseigner votre email et cocher la case de confidentialité";
    }
}
