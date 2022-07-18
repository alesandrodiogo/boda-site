<?php
include '../app/libraries/conexao.php';

class VendedorController{
    private $id_vendedor;
    private $categoria;
    private $nome_produto;
    private $preco_produto;
    private $descricao_produto;
    private $file;
    
    public function getId_vendedor(){
        return $this->id_vendedor;
     }
     public function setId_vendedor($id_vendedor){
         $this->id_vendedor = $id_vendedor;
     }
    public function getCategoria(){
       return $this->categoria;
    }
    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }
    public function getNome_produto(){
        return $this->nome_produto;
    }
    public function setNome_produto($nome_produto){
        $this->nome_produto = $nome_produto;
    }
    public function getPreco_produto(){
        return $this->preco_produto;
    }
    public function setPreco_produto($preco_produto){
        $this->preco_produto = $preco_produto;
    }
    public function getDescricao_produto(){
        return $this->descricao_produto;
    }
    public function setDescricao_produto($descricao_produto){
        $this->descricao_produto = $descricao_produto;
    }
    public function getFile(){
        return $this->file;
    }
    public function setFile($file){
        $this->file = $file;
    }
    

    public function cadastrarProduto(){
        $cadastrar = new VendedorController();
        
        $connection = new Connection("localhost","root","","boda");

        if(isset($_POST['submit'])){
            if(empty($_POST['id_categoria']) || empty($_POST['nome_produto']) || empty($_POST['preco_produto']) || empty($_POST['descricao_produto']) ){
                $_SESSION['errocad']="Preencha todos os campos!";
                header('location:'.URL.'/paginas/vender');
            }else{
                //CADASTRO DE PRODUTO
                
                    if(isset($_FILES['file'])){

                        $diretorio = URL."/public/upload/";
                       $extensao = $diretorio.basename($_FILES["file"]["name"]);
                       $novo_nome = md5(time()) .".". strtolower(pathinfo($extensao, PATHINFO_EXTENSION));
                       
                       move_uploaded_file($_FILES['file']['tmp_name'], $diretorio . $novo_nome);


                    $cadastrar->setId_vendedor($_POST['id_vendedor']);
                    $cadastrar->setCategoria($_POST['id_categoria']);
                    $cadastrar->setNome_produto($_POST['nome_produto']);
                    $cadastrar->setPreco_produto($_POST['preco_produto']);
                    $cadastrar->setDescricao_produto($_POST['descricao_produto']);
                    $cadastrar->setFile($novo_nome);

                    $id_vendedor = $cadastrar->getId_vendedor();
                    $categoria = $cadastrar->getCategoria();
                    $nome_produto = $cadastrar->getNome_produto();
                    $preco_produto = $cadastrar->getPreco_produto();
                    $descricao_produto = $cadastrar->getDescricao_produto();
                    $file = $cadastrar->getFile();
                    
                    $query = mysqli_query($connection->conn,"INSERT INTO produtos(id_vendedor,id_categoria,nome_produto,descricao_produto,preco_produto,imagem_produto)VALUES('$id_vendedor','$categoria ','$nome_produto','$descricao_produto','$preco_produto','$file')");  
        
                    $_SESSION['sucess']="Cadastro feito com sucesso!";
                    header('location:'.URL.'/paginas/vender');
                    }else{
                        $_SESSION['sucessnot']="Não foi possível cadastrar!";
                        header('location:'.URL.'/paginas/vender');
                    }

                    //UPLOAD
                    /*$filename = md5(time());
                    $target_directory = URL."public/upload/";
                    $target_file = $target_directory.basename($_FILES["file"]["name"]);
                    $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                    $newfilename = $filename.".".$filetype;
                    if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_directory.$newfilename)){
                        echo 1;
                    }else{
                        echo 0;
                    }*/
                }
            }
        }

    }
?>