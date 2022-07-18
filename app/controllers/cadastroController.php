<?php 
include '../app/libraries/conexao.php';

class CadastroController{
    
    private $nome;
    private $sobre_nome;
    private $email;
    private $senha;
    private $nif;
    private $provincia;
    private $municipio;
    private $bairro;
    private $telefone;
    private $estado;
    private $nome_empresa;
    
    public function getNome(){
       return $this->nome;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getSobre_nome(){
        return $this->sobre_nome;
    }
    public function setSobre_nome($sobre_nome){
        $this->sobre_nome = $sobre_nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function setSenha($senha){
        $this->senha = $senha;
    }
    public function getNif(){
        return $this->nif;
    }
    public function setNif($nif){
        $this->nif = $nif;
    }
    public function getProvincia(){
        return $this->provincia;
    }
    public function setProvincia($provincia){
        $this->provincia = $provincia;
    }
    public function getMunicipio(){
        return $this->municipio;
    }
    public function setMunicipio($municipio){
        $this->municipio = $municipio;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }
    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        $this->telefone = $telefone;
    }  
    public function getEstado(){
        return $this->estado;
    }
    public function setEstado($estado){
        $this->estado = $estado;
    } 
    public function getNome_empresa(){
        return $this->nome_empresa;
    }
    public function setNome_empresa($nome_empresa){
        $this->nome_empresa = $nome_empresa;
    } 

    public function criarConta(){
        $cadastrar = new CadastroController();
        
        $connection = new Connection("localhost","root","","boda");
       //Criptografa a senha password_hash($_POST['senha'], PASSWORD_DEFAULT);

        if(isset($_POST['submit'])){
            if(empty($_POST['nome']) || empty($_POST['sobre_nome']) || empty($_POST['email']) || empty($_POST['senha']) || empty($_POST['senha_confirmar'])){
                $_SESSION['errocad']="Preencha todos os campos!";
                header('location:'.URL.'/paginas/cadastro');
            }else if($_POST['senha'] != $_POST['senha_confirmar']){ //Verificando se as senhas são diferentes
                $_SESSION['erropass']="Senhas diferentes. Tente novamente!";
                header('location:'.URL.'/paginas/cadastro');
             }else{
                //CADASTRO DE USUARIO
                if(empty($_POST['nif'] ) && empty($_POST['nome_empresa'] ) && empty($_POST['provincia']) && empty($_POST['municipio']) && empty($_POST['bairro']) && empty($_POST['telefone'])){
                    $cadastrar->setEstado(0);
                    $cadastrar->setNome($_POST['nome']);
                    $cadastrar->setSobre_nome($_POST['sobre_nome']);
                    $cadastrar->setEmail($_POST['email']);
                    //password_hash($_POST['senha'], PASSWORD_DEFAULT)
                    $cadastrar->setSenha($_POST['senha']);
        
                    $nome = $cadastrar->getNome();
                    $sobre_nome = $cadastrar->getSobre_nome();
                    $email = $cadastrar->getEmail();
                    $senha = $cadastrar->getSenha();
                    $estado = $cadastrar->getEstado();
                    
                    $query1 = mysqli_query($connection->conn,"INSERT INTO usuarios(nome,sobre_nome,email,senha,estado)VALUES('$nome','$sobre_nome','$email','$senha','$estado')");  
        
                    $_SESSION['cadsucess']="Cadastro feito com sucesso!";
                    header('location:'.URL.'/paginas/cadastro');
                
        
                }else{
                    //CADASTRO DE VENDEDOR
                    $cadastrar->setEstado(1);
                    $cadastrar->setNome($_POST['nome']);
                    $cadastrar->setSobre_nome($_POST['sobre_nome']);
                    $cadastrar->setEmail($_POST['email']);
                    $cadastrar->setSenha(password_hash($_POST['senha'], PASSWORD_DEFAULT));
                    $cadastrar->setNif($_POST['nif']);
                    $cadastrar->setNome_empresa($_POST['nome_empresa']);
                    $cadastrar->setProvincia($_POST['provincia']);
                    $cadastrar->setMunicipio($_POST['municipio']);
                    $cadastrar->setBairro($_POST['bairro']);
                    $cadastrar->setTelefone($_POST['telefone']);
    
                    $nome = $cadastrar->getNome();
                    $sobre_nome = $cadastrar->getSobre_nome();
                    $email = $cadastrar->getEmail();
                    $senha = $cadastrar->getSenha();
                    $nif = $cadastrar->getNif();
                    $nome_empresa = $cadastrar->getNome_empresa();
                    $provincia = $cadastrar->getProvincia();
                    $municipio = $cadastrar->getMunicipio();
                    $bairro = $cadastrar->getBairro();
                    $telefone = $cadastrar->getTelefone();
                    $estado = $cadastrar->getEstado();
                    $query2 = mysqli_query($connection->conn,"INSERT INTO vendedores(nome,sobre_nome,email,senha,nif,nome_empresa,provincia,municipio,bairro,telefone,estado)VALUES('$nome','$sobre_nome','$email','$senha','$nif','$nome_empresa','$provincia','$municipio','$bairro','$telefone','$estado')");  
    
                    $_SESSION['cadsucess2']="Cadastro feito com sucesso!";
                    header('location:'.URL.'/paginas/cadastro');
                }      
            }
                
            }
            
        }
        
    }



?>