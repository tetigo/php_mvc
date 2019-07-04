<?php

echo "<h1>listar artigos</h1>";
var_dump($this->dados);


foreach ($this->dados['artigos'] as $artigo) {
    extract($artigo);
    echo "ID......:{$id}<br>";
    echo "TITULO..:{$titulo}<br>";
    echo "CONTEUDO:{$conteudo}<br>";
    echo "CREATED.:{$created}<br>";
    echo "MODIFIED:{$modified}<br><hr>";
}

