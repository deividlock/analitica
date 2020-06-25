<?php 
   require ('conexion.php');

   $sql = "SELECT ext, count(id) 
           FROM extension
           group by (ext) 
   ";
   $result = $mysqli -> query($sql);
   $count = $result->num_rows;
   //var_dump($result);

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            Analitica
        </a>
    </nav>
    <div class="container-flex px-5">
        <div class="row">
            <div class="col-12">
                <br />
                <h1> Tipos de archivo </h1>
                <br />
                <span class="float-right">Total: <strong><?php echo $count; ?></strong></span>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php if($count > 0) {
                        $i=1;
                        while ($fila = mysqli_fetch_row($result)) { 
                            echo '<tr scope="row">
                            <td>'.$i.'</td>
                            <td>'.$fila[0].'</td>
                            <td>'.$fila[1].'</td>
                            </tr>';
                            $i++;
                            }
                        } else {
                            echo '<tr scope="row"> 
                            <td colspan="3" class="text-center">No hay datos</td>
                            </tr>';
                        }?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>