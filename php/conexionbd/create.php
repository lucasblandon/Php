<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Crear Nuevo Registro</h3>
                    </div>
             
                    <form class="form-horizontal" action="create.php" method="post">
                      <div class="control-group">
                        <label class="control-label">Id Registro</label>
                        <div class="controls">
                            <input name="id_registro" type="text"  placeholder="id Registro" value="<?php echo !empty($id_registro)?$id_registro:'';?>">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Id Funcionario</label>
                        <div class="controls">
                            <input name="id_func" type="text" placeholder="Id Funcionario" value="<?php echo !empty($id_func)?$id_func:'';?>">
                        </div>
                      </div>
                      <div class="control-group ">
                        <label class="control-label">Nombre Funcionario</label>
                        <div class="controls">
                            <input name="nombre_func" type="text"  placeholder="Nombre Funcionario" value="<?php echo !empty($nombre_func)?$nombre_func:'';?>">
                        </div>
                      </div>
                      <div class="control-group ">
                        <label class="control-label">Apellido Funcionario</label>
                        <div class="controls">
                            <input name="apellido_func" type="text"  placeholder="Apellido Funcionario" value="<?php echo !empty($apellido_func)?$apellido_func:'';?>">
                        </div>
                      </div>
                      <div class="control-group ">
                        <label class="control-label">Fecha Ingreso</label>
                        <div class="controls">
                            <input name="fecha_ingreso" type="text"  placeholder="fecha Ingreso" value="<?php echo !empty($fecha_ingreso)?$fecha_ingreso:'';?>">
                        </div>
                      </div>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Crear</button>
                          <a class="btn" href="index.php">Inicio</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>

<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
         
        // keep track post values
        $id_registro = $_POST['id_registro'];
        $id_func = $_POST['id_func'];
        $nombre_func = $_POST['nombre_func'];
        $apellido_func = $_POST['apellido_func'];
        $fecha_ingreso = $_POST['fecha_ingreso'];
         
        // insert data
       
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO funcionarios_desarrollo (id_registro, id_func, nombre_func, apellido_func, fecha_ingreso) values(?, ?, ?, ?, ?)";
        $q = $pdo->prepare($sql);
        $q->execute(array($id_registro,$id_func,$nombre_func,$apellido_func,$fecha_ingreso));
        Database::disconnect();
        header("Location: index.php");
   
    }
?>