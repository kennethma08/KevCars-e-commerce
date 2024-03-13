
    // JavaScript para mostrar/ocultar las opciones de la tienda al hacer clic
    const tiendaLink = document.querySelector('.tienda-link');
    const tiendaOpciones = document.querySelector('.tienda-opciones');

    // Variable para rastrear el estado del menú desplegable
    let menuVisible = false;

    // Función para mostrar las opciones de la tienda
    const mostrarMenu = () => {
        tiendaOpciones.style.display = 'flex';
    };

    // Función para ocultar las opciones de la tienda
    const ocultarMenu = () => {
        tiendaOpciones.style.display = 'none';
    };

    // Evento 'click' en el enlace de la tienda
    tiendaLink.addEventListener('click', (event) => {
        event.preventDefault(); // Evita que el enlace se abra
        menuVisible = !menuVisible; // Cambia el estado del menú

        if (menuVisible) {
            mostrarMenu(); // Muestra el menú si está visible
        } else {
            ocultarMenu(); // Oculta el menú si no está visible
        }
    });

    // Evento para ocultar el menú cuando se hace clic en algún lugar fuera de él
    document.addEventListener('click', (event) => {
        const isClickInsideMenu = tiendaLink.contains(event.target) || tiendaOpciones.contains(event.target);

        if (!isClickInsideMenu && menuVisible) {
            // Oculta el menú solo si está visible y se hace clic fuera de él
            ocultarMenu();
            menuVisible = false;
        }
    });

