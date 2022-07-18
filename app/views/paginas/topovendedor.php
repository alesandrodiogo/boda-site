<nav class="flex items-center p-3 flex-wrap fixed top-0 left-0 right-0" style="background-color: #04B3C8;">
 <a href="<?=URL?>/paginas/homevendedor" class="p-2 mr-3 inline-flex items-center">
 <span class="text-xl text-white font-bold uppercase tracking-wide">Boda</span>
 </a>
 <button class="text-white inline-flex p-3 rounded lg:hidden ml-auto nav-toggler" data-target="#navigation">
 <i class="fas fa-bars"></i>
 </button>
 <div class="hidden top-navbar w-full lg:inline-flex lg:flex-grow lg:w-auto" id="navigation">
 <form action="#" method="GET" class="lg:inline-flex lg:flex-row lg:ml-auto flex space-x-2 pl-2" style="width: 330px;">
 <input class="placeholder:italic placeholder:text-slate-400 block bg-white w-full border rounded-md py-2 pl-2 shadow-sm focus:outline-none sm:text-sm" placeholder="Buscar serviços ou produtos" type="text" name="search"/>
     <button class="bg-white w-12 focus:outline-none border rounded-md" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #04B3C8;"></i></button>
     </form>
   <div class="lg:inline-flex lg:flex-row lg:ml-auto flex flex-col">
   <a href="<?=URL?>/paginas/homevendedor" class="lg:inline-flex lg:w-auto px-3 py-2 rounded text-white hover:text-white hover:bg-teal-400"><span>Home</span></a>
   <a href="<?=URL?>/paginas/vender" class="lg:inline-flex lg:w-auto px-3 py-2 rounded text-white hover:text-white hover:bg-teal-400"><span>Vender</span></a>
   <a href="<?=URL?>/paginas/pedidos" class="lg:inline-flex lg:w-auto px-3 py-2 rounded text-white hover:text-white hover:bg-teal-400"><span>Pedidos</span></a>
   <a href="<?=URL?>/paginas/smsvendedor" class="lg:inline-flex lg:w-auto px-3 py-2 rounded text-white hover:text-white hover:bg-teal-400"><span><i class="fa-solid fa-comments"></i></span></a>
   <a href="<?=URL?>/loginController/logout" class="lg:inline-flex lg:w-auto px-3 py-2 rounded text-white hover:text-white hover:bg-teal-400"><span>Sair</span></a>
   </div>
 </div>
</nav>