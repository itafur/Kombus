<?php

/* 
 * Clase que se encarga de toda la gestion de usuario.
 * Creada: 23/05/2014
 * Lugar: Bogotá - Colombia
 * Desarrollador: Isaí Tafur G.
 */

// Conexion con la base de datos.
require_once '../connect/DBCM.php';

class User {
    
    /**
     * Metodo que valida la existencia de un usuario en el sistema.
     * @param String $username
     * @param String $password
     * @return boolean
     */
    public static function isUser($username, $password){
        $conn = new MySQL();
        // consulta que verifica si las credenciales son exactas.
        $query = "SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."' ";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        //Restificar si trajo por lo menos 1 registro.
        if ($conn->num_rows($result) > 0) {
            return true;
        } 
            return false;
    }
    
    
    /**
     * Metodo que retorna los datos correspondientes a un usuario.
     * @param String $username
     * @return tupla de la tabla usuario
     */
    public static function getData($username){
        $conn = new MySQL();
        // consulta que verifica si el usuario existe.
        $query = "SELECT * FROM user WHERE username = '".$username."' ";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        // Creación de un arreglo con la tupla.
        $data = $conn->fetch_array($result);
        
        return $data;
    }
    
    /**
     * Metodo que retorna los datos correspondientes a un usuario.
     * @param String $username
     * @return tupla de la tabla usuario
     */
    public static function getDataComplete($username){
        $conn = new MySQL();
        // consulta que verifica si el usuario existe.
        $query = "SELECT u.id AS id, u.state AS state, u.firstname AS firstname, u.lastname AS lastname, c.id AS city, l.id AS location
                  FROM user u
                  INNER JOIN location l
                  ON l.id = u.location_id
                  INNER JOIN city c
                  ON c.id = l.city_id
                  WHERE u.username = '".$username."' ";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        // Creación de un arreglo con la tupla.
        $data = $conn->fetch_array($result);
        
        return $data;
    }
    
    /**
     * Metodo util para la creación de un nuevo usuario.
     * @param type $firstname
     * @param type $lastname
     * @param type $username
     * @param type $password
     * @param type $location
     * @return type
     */
    public static function create($firstname, $lastname, $username, $password, $location){
        // Password encriptado.
        $pass = md5(sha1($password));
        // Establecer la conexion con la base de datos.
        $conn = new MySQL();
        // consulta para insertar un nuevo registro de usuario.
        $query = "INSERT INTO user VALUES (NULL, '".$firstname."', '".$lastname."', '".$username."', '".$pass."', CURDATE(), 1, ".$location.")";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        
        return $result;
    }
    
    /**
     * Metodo que tiene como fin actualizar los datos de un usuario.
     * @param type $id
     * @param type $firstname
     * @param type $lastname
     * @param type $password
     * @param type $location
     * @param type $state
     * @return type
     */
    public static function update($id, $firstname, $lastname, $password, $location, $state){
        // Establecer la conexion con la base de datos.
        $conn = new MySQL();
        if ($password == "") {
            // consulta para insertar un nuevo registro de usuario.
            $query = "UPDATE user SET firstname = '".$firstname."',
                      lastname = '".$lastname."', state = ".$state.", location_id = ".$location."
                      WHERE id = ".$id;
        } else {
            // Password encriptado.
            $pass = md5(sha1($password));
            // consulta para insertar un nuevo registro de usuario.
            $query = "UPDATE user SET firstname = '".$firstname."',
                      lastname = '".$lastname."', password = '".$pass."',
                      state = ".$state.", location_id = ".$location."
                      WHERE id = ".$id;
        }
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        
        return $result;
    }
    
    /**
     * Metodo que devuelve el id de un usuario.
     * @param type $username
     * @return type
     */
    public static function getIdUser($username){
        $conn = new MySQL();
        // consulta que verifica si el usuario existe.
        $query = "SELECT id FROM user WHERE username = '".$username."' ";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        // Creación de un arreglo con la tupla.
        $data = $conn->fetch_array($result);
        
        return $data;
    }
    
    /**
     * Metodo para verificar si un usuario existe o no
     * @param type $username
     * @return boolean
     */
    public static function existing($username){
        $conn = new MySQL();
        // consulta que verifica si el usuario existe.
        $query = "SELECT id FROM user WHERE username = '".$username."' ";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        // Creación de un arreglo con la tupla.
        if ($conn->num_rows($result) > 0) {
            return true;
        }
        
        return false;
    }
    
    public static function isActive($username){
        $conn = new MySQL();
        // consulta que verifica si el usuario existe.
        $query = "SELECT id FROM user WHERE username = '".$username."' AND state = 1 ";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        // Creación de un arreglo con la tupla.
        if ($conn->num_rows($result) > 0) {
            return true;
        }
        
        return false;
    }
    
    
    public static function like($keyword){
        $conn = new MySQL();
        // consulta que extrae todos los registros que coinciden con un string.
        $query = "SELECT *, u.id AS id_user,c.name AS city, l.name AS location 
                  FROM user u
                  INNER JOIN location l
                  ON u.location_id = l.id
                  INNER JOIN city c
                  ON c.id = l.city_id
                  WHERE firstname LIKE '".$keyword."%'
                  ORDER BY u.id";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        
        return $result;
    }
    
    public static function count($query){
        $conn = new MySQL();
        // Cantidad de registros
        $count = $conn->num_rows($query);
        
        return $count;
    }
    
    
    
}

