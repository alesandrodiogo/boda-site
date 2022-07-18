<?php 
 if(isset($_SESSION['email'])){
    include'../app/views/paginas/topocomprador.php';
}else{
    header('location:'.URL.'/paginas/home');
    exit;
}
?>
<div class="flex items-center" style="margin-top: 69px;">
<img src="<?=URL?>/public/img/undraw_under_construction_-46-pa.svg" alt="" style="width: 100%; height: 500px;">
</div>