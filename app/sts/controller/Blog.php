<?php

namespace Sts\controller;



class Blog{
    public $dados;

    public function index(){
        echo "Controller da Pagina Blog";
        
        $listarArtigo = new \Sts\models\StsListarBlog();
        $this->dados = $listarArtigo->listar();

        // var_dump($this->dados);
        $carregarView = new \Core\ConfigView("Sts/views/blog/listarArtigo", $this->dados);
        $carregarView->renderizar();
    }
}