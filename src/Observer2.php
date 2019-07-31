<?php 

class Observer2 implements InterfaceObserver {

    private $id = 20;

    public function notify($id)
    {
        if($this->id == $id) {
            echo "Meu pedido " . $this->id . " está pronto!<br>";
        }
    }

}