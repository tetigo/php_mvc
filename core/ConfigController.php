<?php

namespace Core;

class ConfigController{
    private $url;
    private $urlConjunto; //url completa
    private $urlController; //nome da classe controller
    private $urlMetodo; //nome do metodo no Controller

    public function __construct(){
        if(!empty(filter_input(INPUT_GET, "url", FILTER_DEFAULT))):
            $this->url = filter_input(INPUT_GET, "url", FILTER_DEFAULT);
            $this->urlConjunto = explode('/', $this->url);
            
            if(isset($this->urlConjunto[0]) and isset($this->urlConjunto[1])):
                $this->urlController = $this->urlConjunto[0];
                $this->urlMetodo = $this->urlConjunto[1];    
            else:
                $this->urlController = 'home';
                $this->urlMetodo = 'index';                
            endif;
            // var_dump($this->urlController, $this->urlMetodo);
        else:
            $this->urlController = 'home';
            $this->urlMetodo = 'index';
        endif;
        echo "URL: {$this->url}<br>";
        echo "URL: {$this->urlController}/{$this->urlMetodo}<br>";
    }

    public function carregar(){
        $classe = "\\Sts\\controller\\".$this->urlController;
        echo $classe."<br>";
        $objClasse = new $classe;
        // $objClasse->index($this->urlMetodo);
        $objClasse->index();
    }
}