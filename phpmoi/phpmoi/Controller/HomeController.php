<?php

class HomeController {
    public function home() {
        // Load the home view
        include_once "Views/header.php";
        include "views/home.php";
        include_once "Views/footer.php";
    }
}
