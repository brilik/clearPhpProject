<?php


class Router
{
    private $routes;

    /**
     * Assign path routes array to property
     * Router constructor.
     */
    public function __construct()
    {
        $routesPath = ABSPATH . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * Return request string
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI']))
            return trim($_SERVER['REQUEST_URI'], '/');
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {

                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                $segments = explode('/', $internalRoute);

                $controllerName = array_shift($segments). 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action'.ucfirst(array_shift($segments));

                $parameters = $segments;

                $controllerFile = ABSPATH . "controller/$controllerName.php";

                if( file_exists($controllerFile)){
                    include_once ($controllerFile);
                } else {
                    die('Error! File controller not found. <a href="/">Main page</a>');
                }

                $controllerObject = new $controllerName;
//                $result = $controllerObject->$actionName();
                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);

                echo "<br><br>Class: $controllerName <br>";
                echo "Action: $actionName <br><br>";
                dd($segments);

                if($result != null){
                    break;
                }
            }
        }
    }
}