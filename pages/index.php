<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagos</title>
    <link href="../dist/output.css" rel="stylesheet">
</head>
<body class="flex flex-col min-h-screen bg-gray-50">

    <!-- Cabecera con logo -->
    <header class="bg-white shadow p-4">
        <div class="container mx-auto flex items-center justify-between">
            <img src="../assets/img/microsystem.png" alt="Logo" class="h-12">
            <h1 class="text-2xl font-bold text-gray-800">Demo</h1>
        </div>
    </header>



    <!-- Footer con 5 opciones e iconos -->

<!-- Footer con 5 opciones e iconos mejorado y sobremarcado -->
<!-- Footer con 5 opciones e iconos mejorado y sobremarcado usando Tailwind CSS -->
<footer class="bg-white shadow-lg fixed bottom-0 w-full">
    <div class="container mx-auto">
        <ul class="flex justify-between p-4 text-gray-800">
            <!-- Botón de Pagos -->
            <li class="text-center">
                <a href="#pagos"  class="flex flex-col items-center p-2 text-blue-600 border-b-4 border-blue-600">
                    <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm-1-2V3a1 1 0 012 0v3a1 1 0 01-2 0zm-4.222.87l-2.12-2.12a1 1 0 111.414-1.414l2.121 2.12A1 1 0 017.777 6.87zM3 12H1a1 1 0 010-2h2a1 1 0 010 2zm1.12 6.393l-2.12-2.12a1 1 0 111.414-1.414l2.12 2.121A1 1 0 014.12 18.393zm13.715.37l-2.12-2.121a1 1 0 111.414-1.414l2.121 2.121a1 1 0 01-1.414 1.414zm3.121-6.393h2a1 1 0 010 2h-2a1 1 0 010-2zm-1.393-6.12l2.12-2.121a1 1 0 111.414 1.414l-2.121 2.12a1 1 0 01-1.414-1.414zM16 12c0-2.21-1.79-4-4-4s-4 1.79-4 4 1.79 4 4 4 4-1.79 4-4z"/>
                    </svg>
                    <span class="text-sm font-semibold">Pagos</span>
                </a>
            </li>

            <!-- Botón de Solicitud -->
            <li class="text-center">
                <a href="#solicitud" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                    <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l12 12m-12-12L4 13m16-4H4m8 0v16"></path>
                    </svg>
                    <span class="text-sm font-semibold">Solicitud</span>
                </a>
            </li>

            <!-- Botón de Historial -->
            <li class="text-center">
                <a href="#historial" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                    <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l2 2m0-6V5a1 1 0 00-1-1H5a1 1 0 00-1 1v10a1 1 0 001 1h6a1 1 0 001-1v-3m0-6l4 4-4 4"/>
                    </svg>
                    <span class="text-sm font-semibold">Historial</span>
                </a>
            </li>

            <!-- Botón de Clientes -->
            <li class="text-center">
                <a href="#clientes" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                    <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                    <span class="text-sm font-semibold">Clientes</span>
                </a>
            </li>

            <!-- Botón de Perfil -->
            <li class="text-center">
                <a href="#cerrar-sesion" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                    <svg class="w-8 h-8 mb-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m3-9v18m9-9a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="text-sm font-semibold">Salir</span>
                </a>
            </li>
            
        </ul>
    </div>
</footer>


</body>
</html>
