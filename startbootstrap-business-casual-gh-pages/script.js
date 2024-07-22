//Referencias al formulario de iniciar sesión y el del registro
const loginForm = document.getElementById('loginForm');
const registerForm = document.getElementById('registerForm');


// Lógica para iniciar sesión
loginForm.addEventListener('submit', event => {
    event.preventDefault();
    const formData = new FormData(event.target);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = 'paginaPrincipal.php'; //Aqui pones la direccion del archivo de la pagina principal
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error al procesar la solicitud de inicio de sesión:', error);
        });
});




// Lógica de realizar el registro de usuario
registerForm.addEventListener('submit', event => {
    event.preventDefault();
    const formData = new FormData(event.target);

    fetch('registro.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            console.log(data);

            if (data.success) {
                alert(data.message);
                window.location.href = 'paginaPrincipal.php'; //Aqui pones la direccion del archivo de la pagina principal
            } else {
                alert(data.message);
            }
        })
        .catch(error => {
            console.error('Error al procesar la solicitud de registro:', error);
        });
});
