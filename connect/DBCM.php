<?php

class MySQL{
    
        private $conexion;
        private $total_consultas;  
        public function MySQL(){  
            if(!isset($this->conexion)){  
                $this->conexion = (mysql_connect("127.0.0.1","root","")) or die(mysql_error());  
                mysql_select_db("kms",$this->conexion) or die(mysql_error());  
            }
        }
        
        public function query($query){  
            $this->total_consultas++;  
            $resultado = mysql_query($query,$this->conexion);  
            if(!$resultado){  
                echo 'MySQL Error: ' . mysql_error();  
                exit;  
            }  
            return $resultado;
       }  
       
       public function fetch_array($consulta){   
           return mysql_fetch_array($consulta);  
       }  
       
       public function num_rows($consulta){   
           return mysql_num_rows($consulta);  
       }  
       
       public function getTotalQueries(){  
           return $this->total_consultas;  
       } 
       
       public function close(){
           mysql_close();
       }
   }
?>
