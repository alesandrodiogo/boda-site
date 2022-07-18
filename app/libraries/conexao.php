<?php
class Connection{
    
    private $localhost;
    private $user;
    private $senha;
    private $database;
    public $conn;
    
    public function __construct($localhost,$user,$senha,$database)
    {
        
        $this->localhost = $localhost;
        $this->user = $user;
        $this->senha = $senha;
        $this->database = $database;

        $this->conn = mysqli_connect($localhost,$user,$senha,$database);
        /*if($conn){
            echo "Conexao feita com sucesso";
            //header("location: ./cadastrar.php");
        }else{
            echo "Erro ao conectar";
        }*/
        
    }
}

?>