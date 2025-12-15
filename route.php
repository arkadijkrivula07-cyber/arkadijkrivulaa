<?php
class Route {
    public function start() {
        $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
        $controllerName = !empty($url[1]) ? $url[1] : 'FileController';
        $method = !empty($url[2]) ? $url[2] : 'index';

        include 'controllers/' . $controllerName . '.php';
        $controller = new $controllerName();
        $controller->$method();
    }
}
?>
