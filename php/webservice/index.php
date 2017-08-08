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
                        <h3>Consumo Web Service</h3>
                    </div>
             
                    <form class="form-horizontal" action="cliente.php" method="post">
                      <div class="control-group">
                        <label class="control-label">Titulo</label>
                        <div class="controls">
                            <input name="buscarTitulo" type="text"  placeholder="Titulo" value="<?php echo !empty($buscarTitulo)?$buscarTitulo:'';?>">
                        </div>
                      </div>
                      <div class="control-group">
                        <label class="control-label">Capitulo</label>
                        <div class="controls">
                            <input name="buscarCapitulo" type="text"  placeholder="Capitulo" value="<?php echo !empty($buscarCapitulo)?$buscarCapitulo:'';?>">
                        </div>
                      </div>
                  
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Buscar</button>
                         
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>
