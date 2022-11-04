<?php
include("../conexion.php");
$con = conectar();

$sql = "SELECT *  FROM hash2";
$query = mysqli_query($con, $sql);
?>

<?php include("./encabezado.php"); ?>

<div style="margin-left: 30%; margin-right:30%;">

    <form action="insertar.php" method="POST">

        <label for="cod_cliente"><b>Codigo de cliente:</b></label><input type="number" class="form-control mb-3"
            name="codigo2" required>

        <label for="cod_cliente"><b>Nombre:</b></label><input type="text" class="form-control mb-3" name="nombre"
            required>

        <label for="cod_cliente"><b>Correo:</b></label><input type="email" class="form-control mb-3" name="matricula"
            required>
        <label for="cod_cliente"><b>Contraseña:</b></label><input type="password" class="form-control mb-3" name="passw"
            id="contrasenia" required>

        <input type="submit" class="btn btn-primary">
    </form>
</div>
<div class="container mt-5">
    <div class="row">




        <center>
            <div class="col-md-8">
                <table class="table table-dark table-sm">
                    <thead>
                        <tr>
                            <th>Codigo cliente</th>
                            <th>Nombres</th>
                            <th>correo</th>
                            <th>Contraseña</th>
                            <th>Acciones</th>
                            <th></th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php
                    while ($row = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <th><?php echo $row['codigo2'] ?></th>
                            <th><?php echo $row['nombre'] ?></th>
                            <th><?php echo $row['matricula'] ?></th>
                            <th><?php echo $row['passw'] ?></th>

                            <th><a href="delete.php?id=<?php echo $row['codigo2'] ?>" class="btn btn-danger">Eliminar</a>
                            </th>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div><br><br>
        </center>
    </div>
</div>
</body>

</html>