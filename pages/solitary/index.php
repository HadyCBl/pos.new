<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/microsystem.png">
    <title>Pagos</title>
    <link href="../../dist/output.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        /* Transición suave al mostrar/ocultar el footer */
        footer {
            transition: transform 0.3s ease-in-out;
        }

        /* Ocultar footer */
        .footer-hidden {
            transform: translateY(100%);
        }

        /* Estilos del modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
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

    <button id="generate-pdf" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Generar PDF
    </button>

    <!-- Modal para visualizar PDF -->
    <div id="pdfModal" class="modal">
        <div class="modal-content">
            <h2>PDF Generado</h2>
            <iframe id="pdfViewer" style="width: 100%; height: 400px;" frameborder="0"></iframe>
            <br>
            <button id="downloadPdf" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5">Descargar PDF</button>
            <button id="printPdf" class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5">Imprimir PDF</button>
            <button id="closeModal" class="text-white bg-red-700 hover:bg-red-800 font-medium rounded-lg text-sm px-5 py-2.5">Cerrar</button>
        </div>
    </div>

    <!-- Footer con 5 opciones e iconos -->
    <footer id="footer" class="bg-white shadow-lg fixed bottom-0 w-full">
        <div class="container mx-auto">
            <ul class="flex justify-between p-4 text-gray-800">
                <li class="text-center">
                    <a href="../payments/index.php" class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                        <img src="../../assets/img/892232.png" alt="Pagos" class="w-8 h-8 mb-1" />
                        <span class="text-sm font-semibold">Pagos</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="#"
                    class="flex flex-col items-center p-2 text-blue-600 border-b-4 border-blue-600">
                        <img src="../../assets/img/7257795.png" alt="Pagos" class="w-8 h-8 mb-1" />
                        <span class="text-sm font-semibold">Solicitud</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="../history/index.php"
                        class="flex flex-col items-center p-2 text-gray-600 hover:text-blue-600 transition-colors duration-300 ease-in-out border-b-4 border-transparent hover:border-blue-600">
                        <img src="../../assets/img/clock_ico.png" alt="Pagos" class="w-8 h-8 mb-1" />
                        <span class="text-sm font-semibold">Historial</span>
                    </a>
                </li>
                <li class="text-center">
                    <a href="../customers/index.php"
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
        const { jsPDF } = window.jspdf;

        document.getElementById('generate-pdf').addEventListener('click', () => {
            const doc = new jsPDF();
            doc.text("prueba", 10, 10);

            // Guardar el PDF como blob
            const pdfBlob = doc.output('blob');
            const pdfUrl = URL.createObjectURL(pdfBlob);

            // Mostrar el PDF en el modal
            const pdfViewer = document.getElementById('pdfViewer');
            pdfViewer.src = pdfUrl;
            document.getElementById('pdfModal').style.display = 'flex';
        });

        document.getElementById('downloadPdf').addEventListener('click', () => {
            const doc = new jsPDF();
            doc.text("prueba", 10, 10);
            doc.save("documento.pdf");
        });

        document.getElementById('printPdf').addEventListener('click', () => {
            const pdfBlob = new jsPDF();
            pdfBlob.text("prueba", 10, 10);
            const pdfUrl = URL.createObjectURL(pdfBlob.output('blob'));
            const printWindow = window.open(pdfUrl);
            printWindow.print();
        });

        document.getElementById('closeModal').addEventListener('click', () => {
            document.getElementById('pdfModal').style.display = 'none';
            // Eliminar el objeto URL para liberar memoria
            URL.revokeObjectURL(document.getElementById('pdfViewer').src);
        });

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
            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Para Mobile or negative scrolling
        });
    </script>
</body>

</html>
