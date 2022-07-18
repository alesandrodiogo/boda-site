<?php
include '../app/libraries/conexao.php';

class Logincontroller{

    public function validar(){
        

      if(isset($_POST['submit'])){
        if(empty($_POST['email']) || empty($_POST['senha'])){    
            $_SESSION['erro']="Preencha todos os campos!";
         header('location:'.URL.'/paginas/login');
        }else{
           if(isset($_POST['email']) || isset($_POST['senha'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
           // if(password_verify('senha',$senha)){}

            $connection = new Connection("localhost","root","","boda");
            $query = mysqli_query($connection->conn,"SELECT * FROM usuarios WHERE senha ='$senha' AND email ='$email'");
            $rows = mysqli_num_rows($query);
            if($rows==1){
                $_SESSION['email']=$email;
                header('location:'.URL.'/paginas/homecomprador');
            }else{
                $query2 = mysqli_query($connection->conn,"SELECT * FROM vendedores WHERE senha ='$senha' AND email ='$email'");
                $rows2 = mysqli_num_rows($query2);
                if($rows2==1){
                    $_SESSION['email']=$email;
                    header('location:'.URL.'/paginas/homevendedor');
                }else{
                    $_SESSION['errodados']="Email ou senha errada!";
                    header('location:'.URL.'/paginas/login');
                }
            }
            mysqli_close($connection->conn);
           }
        }
      }
    }
    public function logout(){
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        session_destroy();
        header('location:'.URL.'/paginas/home');
    }
}
?>