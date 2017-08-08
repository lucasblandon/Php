  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link   href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
</head>
 
<body>
    <div class="container">
            <div class="row">
                <h3>Funcionarios Desarrollo</h3>
            </div>
            <div class="row">
              <p>
                <a href="create.php" class="btn btn-success">Crear Nuevo Registro</a>
              </p>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Id Registro</th>
                      <th>Id Funcionario</th>
                      <th>Nombre Funcionario</th>
                      <th>Apellido Funcionario</th>
                      <th>Fecha Funcionario</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM funcionarios_desarrollo ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['id_registro'] . '</td>';
                            echo '<td>'. $row['id_func'] . '</td>';
                            echo '<td>'. $row['nombre_func'] . '</td>';
                            echo '<td>'. $row['apellido_func'] . '</td>';
                            echo '<td>'. $row['fecha_ingreso'] . '</td>';
                            echo '<td width=50>';
                            echo '<a class="btn" href="read.php?id='.$row['id'].'">Ver</a>';
                            echo ' ';
                            echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
  </body>
</html>