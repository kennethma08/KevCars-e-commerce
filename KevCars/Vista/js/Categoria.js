$(document).ready(function () {
    fetch('./index.php?controlador=categoria&accion=Todos1')
        .then(response => response.json())
        .then(data => {
            if (Array.isArray(data) && data.length > 0) {
                const cuerpoTabla = document.getElementById('Categoria');
                let tablaHTML = '';

                data.forEach(categorias => {
                    tablaHTML += `
                        <tr>
                            <td>${categorias.IdCategoria}</td>
                            <td>${categorias.descripcion}</td>
                            <td>
                                <button class="btn btn-Detalles" @click="mostrarDetalles(cliente)><i class="bi bi-pencil"></i></button>
                                <button class="btn btn-eliminar"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                    `;
                });

                cuerpoTabla.innerHTML = tablaHTML;

                $('#myTable').DataTable({
                    "pageLength": 4,
                    "paging": true,
                    "language": {
                        "search": "",
                        "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
                    }
                }).on('init.dt', function () {
                    $('.dataTables_filter input').attr('placeholder', 'Buscar');
                });
            } else {
                console.error('La respuesta no es un array válido:', data);
            }
        })
        .catch(error => console.error('Error al obtener los datos:', error));

    const app = Vue.createApp({
        methods: {
            mostrarSweetAlert() {
                Swal.fire({
                    title: 'Categoria Agregada',
                    text: 'La categoria se ha agregado correctamente.',
                    icon: 'success',
                    showCancelButton: false,
                    confirmButtonText: 'OK',
                }).then((result) => {
                    if (result.isConfirmed) {
                        const form = document.getElementById('formulario');
                        form.submit(); // Envía el formulario después de hacer clic en OK
                    }
                });
            }
        }
    });

    const vm = app.mount('#SweetCorrecto');

    const sweetButton = document.getElementById('SweetCorrecto');

    sweetButton.addEventListener('click', function (event) {
        event.preventDefault();
        vm.mostrarSweetAlert();
    });
    
   
});

    const toggleSidebarBtn = document.getElementById('toggleSidebarBtn');
    const sidebar = document.querySelector('.sidebar');

    toggleSidebarBtn.addEventListener('click', () => {
        sidebar.classList.toggle('show');
    });


