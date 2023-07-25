<?php
class ProductsController
{
    private $vista;

    public function index()
    {
        session_start();
        if (isset($_SESSION['logedin']) && $_SESSION['logedin'] == true) {
            //incluimos al archivo de la plantilla para que este sea llmado y lleve como variable a vista
            $vista = 'app/View/admin/products/products-con.php';
            include_once("app/View/admin/vista-con-log.php");
        } else {
            $vista = 'app/View/admin/products/productos-sin.php';       
            include_once("app/View/admin/vista-sin-log.php");
        }
    }
}
