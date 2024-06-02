<?php

require_once 'enemy.php';

class EnemyFactory {
    private $enemies = [];

    public function getEnemy($tipe, $warna) {
        $key = $tipe . '_' . $warna;

        if (!isset($this->enemies[$key])) {
            $this->enemies[$key] = new Enemy($tipe, $warna);
        }

        return $this->enemies[$key];
    }
}
?>
