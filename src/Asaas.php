<?php

namespace CodePhix\Cielo;


class Cielo {
    

    private $connection;
    
    public function __construct($token, $status = false) {
        $this->connection = new Connection($token, ((!empty($status)) ? $status : 'producao'));

    }

}
