<?php
class Mdl_Conexion_BD
{
    public static function conectarBD()
    {
        try {
            $con = new PDO("mysql:host=localhost;dbname=portalmagico2023", "root", "");
            // var_dump($con);
            return $con;
        } catch (PDOException $e) {
            // Manejar la excepción en caso de un error de conexión a la base de datos
            echo "Error al conectar a la base de datos: " . $e->getMessage();
            return null; // Puedes devolver null u otro valor predeterminado en caso de error
        }
    }
}

/*$test = new Mdl_Conexion_BD;
$conexion = $test->conectarBD();

if ($conexion) {
    echo "Conexión exitosa a la base de datos.";
    // Puedes realizar operaciones en la base de datos aquí
} else {
    echo "No se pudo establecer la conexión a la base de datos.";
}*/
?>
