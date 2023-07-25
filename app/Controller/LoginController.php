<?php
class LoginController
{
    private $vista;
    
    public function login()
    {
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            //incluimos al archivo de la plantilla para que este sea llmado y lleve como variable a vista
            $vista = 'app/View/admin/presents/IndexPresentsView.php';
            include_once("app/View/admin/PlantillaView.php");
        } else {
            $vista = "app/View/admin/login/login.php";
            include_once("app/View/admin/vista-sin-log.php");
        }
    }
}