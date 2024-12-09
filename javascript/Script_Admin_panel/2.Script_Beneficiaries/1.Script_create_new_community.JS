 // Objeto actualizado con la relación exacta entre municipios y resguardos
 const resguardosPorMunicipio = {
    "RIOHACHA": [
        "No resguardado",
        "Las Delicias",
        "Monte Harmon",
        "Mañature",
        "Soldado Parate Bien",
        "Una Apuchon",
        "Perratpu24"
    ],
    "ALBANIA": [
        "No resguardado",
        "Cuatro De Noviembre"
    ],
    "BARRANCAS": [
        "No resguardado",
        "El Zahino Guayabito Muriaytuy",
        "Provincial",
        "San Francisco",
        "Trupiogacho-La Meseta",
        "Cerrodeo"
    ],
    "DIBULLA": [
        "No resguardado",
        "Kogui-Malayo-Arhuaco"
    ],
    "DISTRACCIÓN": [
        "No resguardado",
        "Caicemapa",
        "Potrerito"
    ],
    "FONSECA": [
        "No resguardado",
        "Mayabangloma 45"
    ],
    "HATONUEVO": [
        "No resguardado",
        "Wayuu De Lomamato",
        "Cerro De Hatonuevo",
        "Wayuu Rodelto El Pozo"
    ],
    "MAICAO": [
        "No resguardado",
        "Alta Y Media Guajira",
        "Okochi",
        "Soldado Parate Bien"
    ],
    "MANAURE": [
        "No resguardado",
        "Alta Y Media Guajira"
    ],
    "SAN JUAN DEL CESAR": [
        "No resguardado",
        "Kogui-Malayo-Arhuaco"
    ]
};

function actualizarResguardos() {
    // Obtener el municipio seleccionado
    const municipio = document.getElementById("Municipio").value;
    
    // Obtener el select de resguardos
    const resguardoSelect = document.getElementById("Resguardo");
    
    // Limpiar las opciones actuales
    resguardoSelect.innerHTML = "";
    
    // Agregar la opción por defecto
    const optionDefault = document.createElement("option");
    optionDefault.text = "Seleccione un resguardo";
    optionDefault.value = "";
    resguardoSelect.add(optionDefault);
    
    // Si hay un municipio seleccionado, agregar sus resguardos correspondientes
    if (municipio in resguardosPorMunicipio) {
        const resguardos = resguardosPorMunicipio[municipio];
        resguardos.forEach(function(resguardo) {
            const option = document.createElement("option");
            option.text = resguardo;
            option.value = resguardo;
            resguardoSelect.add(option);
        });
    }
}

// Función para validar el formulario antes de enviar
function validarFormulario() {
    const campos = [
        "Municipio",
        "Resguardo",
        "Comunidad",
        "Latitud",
        "Longitud",
        "name",
        "apellido",
        "fecha",
        "Rol",
        "Documento"
    ];

    let valido = true;
    campos.forEach(campo => {
        const elemento = document.getElementById(campo);
        if (!elemento.value) {
            alert(`Por favor, complete el campo ${campo}`);
            valido = false;
        }
    });

    return valido;
}

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