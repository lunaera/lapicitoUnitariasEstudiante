
<?php

// utilizando php database object (PDO) para la conexión a la base de datos

class ConexionDB {
    public static function setConnection() {
        $host = 'localhost';
        $dbname = 'papeleria3a';
        $user = 'root';
        $pass = 'root';
        $charset = 'utf8mb4';
        //$port = 3306; 
        // crea una cadena de conexión de MYSQL que le dice a PDO cómo y dónde conectarse a la base de datos.
        $dsn = "mysql:host=$host;dbname=$dbname;charset=$charset"; // DSN data source name
        
        // $dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=$charset";
        
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //- Le dice a PDO que, si ocurre un error con la BD, debe lanzar una excepción en lugar de quedarse callado o devolver un false.
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // usa forma de arreglo asociativo (['nombre' => 'Erahin']) y no mezclado con índices numéricos.
            PDO::ATTR_EMULATE_PREPARES => false, // - Desactiva la emulación de sentencias preparadas, lo que mejora la seguridad (contra inyecciones SQL) y el rendimiento.
            // y fuerza a usar las sentencias preparadas reales del servidor MySQL
        ];

        try {
            return new PDO($dsn, $user, $pass, $options); // devuelve un objeto PDO de concexión a la base de datos para que pueda ser usado
        } catch (PDOException $e) {
            throw new Exception('Error de conexión a la Base de datos: ' . $e->getMessage());
        }
    }
}

?>


