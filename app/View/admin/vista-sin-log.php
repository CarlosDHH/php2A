<!DOCTYPE html>
<html lang="en">
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/sin-log/vista-sin-log.css">
    <link rel="stylesheet" href="./public/productos/productos-sin.css">
    <link rel="stylesheet" href="./public/login/login.css">
</head>
<body>
    <header class="header">
        <div class="base-header">
            <div class="logo">
                <img src="./public/src/Logosin.png" alt="Logo de la empresa" width="120px" height="120px">
            </div>            
            <div class="options">
                <nav class="navbar">
                    <ul class="centered-list">
                        <li><a href="http://localhost/php2a/?c=UserController&m=CallFormInicio">Inicio</a></li>
                        <li><a href="http://localhost/php2a/?c=ProductsController&m=index">Productos</a></li>
                        <li><a href="http://localhost/php2a/?c=UserController&m=CallFormAcerca">Acerca de</a></li>
                    </ul>
                    <ul class="ul-log">
                        <li><a href="http://localhost/php2a/?c=LoginController&m=login">Iniciar Sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>

    </header>
    
  <section class="content">
    <!--Aqui va a ir todo lo que pueda ser contenido de la plantilla -->
    <?php include_once($vista) ?>
  </section>

    <footer class="footer">
        <div class="base-footer">
            <div class="horizer">
                <div class="social">
                    <div class="title-social"><h4>REDES SOCIALES</h4></div>
                
                    <div class="red-social">
                        <a href="#" class="fa fa-facebook">facebook</a>
                        <a href="#" class="fa fa-instagram">Instagram</a>
                        <a href="#" class="fa fa-twitter">Twitter</a>
                        <a href="#" class="fa fa-youtube">Youtube</a>
                    </div>
                </div>
                <div class="links">
                    <ul class="nav-links">
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Colitas Felices </a></li>
                        <li><a href="#">Doshboard</a></li>       
                    </ul>
                </div>
                
                
                <div class="information">
                    <a href="#">Privacidad</a> 
                    <a href="#">Terminos y condiciones</a>
                </div>
                <div class="space"></div>
                <div class="contact">
                    <ul>
                        <li>Contacto</li>
                        <li>example@gmail.com </li>
                        <li>7711456790</li>
                        <li>Huejutla de Reyes Hidalgo</li>
                    </ul>    
                </div>
                <div class="logo-footer">
                    <img src="./public/src/Logo.png" alt="Logo de la empresa" width="120px" height="120px">
                </div>
            </div>
            
            <div class="derechos"><small>&copy; 2023 <b></b> - Todos los Derechos Reservados.</small></div>
        </div>
    </footer>
</body>
</html>