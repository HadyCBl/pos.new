<!-- print_stream.php -->
<?php
// Evitar que el navegador almacene el archivo
header('Content-Type: text/html; charset=utf-8'); // Usamos HTML para simplicidad
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Pragma: no-cache');
header('Expires: 0');

// Generar contenido dinámico (puede ser un recibo, factura, etc.)
$contenido = "
  <h1>Recibo #123</h1>
  <p>Cliente: Juan Pérez</p>
  <p>Total: $100</p>
";
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <style>
    body {
      display: none; /* Oculta el contenido en pantalla */
    }
    @media print {
      body {
        display: block; /* Muestra el contenido solo al imprimir */
      }
    }
  </style>
</head>
<body>
  <?php echo $contenido; ?>
  <script>
    window.print(); // Imprime automáticamente
    window.close(); // Cierra la ventana después de imprimir (opcional)
  </script>
</body>
</html>