<?php

require_once "extensions/actions.php";
require_once ABSPATH . "/model/News.php";


class NewsController implements actions
{
    public function actionIndex()
    {
        // TODO: Implement actionIndex() method.
        $newsList = array();
        $newsList = News::getNewsList();
        dd($newsList);
//        echo "actionIndex: Список новостей.";
        return true;
    }

    public function actionList()
    {
        // TODO: Implement actionList() method.
        echo "NewsController actionList";
        return true;
    }

    public function actionView($category, $id)
    {
        // TODO: Implement actionView() method.
        echo 'Category: ' . $category . '<br>';
        echo 'ID: ' . $id . '<br>';
        echo "actionView: Просмотр одной новости" . '<hr>';
        return true;
    }

    public function actionArchiveList()
    {
        // TODO: Implement actionArchiveList() method.
        echo "NewsController actionArchiveList";
        return true;
    }
}