import './bootstrap';

import Dropzone from "dropzone";

// Evita que Dropzone se autoinicialice en todos los elementos de la página
Dropzone.autoDiscover = false;

// Crea una nueva instancia de Dropzone en el elemento con el ID "dropzone"
const dropzone = new Dropzone('#dropzone', {
    dictDefaultMessage: 'Sube aquí tu imagen',
    acceptedFiles: ".png, .jpg, .jpeg, .gif",
    addRemoveLinks: true,
    dictRemoveFile: 'Borrar Archivo',
    maxFiles: 1,
    uploadMultiple: false,

    // Configuración adicional y personalizada
    init: function() {
        // Verifica si ya hay una imagen cargada y la muestra como vista previa
        if (document.querySelector('[name="image"]').value.trim()) {
            const imagenPublicada = {};
            imagenPublicada.size = 1234;
            imagenPublicada.name = document.querySelector('[name="image"]').value;

            this.options.addedfile.call(this, imagenPublicada);
            this.options.thumbnail.call(this, imagenPublicada, `/uploads/${imagenPublicada.name}`);

            imagenPublicada.previewElement.classList.add('dz-success', 'dz-complete');
        }
    }
});

// Evento que se dispara cuando la carga del archivo ha sido exitosa
dropzone.on('success', function(file, response) {
    // Actualiza el valor del campo de formulario oculto "imagen" con el nombre del archivo cargado
    document.querySelector('[name="image"]').value = response.imagen;
});

// Evento que se dispara cuando se elimina un archivo de la zona de carga
dropzone.on('removedfile', function() {
    // Limpia el valor del campo de formulario oculto "imagen"
    document.querySelector('[name="image"]').value = '';
});
