<?php
namespace Sts\models;

use PDO;

class StsListarBlog{
    public $resultado;

    public function listar(){
        // echo "<br>Pesquisar no BD";
        $listarArtigo = new \Sts\models\Conn;
        
        // var_dump($conn);
        $limit = 10;
        $consulta=  "select * from artigos limit :limit;";
        $prep = $listarArtigo->getConn()->prepare($consulta);
        $prep->bindParam(':limit', $limit, PDO::PARAM_INT);
        $prep->execute();
        $this->resultado['artigos'] = $prep->fetchAll(PDO::FETCH_ASSOC);
        return $this->resultado;

        
    }
}

?>