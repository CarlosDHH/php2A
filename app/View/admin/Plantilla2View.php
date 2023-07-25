<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Catando Ando Coffee Shop</title>
  <link rel="stylesheet" href="app/View/style.css" />
</head>

<body>
  <header class="header">
    <h1>Catando Ando Coffee Shop</h1>
    <nav class="navbar">
      <ul>
        <li><a href="http://localhost/php2a/">Inicio</a></li>
        <li><a href="http://localhost/php2a/?c=UserController&m=CallFormLogin">Login</a></li>
      </ul>
    </nav>
  </header>
  <section class="content">
    <!--Aqui va a ir todo lo que pueda ser contenido de la plantilla -->
    <?php include_once($vista) ?>
  </section>
  <footer class="footer">
    <h3>Derechos reservados...</h3>
  </footer>
</body>

</html>