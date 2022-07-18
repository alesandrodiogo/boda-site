<?php
if (!isset($_SESSION['email'])) {
  header('location:' . URL . '/paginas/home');
  exit;
}
include '../app/views/paginas/topovendedor.php';
include '../app/libraries/conexao.php';

$connection = new Connection("localhost", "root", "", "boda");
$query = mysqli_query($connection->conn, "SELECT id FROM vendedores WHERE email='$_SESSION[email]'");
$dados = mysqli_fetch_assoc($query);
?>

<form action="<?= URL ?>/vendedorController/cadastrarProduto" method="POST" enctype="multipart/form-data" style="margin-top: 69px;" class="flex justify-center bg-gray-100">
  <div class="mt-10 sm:mt-8 mb-5">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
          <h3 class="text-lg font-medium leading-6 text-gray-900">Meu IDentificador: <?= $dados['id']; ?></h3>
          <p class="mt-1 text-sm text-gray-600">Bem-vindo <?= $_SESSION['email'] ?></p>
        </div>
      </div>
      <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="shadow overflow-hidden sm:rounded-md">
          <div class="px-4 py-5 bg-white sm:p-6">
            <div class="grid grid-cols-6 gap-6">
              <div class="col-span-6 sm:col-span-3">
                <label for="first-name" class="block text-sm font-medium text-gray-700">ID Vendedor</label>
                <input type="hidden"  name="id_vendedor" value="<?= $dados['id']; ?>" id="id_vendedor" autocomplete="given-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                <input type="number" disabled  value="<?= $dados['id']; ?>" id="id_vendedor" autocomplete="given-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
              </div>

              <div class="col-span-6 sm:col-span-3">
                <label for="id_categoria" class="block text-sm font-medium text-gray-700">Categoria</label>
                <select id="id_categoria" name="id_categoria" autocomplete="categoria-nome" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                  <option value="1">Adulto</option>
                  <option value="2">Infantil</option>
                </select>
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="nome_produto" class="block text-sm font-medium text-gray-700">Nome do Produto</label>
                <input type="text" name="nome_produto" id="nome_produto" autocomplete="family-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
              </div>
              <div class="col-span-6 sm:col-span-3">
                <label for="preco_produto" class="block text-sm font-medium text-gray-700">Preço do Produto</label>
                <input type="text" name="preco_produto" id="preco_produto" autocomplete="family-name" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
              </div>
              <div class="col-span-6 sm:col-span-4">
                <label for="descricao_produto" class="block text-sm font-medium text-gray-700">Descrição do Produto</label>
                <textarea name="descricao_produto" id="descricao_produto" cols="30" rows="2" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
              </div>
            </div>
            <div class="col-span-6 sm:col-span-3">
              <label class="mt-8 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-full text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-200" style="background-color: #04B3C8;">
                <input type="file" name="file" class="block w-full text-sm text-white" />
              </label>
            </div>
          </div>
          <div class="Mensagens mt-1 mb-2">
            <?php
            if (isset($_SESSION['errocad'])) {
              echo $_SESSION['errocad'];
              unset($_SESSION['errocad']);
            }
            if (isset($_SESSION['sucess'])) {
              echo $_SESSION['sucess'];
              unset($_SESSION['sucess']);
            }
            if (isset($_SESSION['sucesserror'])) {
              echo $_SESSION['sucesserror'];
              unset($_SESSION['sucesserror']);
            }
            if (isset($_SESSION['sucessnot'])) {
              echo $_SESSION['sucessnot'];
              unset($_SESSION['sucessnot']);
            }
            ?>
          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-200" style="background-color: #04B3C8;">Salvar</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
      <div class="md:col-span-1">
</form>