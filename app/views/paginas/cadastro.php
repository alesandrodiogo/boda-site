<div class="flex justify-between" style=" background-color: #04B3C8;">
  <div class="imagem" style="width: 50%;">
      <img src="<?=URL?>/public/img/undraw_Reading_time_re_phf7.png" alt="" style="height: 100%; object-fit: cover;">
  </div>
<div class=" text-center content-center flex justify-center items-center " style="width: 50%;">
   <div class="cadastro-container" style="width: 50%;">
   <div class="login-header uppercase text-white mb-8">
      <h2 class="">Boda</h2>
      <h3>Crie uma conta!</h3>
      </div>
      <div class="cadastro-form text-white mb-2">
        <form action="<?=URL?>/cadastroController/criarConta" method="POST">
        <input type="text" name="nome" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="Nome" style="background-color: #04B3C8;" />
        <input type="text" name="sobre_nome" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="Sobre nome" style="background-color: #04B3C8;" />
        <input type="email" name="email" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="Email" style="background-color: #04B3C8;" />
        <input type="password" name="senha" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" placeholder="Senha"  style="background-color: #04B3C8;"/>
        <input type="password" name="senha_confirmar" class="mb-2 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" placeholder="Confirmar Senha" style="background-color: #04B3C8;"/>
        <div class="text-gray-700 mb-1">
         <?php 
        if(isset($_SESSION['errocad'])){
         echo $_SESSION['errocad'];
         unset($_SESSION['errocad']);
        }
        if(isset($_SESSION['erropass'])){
          echo $_SESSION['erropass'];
          unset($_SESSION['erropass']);
         }
         if(isset($_SESSION['cadsucess'])){
          echo $_SESSION['cadsucess'];
          unset($_SESSION['cadsucess']);
         }
         if(isset($_SESSION['cadsucess2'])){
          echo $_SESSION['cadsucess2'];
          unset($_SESSION['cadsucess2']);
         }
        ?>
     </div>
        <div class="max-w-lg mx-auto">
  <details class="open:bg-white dark:open:bg-slate-900 open:ring-1 open:ring-black/5 dark:open:ring-white/10 open:shadow-lg p-6 rounded-lg" closed>
    <summary class="text-sm leading-6 text-slate-900 dark:text-white font-semibold select-none">
     Sou vendedor
    </summary>
    <div class="mt-3 text-sm leading-6 text-slate-600 dark:text-slate-400">
    <input type="text" name="nif" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="NIF / B.I" style="background-color: #04B3C8;" />
    <input type="text" name="nome_empresa" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="Nome da Empresa" style="background-color: #04B3C8;" />
    <label for="provincia">Província: </label>
    <select name="provincia" id="provincia" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" style="background-color: #04B3C8;">
    <option value="" disabled selected></option>
    <option value="Bengo">Bengo</option>
  <option value="Benguela">Benguela</option>
  <option value="Bié">Bié</option>
  <option value="Cabinda">Cabinda</option>
  <option value="Cuando-Cubango">Cuando-Cubango</option>
  <option value="Cunene">Cunene</option>
  <option value="Huambo">Huambo</option>
  <option value="Huíla">Huíla</option>
  <option value="Kwanza Sul">Kwanza Sul</option>
  <option value="Kwanza Norte">Kwanza Norte</option>
  <option value="Luanda">Luanda</option>
  <option value="Lunda Norte">Lunda Norte</option>
  <option value="Lunda Sul">Lunda Sul</option>
  <option value="Malanje">Malanje</option>
  <option value="Moxico">Moxico</option>
  <option value="Namibe">Namibe</option>
  <option value="Uíge">Uíge</option>
  <option value="Zaire">Zaire</option>
</select>
    <input type="text" name="municipio" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="Município" style="background-color: #04B3C8;" />
    <input type="text" name="bairro" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="Bairro" style="background-color: #04B3C8;" />
    <input type="text" name="telefone" class="mb-8 px-2 py-2 border-b-2 shadow-sm border-slate-300 placeholder-white focus:outline-none  block w-full sm:text-sm focus:ring-1" autocomplete="off" placeholder="Telefone" style="background-color: #04B3C8;" />  
    </div>
  </details>
</div>
          <button class="border hover:border-white rounded-md px-4 focus:border-white" name="submit" style="background-color: #AAE2E9; color: #6A6060;">Cadastrar</button>
        </form>
      </div>
     <div class="login-conta text-white mb-12">
     <p>Já possui uma conta? <a href="<?=URL?>/paginas/login" class="hover:text-gray-400">Login</a></p>
     </div>
  </div>
   </div>
  </div>