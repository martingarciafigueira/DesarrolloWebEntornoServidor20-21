<?php 

class accesoBD {
    private $usuario;
    private $contrasenha;
    private $bd;
    
    public function __construct($usuario, $contrasenha, $bd) {
        $this->usuario=$usuario;
        $this->contrasenha=$contrasenha;
        $this->bd=$bd;
    }
    
    /** M�todo para establecer a conexi�n cunha base de datos **/ 
   public function abrirConexion () {
    $con = new mysqli('localhost',$this->usuario,$this->contrasenha,
                       $this->bd);
        if ($con ->connect_error) {
            echo "Error en la conexión a base de datos $this->bd: 
                 ($con->connect_errno) $con->connect_error\n";
            exit;
        } 
            return $con;
  }
   
  public function cerrarConexion ($con) {
    $con->close();
  }
} 
?>


