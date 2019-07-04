<?php

namespace Core;

class ConfigView{
    private $nome;
    private $dados;

    public function __construct($nome, array $dados=null)
    {
        $this->nome = (string) $nome;
        $this->dados = $dados;
    }

    public function renderizar(){
        if(file_exists('app/'.$this->nome.'.php')):
            echo "<br>";
            include 'app/'.$this->nome.'.php';
            
        else:
            echo "<br>Erro ao Carregar a View: {$this->nome}";
        endif;
    }
}