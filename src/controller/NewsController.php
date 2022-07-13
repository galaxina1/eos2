<?php

class NewsController {

    public function __construct()
    {      
    }

    public function manage(){

        $model = new Model();
        $images2 = $model->getImagesSlideAside();
        $showNews = $model->showNews();
        $showLastNews = $model->showLastNews();

        // Détails Actu ------------------------------
        if (isset($_POST['detailNews'])) {
            $id = $_POST['detailNews'];
            $showNewsDetails = $model->showNewsDetails($id);
        }

        if(isset($_GET['recentnews'])) {
            $id = $_GET['recentnews'];
            $showNewsDetails = $model->showNewsDetails($id);
        }



        include(__DIR__ . "./../controller/IncludeNewsletter.php");
        
        include(__DIR__."./../view/include/header.php");
        include(__DIR__."./../view/include/nav.php");
        include(__DIR__ . "./../view/include/alertBox.php");
        include(__DIR__."./../view/news.php");
        include(__DIR__."./../view/include/aside.php");
        include(__DIR__."./../view/include/footer.php");
    }
}