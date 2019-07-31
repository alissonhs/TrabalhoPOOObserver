<?php 

class Observer1 implements InterfaceObserver {

    private $id = 10;

    public function notify($id)
    {
        if($this->id == $id) {
            echo "Meu pedido " . $this->id . " está pronto!<br>";
        }
    }

}