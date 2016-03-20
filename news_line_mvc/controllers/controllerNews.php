<?php

class controllerNews {

    public function actionAll() {
        $view = new Viewer();
        $news = NewsArcticle::getAllNews();

        $view->items = $news;
        $view->display('allNews.php');

    }

    public function actionOne() {
        $id = $_GET['id'];
        $view = new Viewer();
        $new = NewsArcticle::getOneNew($id);

        $view->item = $new;
        $view->display('fullNew.php');
    }

}
