<?php

class FeesController {

    public function __construct()
    {      
    }

    public function manage(){
        
        $model = new Model();
        $images2 = $model->getImagesSlideAside();
        $showLastNews = $model->showLastNews();
       

        

        include(__DIR__ . "./../controller/IncludeNewsletter.php");  
        include(__DIR__."./../view/include/header.php");
        include(__DIR__."./../view/include/nav.php");
        include(__DIR__ . "./../view/include/alertBox.php");
        include(__DIR__."./../view/fees.php");
        include(__DIR__."./../view/include/aside.php");
        include(__DIR__."./../view/include/footer.php");
    }
}