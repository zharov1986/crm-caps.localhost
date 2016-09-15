<?php

require_once __DIR__ . '/../models/Zayavki.php';

class ZayavkiController
{

    public function actionAll()
    {
        $items = Zayavki::getAll();
        include __DIR__ . '/../views/zayavki/all.php';
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = Zayavki::getOne($id);
        include __DIR__ . '/../views/zayavki/one.php';
    }

}