<?php


interface actions
{
    public function actionIndex();

    public function actionList();

    public function actionView($category, $id);

    public function actionArchiveList();
}