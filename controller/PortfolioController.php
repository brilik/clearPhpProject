<?php

require_once "extensions/actions.php";


class PortfolioController implements actions
{

    public function actionIndex()
    {
        // TODO: Implement actionIndex() method.
        echo "PortfolioController actionIndex";
        return true;
    }

    public function actionList()
    {
        // TODO: Implement actionList() method.
        echo "PortfolioController actionList";
        return true;
    }

    public function actionView($category, $id)
    {
        // TODO: Implement actionView() method.
    }

    public function actionArchiveList()
    {
        // TODO: Implement actionArchiveList() method.
    }
}