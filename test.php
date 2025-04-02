<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vista Previa e Impresión</title>
  <style>
    #contenido {
      width: 100%;
      border: 1px solid #ccc;
      padding: 20px;
    }

    /* Estilos para la vista previa en pantalla */
    #vista-previa {
      display: none;
      width: 100%;
      border: 2px dashed #000;
      padding: 10px;
      margin-top: 20px;
    }

    /* Estilos para la impresión */
    @media print {
      body * {
        visibility: hidden; /* Oculta todo excepto el contenido a imprimir */
      }
      #contenido, #contenido * {
        visibility: visible;
      }
      #contenido {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
      }
      #vista-previa {
        display: none; /* Oculta la vista previa al imprimir */
      }
    }
  </style>
</head>
<body>
  <h1>Documento a Imprimir</h1>
  <div id="contenido">
    <p>Este es el contenido que se imprimirá.</p>
    <p>Puedes personalizarlo como quieras.</p>
  </div>
  <button onclick="mostrarVistaPrevia()">Mostrar Vista Previa</button>
  <button onclick="imprimir()">Imprimir</button>
  <div id="vista-previa"></div>

  <script>
    function mostrarVistaPrevia() {
      const contenido = document.getElementById('contenido').innerHTML;
      const vistaPrevia = document.getElementById('vista-previa');
      vistaPrevia.style.display = 'block';
      vistaPrevia.innerHTML = contenido;
    }

    function imprimir() {
      window.print(); // Abre el diálogo de impresión del navegador
    }
  </script>
</body>
</html>