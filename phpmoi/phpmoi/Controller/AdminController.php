<?php

class AdminController {
    public function dashboard() {
        include_once "Views/header.php";
        require_once "views/admin/dashboard.php";
        include_once "Views/footer.php";
    }

}