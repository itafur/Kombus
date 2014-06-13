<?php

/* 
 * Clase encargada de establecer los permisos para cada uno de los usuarios
 * que se loguean, de modo que los privilegios se generalizan a cada persona.
 */

require_once '../connect/DBCM.php';

class Permission {
    
    /**
     * Metodo que retorna las tuplas con cada uno de los permisos.
     * @param type $id
     * Variable que contiene el identificador para un usuario en especial
     */
    public static function getPermissionsByUser($id){
        $conn = new MySQL();
        // consulta que muestra todos los privilegios de un usuario.
        $query = "SELECT pr.id, pr.name AS name, pr.path AS path, pr.image AS image, pr.width AS width, pr.height AS height  
                  FROM permission p 
                  INNER JOIN user u
                  ON p.user_id = u.id
                  INNER JOIN privilege pr ON pr.id = p.privilege_id
                  WHERE p.state = 1 AND p.user_id = ".$id;
        //Ejecución de la consulta.
        $result = $conn->query($query);
        
        return $result;
        
    }
    
    public static function getAllPrivilegies(){
        $conn = new MySQL();
        // consulta que muestra todos los privilegios.
        $query = "SELECT id, name FROM privilege";
        
        //Ejecución de la consulta.
        $result = $conn->query($query);
        
        return $result;
    }
    
    public static function create($id, $permission, $state){
        // Establecer la conexion con la base de datos.
        $conn = new MySQL();
        // consulta para insertar un nuevo permiso.
        $query = "INSERT INTO permission VALUES (NULL, ".$id.", ".$permission.", ".$state.")";
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        
        return $result;
    }
    
    public static function update($id, $permission, $state){
        // Establecer la conexion con la base de datos.
        $conn = new MySQL();
        // consulta para insertar un nuevo permiso.
        $query = "UPDATE permission SET state = ".$state." WHERE user_id = ".$id." AND privilege_id = ".$permission;
        // Ejecución y captura de los resultados de la consulta.
        $result = $conn->query($query);
        
        return $result;
    }
            
            
            
}