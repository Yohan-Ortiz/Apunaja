// Seleccionamos todos los inputs de tipo file
document.querySelectorAll('input[type="file"]').forEach((inputFile) => {
    // Seleccionamos el label y el ícono correspondiente
    const label = document.querySelector(`label[for="${inputFile.id}"]`);
    const icon = document.querySelector(`.boton[data-file-id="${inputFile.id}"] .icon i`);

    // Añadimos el evento 'change' a cada input
    inputFile.addEventListener('change', function(event) {
        const files = event.target.files; // Archivos seleccionados

        if (files.length > 0) {
            // Si hay archivos, cambiamos el texto y el color del ícono
            label.textContent = `Archivos seleccionados: ${files.length}`;
            label.style.color = "lightgreen"; // Indicador visual de éxito
            icon.style.color = "lightgreen"; // Cambiar color del ícono a verde
        } else {
            // Si no hay archivos, restauramos el texto original y color del ícono
            label.textContent = label.getAttribute("for").includes("1") ? "CARGAR FOTOGRAFÍAS" :
                                label.getAttribute("for").includes("2") ? "CARGAR DOCUMENTO" :
                                "CARGAR FIRMA/HUELLA";
            label.style.color = ""; // Restauramos el color original del label
            icon.style.color = ""; // Restauramos el color original del ícono
        }
    });
});