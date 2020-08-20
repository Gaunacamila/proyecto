<?php include_once 'includes/templates/header.php'; ?>


<?php 

try {
          require_once 'includes/funciones/db_conexion.php';
          $sql = "SELECT precio,modelo,descripcion,marca,url_img  FROM celulares";
          $resultado = $conn->query($sql);
} catch (\Throwable $th) {
    echo $th->getMessage();    //throw $th;
}


?>

<pre>
    <?php $datocel = $resultado->fetch_assoc();
    
    
    ?>

    
    <div class="producto">
        <div class="imagen-producto">
            <img src="img/<?php echo $datocel['url_img'] ?>" alt="">
        </div>
        <p class="descripcion"><?php echo $datocel['descripcion']?></p>
        <p class="modelo"><?php echo $datocel['modelo']?></p>
        <p class="precio"><?php echo $datocel['precio']?></p>
        
    </div>
  
</body>
</html>