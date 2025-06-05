<?php
require_once 'animal.php';

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 2;
    }

    public function yell() {
        echo "Auooo\n <br>";
        echo "Auooo... Kera sakti! <br>";
        echo "Auooo... Hebat sekali!\n";
    }
}
?>
