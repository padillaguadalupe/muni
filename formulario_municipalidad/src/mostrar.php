<?php
$inc = include("con_db.php");
if ($inc) {

    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query($conex,$consulta);
    if ($resultado) {
        while($row = $resultado->fetch_array()){
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $edad = $row['edad'];
            $dni = $row['dni'];
            $fecha_reg = $row['fecha_reg'];
            ?>
            <div>
                <h2><?php echo $name; ?></h2>
                <div>
                        <p> 
                            <b>ID:</b><?php echo $id; ?><br>
                            <b>Email: </b><?php echo $email; ?><br>
                            <b>Edad: </b><?php echo $edad; ?><br>
                            <b>Dni: </b><?php echo $dni; ?><br>
                            <b>Fecha Registro:</b><?php echo $fecha_reg; ?>
                        
                        </p>
                </div>

            </div>
            <?php
            
        }
    }
}

