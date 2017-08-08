<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index.php");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM funcionarios_desarrollo where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
    }
?>
 
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
                        <h3> Listado  Funcionarios </h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <label class="control-label">Id Registro</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['id_registro'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Id Funcionario</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['id_func'];?>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Nombre Funcionario</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['nombre_func'];?>
                            </label>
                        </div>
                      </div>
                                            <div class="control-group">
                        <label class="control-label">Fecha Ingreso</label>
                        <div class="controls">
                            <label class="checkbox">
                                <?php echo $data['fecha_ingreso'];?>
                            </label>
                        </div>
                      </div>

                        <div class="form-actions">
                          <a class="btn" href="index.php">Inicio</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
