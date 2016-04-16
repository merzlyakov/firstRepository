<?php


class ControllerAdmin {

    public function actionPut() {

        if (isset($_POST['title']) && isset($_POST['new']) && isset($_POST['date'])) {
            $res = NewsArcticle::putNew($_POST['title'], $_POST['new'], $_POST['date']);
        }
        $view = new Viewer();
        $view->res = 1;
        $view->display('addNew.php');
    }

}