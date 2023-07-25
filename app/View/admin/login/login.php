
  <div class="container">
    <div class="slider-container">
      <div class="slider">
        <img src="./public/src/fondo.png" alt="Imagen 1">
      </div>
    </div>
    <div class="login-container">
      <div class="login-form bradius" id="login-form">
        <h2>Iniciar sesión</h2>
        <form onsubmit="return validateLoginForm()" class="forminput">
          <label for="email">Correo:</label>
          <input type="email" id="email" required>
          <label for="password">Contraseña:</label>
          <input type="password" id="password" required>
          <button type="submit">Iniciar sesión</button>
          <p class="create-account-link">¿No tienes una cuenta? <a href="#" onclick="toggleForms()">Crear cuenta</a></p>
        </form>
      </div>
      <div class="create-account-form bradius" id="create-account-form" style="display: none;">
        <h2>Crear cuenta</h2>
        <p class="password-error" style="display: none; color: red;">Las contraseñas no coinciden.</p>
        <form onsubmit="return validateSignUpForm()" class="forminput">
          <label for="username">Nombre de usuario:</label>
          <input type="text" id="username" required pattern="[A-Za-z ]+" title="Solo letras y espacios permitidos">
          <label for="email">Correo:</label>
          <input type="email" id="signup-email" required>
          <label for="password">Contraseña:</label>
          <input type="password" id="signup-password" required>
          <label for="confirm-password">Confirmar contraseña:</label>
          <input type="password" id="confirm-password" required>
          <button type="submit">Crear cuenta</button>
          <p class="login-link">¿Ya tienes una cuenta? <a href="#" onclick="toggleForms()">Iniciar sesión</a></p>
        </form>
        
      </div>
    </div>
  </div>
  <script src="login.js"></script>