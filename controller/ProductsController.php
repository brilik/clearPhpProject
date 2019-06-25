<?php

require_once "extensions/actions.php";


class ProductsController implements actions
{

    public function actionIndex()
    {
        // TODO: Implement actionIndex() method.
        echo "ProductsController actionList";
        return true;
    }

    public function actionList()
    {
        // TODO: Implement actionList() method.
        echo "ProductsController actionList";
        return true;
    }

    public function actionView($category, $id)
    {
        // TODO: Implement actionView() method.
        echo "ProductsController actionView";
        return true;
    }

    public function actionArchiveList()
    {
        // TODO: Implement actionArchiveList() method.
        echo "ProductsController actionArchiveList";
        return true;
    }
}