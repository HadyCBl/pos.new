<!-- index.html -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi App</title>
</head>
<body>
  <h1>Impresión desde Teléfono</h1>
  <button onclick="imprimir()">Imprimir Recibo</button>

  <script>
    function imprimir() {
      // Abre una ventana emergente que carga el contenido dinámico
      const ventana = window.open('print_stream.php', '_blank', 'width=1,height=1');
      
      // Opcional: asegura que la ventana se cierre después de imprimir
      ventana.onload = function() {
        ventana.focus();
        ventana.print();
      };
    }
  </script>
</body>
</html>