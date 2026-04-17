<?php

class Router {
    public function handle($url) {
        if ($url == 'home') {
            require_once '../app/controllers/HomeController.php';
            $controller = new HomeController();
            $controller->index();
        } elseif ($url == 'project') {
            require_once '../app/controllers/ProjectController.php';
            $controller = new ProjectController();
            $controller->index();
        } elseif($url == 'contact'){
            require_once '../app/controllers/ContactController.php';
            $controller = new ContactController();
            $controller->index();
        }else {
            echo "404 Not Found";
        }
    }
}