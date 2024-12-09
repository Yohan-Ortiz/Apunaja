document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menu-toggle');
    const navbar = document.getElementById('navbar');

    // Función para alternar el menú
    menuToggle.addEventListener('click', (e) => {
        e.stopPropagation();
        navbar.classList.toggle('active');
    });

    // Cerrar menú al hacer clic fuera
    document.addEventListener('click', (event) => {
        if (!navbar.contains(event.target) && 
            !menuToggle.contains(event.target) && 
            navbar.classList.contains('active')) {
            navbar.classList.remove('active');
        }
    });
});