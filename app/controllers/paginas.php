<?php

class Paginas extends Controller{
  
    public function index(){
        $dados=[
            'tituloPagina'=>'Página Inicial'
        ];
       $this->view('paginas/home',$dados);
    }
    public function sobre(){
        $dados=[
            'tituloPagina'=>'Página Sobre nós'
        ];
        $this->view('paginas/sobre',$dados);
    }
    public function visualizarproduto(){
        $dados=[
            'tituloPagina'=>'Pagina Visualizar Produto'
        ];
        $this->view('paginas/visualizarproduto',$dados);
    }
    public function login(){
        $dados=[
            'tituloPagina'=>'Pagina Login'
        ];
        $this->view('paginas/login',$dados);
    }
    public function cadastro(){
        $dados=[
            'tituloPagina'=>'Pagina Login'
        ];
        $this->view('paginas/cadastro',$dados);
    }
    public function carrinho(){
        $dados=[
            'tituloPagina'=>'Pagina do Carrinho'
        ];
        $this->view('paginas/carrinho',$dados);
    }
    public function mensagens(){
        $dados=[
            'tituloPagina'=>'Pagina de mensagem'
        ];
        $this->view('paginas/mensagens',$dados);
    }
    public function favoritos(){
        $dados=[
            'tituloPagina'=>'Pagina dos Favoritos'
        ];
        $this->view('paginas/favoritos',$dados);
    }
    public function servicos(){
        $dados=[
            'tituloPagina'=>'Pagina de Serviços'
        ];
        $this->view('paginas/servicos',$dados);
    }
    public function adultos(){
        $dados=[
            'tituloPagina'=>'Pagina de Adultos'
        ];
        $this->view('paginas/adultos',$dados);
    }
    public function infantil(){
        $dados=[
            'tituloPagina'=>'Pagina de Infantil'
        ];
        $this->view('paginas/infantil',$dados);
    }
    public function recoversenha(){
        $dados=[
            'tituloPagina'=>'Pagina de Infantil'
        ];
        $this->view('paginas/recoversenha',$dados);
    }
    public function homecomprador(){
        $dados=[
            'tituloPagina'=>'Pagina de Homecomprador'
        ];
        $this->view('paginas/homecomprador',$dados);
    }
    public function homevendedor(){
        $dados=[
            'tituloPagina'=>'Pagina do Vendedor'
        ];
        $this->view('paginas/homevendedor',$dados);
    }
    public function smsvendedor(){
        $dados=[
            'tituloPagina'=>'Pagina de mensagem do vendedor'
        ];
        $this->view('paginas/smsvendedor',$dados);
    }
    public function pedidos(){
        $dados=[
            'tituloPagina'=>'Pagina de pedidos do vendedor'
        ];
        $this->view('paginas/pedidos',$dados);
    }
    public function vender(){
        $dados=[
            'tituloPagina'=>'Pagina vender do vendedor'
        ];
        $this->view('paginas/vender',$dados);
    }
}