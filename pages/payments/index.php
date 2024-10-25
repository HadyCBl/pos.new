<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/microsystem.png">
    <title>Pagos</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <style>
    /* Transición suave al mostrar/ocultar el footer */
    footer {
        transition: transform 0.3s ease-in-out;
    }

    /* Ocultar footer */
    .footer-hidden {
        transform: translateY(100%);
    }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
    <!-- Cabecera con logo -->
    <header class="bg-white shadow p-4">
        <div class="container mx-auto flex items-center justify-between">
            <img src="../../assets/img/microsystem.png" alt="Logo" class="h-12">
            <h1 class="text-2xl font-bold text-gray-800">Demo</h1>
        </div>
    </header>


    <!-- Footer con 5 opciones e iconos -->
    <footer id="footer" class="bg-white shadow-lg fixed bottom-0 w-full">
        <div class="container mx-auto">
            <ul class="flex justify-between p-4 text-gray-800">
                <li class="text-center">
                    <a href="#pagos" class="flex flex-col items-center p-2 text-blue-600 border-b-4 border-blue-600">
                        <img src="../../assets/img/892232.png" alt="Pagos" class="w-8 h-8 mb-1" />
                        <span class="text-sm font-semibold">Pagos</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="#story"
                        class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                        <img src="../../assets/img/7257795.png" alt="Pagos" class="w-8 h-8 mb-1" />
                        <span class="text-sm font-semibold">Solicitud</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="#story"
                        class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                        <img src="../../assets/img/clock_ico.png" alt="Pagos" class="w-8 h-8 mb-1" />
                        <span class="text-sm font-semibold">Historial</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="#clients"
                        class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                        <img src="../../assets/img/234232.png" alt="Pagos" class="w-8 h-8 mb-1" />
                        <span class="text-sm font-semibold">Clientes</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="#exit"
                        class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                        <img src="../../assets/img/152462.png" alt="Pagos" class="w-8 h-8 mb-1" />
                        <span class="text-sm font-semibold">Salir</span>
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <script>
    let lastScrollTop = 0;
    const footer = document.getElementById('footer');

    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        // Si el usuario baja la página
        if (scrollTop > lastScrollTop) {
            footer.classList.add('footer-hidden'); // Ocultar footer
        } else {
            footer.classList.remove('footer-hidden'); // Mostrar footer
        }
        lastScrollTop = scrollTop; 
    });
    </script>
</body>

</html>