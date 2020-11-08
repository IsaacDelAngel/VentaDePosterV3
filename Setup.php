<!<!DOCTYPE <html>
    <html>
        <head>
            <title>Setting up database</title>
</head>
<body>
 <h3> Setting up... </h3>

 <?php
 require_once 'datebase.php';
createTable('Usuarios',
            'user VARCHAR(26),
             pass VARCHAR(16),
             INDEX(user(6))');

createTable('Compra',
            'id_producto INIT,
             nombre_producto VARCHAR(16),
             precio INIT,    
             cantidad VARCHAR(45),
             codigo_postal VARCHAR(45),
             pais VARCHAR(45),
             estado VARCHAR(45),
             INDEX(Compra(6))');
             
createTable('Metodo_Pago', 
             'paypal INIT,
              tarjeta_credito INIT,
              tarjeta_debito INIT,
              visa INIT,
              ');

createTable('Proovedor',
            'nombre_proovedor(46),
            fecha_entrega(46),
            lote INIT,
            nombre_producto(45),
            ');
            
createTable('Producto',
            'nombre_producto VARCHAR(45),
             existencias VARCHAR(45),
             categoria VARCHAR(45),
             id_producto INIT,
             precio INIT,
             ');

createTable('Debito',
             'tarjeta_debito INIT,
              id_tarjeta VARCHAR(45),
              contrasena VARCHAR(45),
              code_postal VARCHAR(45),
             ');
            

?>

<br>...done.
</body>
</html>