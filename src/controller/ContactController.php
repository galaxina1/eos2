

<?php
// var_dump($privacy);



class ContactController
{

    public function __construct()
    {
    }

    public function manage()
    {

        $model = new Model();
        $images2 = $model->getImagesSlideAside();
        $showLastNews = $model->showLastNews();

        if (isset($_GET['recentnews'])) {
            $id = $_GET['recentnews'];
            $showNewsDetails = $model->showNewsDetails($id);
        }

        // FORM CONTACT
        // Insert Contact

        if (isset($_POST['name'])) {
            if (
                !empty($_POST['name'])
                && !empty($_POST['email'])
                && !empty($_POST['subject'])
                && !empty($_POST['message'])
                && !empty($_POST['privacy'])
            ) {
                $name = strip_tags($_POST['name']);
                $phone = empty($_POST['phone']) ? null : $_POST['phone'];

                $address = empty($_POST['address']) ? null : strip_tags($_POST['address']);
                $city = empty($_POST['city']) ? null : strip_tags($_POST['city']);
                $subject = strip_tags($_POST['subject']);



                $email = strip_tags($_POST['email']);
                
                    $society = empty($_POST['society']) ? null : strip_tags($_POST['society']);
                    $zipcode = empty($_POST['zipCode']) ? null : $_POST['zipCode'];
                    $country = empty($_POST['country']) ? null : strip_tags($_POST['country']);
                    $message = strip_tags($_POST['message']);
                    $privacy = $_POST['privacy'];
                    $date = date('Y-m-d H:i');


                    $model->insertContact(
                        $name,
                        $phone,
                        $address,
                        $city,
                        $subject,
                        $email,
                        $society,
                        $zipcode,
                        $country,
                        $message,
                        $privacy,
                        $date
                    );
                    $messageSuccess = "Merci pour votre contact";
                
                // header("Location:admin");
            } else {
                $messageError = "Veuillez remplir tous les champs obligatoires";
            }
        }












        include(__DIR__ . "./../controller/IncludeNewsletter.php");

        include(__DIR__ . "./../view/include/header.php");
        include(__DIR__ . "./../view/include/nav.php");
        include(__DIR__ . "./../view/include/alertBox.php");
        include(__DIR__ . "./../view/contact.php");
        include(__DIR__ . "./../view/include/aside.php");
        include(__DIR__ . "./../view/include/footer.php");
    }
}
