<?php 
 include'../app/views/topo.php';
 include '../app/libraries/conexao.php';

 if(isset($_SESSION['email'])){
    include'../app/views/paginas/topocomprador.php';
}else{
    header('location:'.URL.'/paginas/home');
    exit;
}
$id = $_GET['id'];
if(!isset($id)){
    ?>
    <div class="flex items-center" style="margin-top: 69px;">
    <img src="<?=URL?>/public/img/undraw_under_construction_-46-pa.svg" alt="" style="width: 100%; height: 500px;">
    </div>
    <?php
}else{

$connection = new Connection("localhost", "root", "", "boda");
$query = mysqli_query($connection->conn, "SELECT * FROM produtos WHERE id_produto = $id ORDER BY id_produto");
$dados = mysqli_fetch_assoc($query);

?>
<div class="flex items-center pl-4" style="margin-top: 69px;">
        <div class="pointer-events-auto w-screen max-w-md border rounded-md mt-4 ">
            <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
              <div class="flex items-start justify-between">
               

                <div class="mt-8">
                  <div class="flow-root">
                  <ul role="list" class="-my-6 divide-y divide-gray-200">
                    <li class="flex py-6">
                      <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                        <img src="<?= URL ?>/public/img/noodles.jpg" alt="" class="h-full w-full object-cover object-center">
                      </div>

                      <div class="ml-4 flex flex-1 flex-col">
                        <div>
                          <div class="flex justify-between text-base font-medium text-gray-900">
                            <h3>
                              <a href="#"> <?= $dados['nome_produto']; ?> </a>
                            </h3>
                            <p class="ml-4"><?= $dados['preco_produto']; ?> KZ</p>
                          </div>
                        </div>
                        <div class="flex flex-1 items-end justify-between text-sm">
                          <p class="text-gray-500 pr-2">Quantidade</p>
                          <input type="number" name="quantidade" id="quantidade" onchange="total()" class="mt-1 block w-12 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="0">
                          <input type="hidden" name="total" id="total">
                          <div class="flex">
                            <button type="button" class="font-medium  hover:text-green-200 pl-2" style="color: #04B3C8;">Remove</button>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="border-t border-gray-200 py-6 px-4 sm:px-6">
              <div class="flex justify-between text-base font-medium text-gray-900">
                <p>Total</p>
                <p id="totalresultado"></p>
              </div>
              <p class="mt-0.5 text-sm text-gray-500">O preço total inclui o imposto da plataforma.</p>
              <div class="mt-6">
                <a href="#" class="flex items-center justify-center rounded-md border border-transparent px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-green-200" style="background-color: #04B3C8;">Enviar pedido</a>
              </div>
              <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
              </div>
            </div>
          </div>
        </div>

        <script>
            function total(){
                var quantidade = document.getElementById('quantidade');
                var totalresultado = document.getElementById('totalresultado');
                var total = document.getElementById('total');
                var resultado = quantidade.value * <?= $dados['preco_produto']; ?>;
                totalresultado.innerHTML = resultado;
                total.value = resultado;
            }
        </script>
<?php } ?>