function mostrarSeccion(id) {
    // Oculta todas las secciones
    document.querySelectorAll('.seccion').forEach((seccion) => {
        seccion.classList.remove('active');
    });
    
    // Muestra la sección seleccionada
    document.getElementById(id).classList.add('active');
}

// Muestra la primera sección por defecto al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    mostrarSeccion('PozosyJagüeyes');
});
