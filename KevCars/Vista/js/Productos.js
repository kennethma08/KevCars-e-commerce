$(document).ready(function () {
  $('#myTable').DataTable({
    "pageLength": 4,
    "bPaginate": true,
    "language": {
      "search": "",
      "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/es-ES.json"
    },
  }).on('init.dt', function () {
    $('.dataTables_filter input').attr('placeholder', 'Buscar');
  });

  const sweetButton = document.getElementById('SweetCorrecto');
  sweetButton.addEventListener('click', function (event) {
    event.preventDefault();
    mostrarSweetAlert();
  });

  function mostrarSweetAlert() {
    Swal.fire({
      title: 'Producto agregado',
      text: 'El producto se ha agregado correctamente.',
      icon: 'success',
      showCancelButton: false,
      confirmButtonText: 'OK',
    }).then((result) => {
      if (result.isConfirmed) {
        const form = document.getElementById('formulario');
        form.submit();
      }
    });
  }
});