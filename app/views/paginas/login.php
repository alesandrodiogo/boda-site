<?php
if(isset($_SESSION['email'])){
    header('location:'.URL.'/paginas/homecomprador');
    exit;
}
?>
<div class="flex justify-between" style=" height: 100vh; background-color: #04B3C8;">
  <div class="imagem h-screen" style="width: 50%;">
      <img src="<?=URL?>/public/img/undraw_Access_account_re_8spm.png" alt="" style="height: 100vh;">
  </div>


<div class="autenticacao  text-center content-center flex justify-center items-center" style="width: 50%;">
   <div class="login-container">
   <div class="login-header uppercase text-white mb-8">
      <h2 class="">Boda</h2>
      <h3>Entrar no Boda</h3>
      </div>
      <div class="login-form text-white mb-2">
        <form action="<?=URL?>/loginController/validar" method="POST">
        <input type="email" name="email" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="Email" style="background-color: #04B3C8;" />
        <input type="password" name="senha" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" placeholder="Senha" style="background-color: #04B3C8;"/>
        <div class="text-gray-700 mb-1">
         <?php 
        if(isset($_SESSION['erro'])){
         echo $_SESSION['erro'];
         unset($_SESSION['erro']);
        }
        if(isset($_SESSION['errodados'])){
          echo $_SESSION['errodados'];
          unset($_SESSION['errodados']);
         }
        ?>
     </div>
          <button type="submit" name="submit" class="border hover:border-white rounded-md px-4 focus:border-white" style="background-color: #AAE2E9; color: #6A6060;">Entrar</button>
          <div class="login-conta text-white">
     <p>Esqueceu a senha? <a href="<?=URL?>/paginas/recoversenha" class="hover:text-gray-400">Recuperar</a></p>
     </div>
        </form>
      </div>
     <div class="login-conta text-white">
     <p>Ainda não possui uma conta? <a href="<?=URL?>/paginas/cadastro" class="hover:text-gray-400">Cadastrar</a></p>
     </div>
  </div>
   </div>
  </div>