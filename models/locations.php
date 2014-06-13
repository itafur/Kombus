<?php

/* 
 * Clase con que se pueden realizar las interacciones con respecto a la gestión geográfica.
 */

//Requerir la conexion a la base de datos.
require_once '../connect/DBCM.php';

class Location {
    
    /**
     * Metodo que retorna todas las ciudades donde
     * Berlinas opera a nivel Costa.
     * @return type
     * retorna un conjunto de tuplas con los datos de las ciudades.
     */
    public static function getAllCities(){
        $conn = new MySQL();
        $query = "SELECT id, name FROM city";
        $result = $conn->query($query);
        
        return $result;
    }
    
    /**
     * 
     * @param type $city
     * @return type
     * retorna un conjunto de tuplas con los datos de las ubicaciones.
     */
    public static function getLocationByCity($city){
        $conn = new MySQL();
        $query = "SELECT id, name FROM location WHERE city_id = ".$city;
        $result = $conn->query($query);
        
        return $result;
    }
    
    /**
     * Metodo que se encarga de evaluar si
     * existe o no una ubicación.
     * @param type $name
     * @return boolean
     */
    public static function existingLocation($name){
        $conn = new MySQL();
        $query = "SELECT * FROM location WHERE name = '".$name."' ";
        $result = $conn->query($query);
        if ($conn->num_rows($result) > 0) {
            return true;
        }
        
        return false;
    }
    
    
    public static function existingCity($name){
        $conn = new MySQL();
        $query = "SELECT * FROM city WHERE name = '".$name."' ";
        $result = $conn->query($query);
        if ($conn->num_rows($result) > 0) {
            return true;
        }
        
        return false;
    }
    
    public static function createLocation($name, $city){
        $conn = new MySQL();
        $query = "INSERT INTO location VALUES (NULL, '".$name."', ".$city.")";
        $result = $conn->query($query);
        
        return $result;
    }
    
    public static function createCity($name){
        $conn = new MySQL();
        $query = "INSERT INTO city VALUES (NULL, '".$name."')";
        $result = $conn->query($query);
        
        return $result;
    }
    
}