<?php

class Enemy {
    public $tipe;
    public $warna;

    public function __construct($tipe, $warna) {
        $this->tipe = $tipe;
        $this->warna = $warna;
    }

    public function enemy_generator() {
        echo "Enemy generated: Type - {$this->tipe}, Color - {$this->warna}\n";
    }
}
?>
