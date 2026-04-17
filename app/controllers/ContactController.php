<?php
class ContactController {
    public function index() {
        require_once '../app/views/layout/header.php';
        require_once '../app/views/Contact.php';
        require_once '../app/views/layout/footer.php';
    }
}