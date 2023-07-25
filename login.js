function toggleForms() {
  const loginForm = document.getElementById('login-form');
  const createAccountForm = document.getElementById('create-account-form');

  loginForm.style.display = loginForm.style.display === 'none' ? 'block' : 'none';
  createAccountForm.style.display = createAccountForm.style.display === 'none' ? 'block' : 'none';

  // Ocultar el mensaje de error de contraseñas no coincidentes al cambiar de formulario
  document.querySelector('.password-error').style.display = 'none';
}

function validateSignUpForm() {
  const password1 = document.getElementById('signup-password').value;
  const password2 = document.getElementById('confirm-password').value;
  const passwordError = document.querySelector('.password-error');

  // Validar si las contraseñas coinciden
  if (password1 !== password2) {
    passwordError.style.display = 'block';
    return false; // Detener el envío del formulario
  } else {
    passwordError.style.display = 'none';
    return true; // Permitir el envío del formulario
  }
}

function validateLoginForm() {
  // Aquí puedes realizar otras validaciones para el formulario de inicio de sesión si lo necesitas
  // Por ejemplo, verificar si el correo electrónico es válido o si la contraseña cumple con ciertos requisitos.
  // En este ejemplo, no hemos agregado validaciones adicionales para el formulario de inicio de sesión.
  return true; // Permitir el envío del formulario
}
