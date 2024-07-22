const form = document.querySelector('form');
const errorMessage = document.getElementById('error-message');

form.addEventListener('submit', (event) => {
  event.preventDefault(); // Evita el envío del formulario por defecto (detalle)

  const username = document.getElementById('username').value;
  const password = document.getElementById('password').value;

  const params = new URLSearchParams();
  params.append('User', username);
  params.append('Password', password);

  fetch('conexion.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded'
    },
    body: params.toString()
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      // Redirigir al usuario a la página principal
      window.location.href = 'index.html';
    } else {
      errorMessage.style.display = 'block';
      errorMessage.textContent = data.message; // Esto muestra el mensaje de error específico
    }
  })
  .catch(error => {
    console.error('Error:', error);
    errorMessage.textContent = 'Error al iniciar sesión. Por favor, inténtalo de nuevo.';
    errorMessage.style.display = 'block';
  });
});