<?php

class HomeController
{

    public function __construct()
    {
    }

    public function manage()
    {


        $model = new Model();
        $images = $model->getImagesSlideHomePage();

        //  JAVASCRIPT
        if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == "style.css" || empty($_COOKIE['theme'])) { ?>
            <script type="text/javascript" src="src/public/js/light.js"></script>
        <?php };

        if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == "style2.css") { ?>
            <script type="text/javascript" src="src/public/js/light2.js"></script>
<?php };



        include(__DIR__ . "./../view/include/header.php");
        include(__DIR__ . "./../view/include/nav.php");
        include(__DIR__ . "./../view/home.php");
        include(__DIR__ . "./../view/include/footer.php");
    }
}
