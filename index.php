<?php
//detruye la sesion si esta en el login
session_start();
session_destroy();
setcookie("token", "", time()-1 ,"/"); // reset
setcookie("token", "", time()-1 ,"/"); 
setcookie("id", "", time()-1 ,"/"); 
setcookie("usu", "", time()-1 ,"/"); 
setcookie("Nombre", "", time()-1 ,"/"); 
setcookie("apellidos", "", time()-1 ,"/"); 
setcookie("dpi", "", time()-1 ,"/"); 
setcookie("puesto", "", time()-1 ,"/"); 
setcookie("id_agencia", "", time()-1 ,"/"); 
setcookie("Email", "", time()-1 ,"/"); 

unset($_SESSION["token"]);
include 'src/config/database.php'; 
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}     
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MICROSYSTEM</title>
    <link rel="shortcut icon" type="image/x-icon" href="includes/img/favmicro.ico">
    <link rel="stylesheet" href="includes/css/login.css">
    <link rel="manifest" href="/manifest.json">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    </style>
</head>
<body
    class="bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-600 min-h-screen flex items-center justify-center p-4">
    <div
        class="w-full max-w-6xl bg-white shadow-2xl rounded-2xl overflow-hidden grid grid-cols-1 md:grid-cols-2 max-h-[900px] min-h-[550px]">
        <!-- Formulario de inicio de sesión -->
        <div class="p-8 md:p-12 flex flex-col justify-center">
            <h3 class="text-3xl font-bold text-center text-indigo-700 mb-6">Iniciar Sesión</h3>
            <div class="flex justify-center mb-6">
                <img src="https://img.microsystemplus2.com/mguate.avif" alt="Logo Microsystem" class="w-40 h-40 object-contain">
            </div>
            <p class="text-center text-gray-600 text-lg mb-8">
                Por favor inicia sesión con tu cuenta
            </p>
            <form method="POST" id="frmlogin" class="space-y-6">
                <!-- Campo de Usuario -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-user text-indigo-700"></i>
                    </div>
                    <input type="text" id="usuario" name="usuario" placeholder="Usuario" required
                        class="w-full pl-10 pr-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                </div>

                <!-- Campo de Contraseña -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="fas fa-lock text-indigo-700"></i>
                    </div>
                    <input type="password" id="password" name="password" placeholder="Contraseña" required
                        class="w-full pl-10 pr-12 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500">
                    <input name="condi" value="acceso" hidden>
                    <button type="button" id="togglePassword"
                        class="absolute inset-y-0 right-0 pr-3 flex items-center text-indigo-700">
                        <i class="fas fa-eye" id="eyeIcon"></i>
                    </button>
                </div>
                <!-- Botón de Sesión -->
                <button type="submit" id="btnEnviar"
                    class="w-full bg-indigo-700 text-white py-3 rounded-lg hover:bg-indigo-800 transition duration-300 font-bold">
                    INICIAR SESIÓN
                </button>
            </form>
        </div>
        <!--  Informativa -->
        <div class="bg-indigo-700 text-white hidden md:flex flex-col justify-center items-center p-12 text-center">
            <img src="includes/img/pos.png" alt="Microsystem+ Logo" class="w-3/4 mb-8"
                oncontextmenu="return false;">
            <h1 class="text-5xl font-bold mb-4 cursiva-font" id="microsystem-title">Microsystem <span
                    id="plus-sign">+</span></h1>
            <!-- <p class="text-xl">Gracias por su preferencia!</p> -->
            <!-- <p class="text-xl">Digital Microsystem Solutions</p> -->
        </div>
    </div>

    <script>
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
            navigator.serviceWorker.register('/service-worker.js')
                .then(registration => {
                    console.log('ServiceWorker registrado con éxito:', registration);
                })
                .catch(error => {
                    console.log('ServiceWorker registro fallido:', error);
                });
        });
    }
    </script>

    <!-- javascript del archivo -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/6acb25b06f.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- libreria sweet alert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript" src="includes/js/log.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</body>

</html>