    $(document).ready(function() {
    fetch('./index.php?controlador=encargado&accion=Todos')
        .then(response => response.json())
        .then(data => {
            if (Array.isArray(data) && data.length > 0) {
                const cuerpoTabla = document.getElementById('Encargado');
                let tablaHTML = '';
                
                data.forEach(encargado => {
                    tablaHTML += `
                        <tr>
                            <td>${encargado.Nombre} ${encargado.Apellido1} ${encargado.Apellido2}</td>
                            <td>${encargado.Cedula}</td>
                            <td>${encargado.Telefono}</td>
                            <td>${encargado.Correo}</td>
                            <td>
                                <button class="btn btn-editar"><i class="bi bi-pencil"></i></button>
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
});
    



    const toggleSidebarBtn = document.getElementById('toggleSidebarBtn');
    const sidebar = document.querySelector('.sidebar');

    toggleSidebarBtn.addEventListener('click', () => {
        sidebar.classList.toggle('show');
    });