<?php 
 include'../app/views/topo.php';
 include '../app/libraries/conexao.php';
if(isset($_SESSION['email'])){
    header('location:'.URL.'/paginas/homecomprador');
    exit;
}


$connection = new Connection("localhost", "root", "", "boda");
$query = mysqli_query($connection->conn, "SELECT id_vendedor,nome_produto,descricao_produto,preco_produto,data_create FROM produtos ORDER BY id_produto");
$query2 = mysqli_query($connection->conn, "SELECT id_vendedor,nome_produto,descricao_produto,preco_produto,data_create FROM produtos WHERE preco_produto=200 ORDER BY id_produto");
?>
<div class="text-gray-600 " style="margin-top: 69px;">
    <div class="grid md:grid-cols-3"><!--content wrapper-->
         <div class="md:col-span-1">
             <nav class=" flex pl-12">
                 
                 <ul>
                     <li class="text-gray-700 font-bold text-xl mt-4">
                             <span>Categorias</span>
                     </li>
                     <li>
                        <a href="<?=URL?>/paginas/adultos">
                            <span>Adulto</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?=URL?>/paginas/infantil">
                            <span>Infantil</span>
                        </a>
                    </li>
                 </ul>
             </nav>
         </div><!--end nav-->
         <main class="px-16 bg-white md:col-span-2">
             <header class="mt-4">
                 <h2 class="text-gray-700 text-xl font-bold">Destaques</h2>
             </header>
             <div>
                 <div class="mt-8 grid lg:grid-cols-3 gap-3">
                 <?php
                      while($dados2 =mysqli_fetch_array($query2)){
                        ?>
                     <!--cards go here-->
                     <a href="<?=URL?>/paginas/visualizarproduto">
                     <div class="card border-gray-700 rounded-lg shadow-md mb-2">
                         <img src="<?=URL?>/public/img/noodles.jpg" alt="" class="w-full h-32 sm:h-48 object-cover rounded-t-lg">
                         <div class="m-4">
                             <span class="font-bold"><?=$dados2['nome_produto'];?></span>
                             <span class="block text-gray-500 text-sm"><?=$dados2['descricao_produto'];?></span>
                         </div>
                         <div class="badge pl-4 font-bold">
                             <span><?=$dados2['preco_produto'];?> KZ</span>
                         </div>
                     </div>
                     </a>
                     <!--cards fim-->
                     <?php
                }
                     ?>
                    </div>
             </div>
             <header class="mt-4">
                 <h2 class="text-gray-700 text-xl font-bold">Produtos e Serviços</h2>
             </header>
             <div>
                 <div class="mt-8 grid lg:grid-cols-3 gap-3">
                     <!--cards go here-->
                     <?php
                      while($dados =mysqli_fetch_array($query)){
                        ?>
                   <a href="<?=URL?>/paginas/visualizarproduto">
                   <div class="card border-gray-700 rounded-lg shadow-md mb-4">
                       <img src="<?=URL?>/public/img/curry.jpg" alt="" class="w-full h-32 sm:h-48 object-cover rounded-t-lg">
                       <div class="m-4">
                           <span class="font-bold"><?=$dados['nome_produto'];?></span>
                           <span class="block text-gray-500 text-sm break-all"><?=$dados['descricao_produto'];?></span>
                       </div>
                       <div class="badge pl-4 font-bold">
                           <span><?=$dados['preco_produto'];?> KZ</span>
                       </div>
                   </div>
                   </a>
                   <!--cards fim-->
                   <?php
                }
                     ?>
                    </div>
             </div>
         </main>
    </div>
</div>
<?php
include'../app/views/rodape.php';
?>