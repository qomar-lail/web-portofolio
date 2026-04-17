<?php

require_once '../app/models/Project.php';

class ProjectController {
    public function index() {
        $model = new Project();
        $projects = $model->getAll();

        require_once '../app/views/layout/header.php';
        require_once '../app/views/project.php';
        require_once '../app/views/layout/footer.php';
    }
}