<?php 
    
    class conexion{
        private $db;
        private $resultado;
        private $consulta;
        
        public function __construct ($dbhost, $dbuser, $dbpass, $dbname, $dbcharset){
            $this->db = new mysqli( $dbhost, $dbuser, $dbpass, $dbname );
            if($this->db->connect_errno){
                trigger_error(" Fallo la conexión con MySQL, Tipo de error -> ({$this->db->connect_error})", E_USER_ERROR);
            }
        }
        
      //---------------- GET--------------------//  
        
        public function getResult($username){
            $this->resultado = $this->db->query("SELECT nombre, resultado FROM resultados_loterias INNER JOIN loterias ON loterias.id=resultados_loterias.id_loteria where fecha=CURDATE()");
            return $this->resultado->fetch_all();
        }
        
        public function getLastResult(){
            $this->resultado = $this->db->query("SELECT nombre, resultado FROM resultados_loterias INNER JOIN loterias ON loterias.id=resultados_loterias.id_loteria where fecha=CURDATE()");
            return $this->resultado;
        }
        
         public function getTotalLotList($fecha){
            $this->resultado = $this->db->query("select nombre, resultado from resultados_loterias INNER JOIN loterias ON loterias.id=resultados_loterias.id_loteria where fecha='$fecha'");
            return $this->resultado;
        }
        
   
       
        //-------------- VALIDATE--------------//
        public function validateData($gps,$pass){
            $this->resultado = $this->db->query("SELECT id FROM users WHERE gps = '$gps' and pass ='$pass'");
            return $this->resultado;
        }
        //-----------------CLOSE--------------------//
        public function cerrar(){
            $this->db->close();
        }
    }
?>