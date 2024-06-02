<?php

require_once 'enemy.php';

$enemies = [];
$enemyTypes = ['Goblin', 'Orc', 'Troll'];
$enemyColors = ['Red', 'Green', 'Blue'];

for ($i = 0; $i < 10; $i++) {
    $type = $enemyTypes[array_rand($enemyTypes)];
    $color = $enemyColors[array_rand($enemyColors)];
    $enemies[] = new Enemy($type, $color);
}

foreach ($enemies as $enemy) {
    $enemy->enemy_generator();
}
?>
