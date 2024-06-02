<?php

require_once 'EnemyFactory.php';

$factory = new EnemyFactory();
$enemyTypes = ['Goblin', 'Orc', 'Troll'];
$enemyColors = ['Red', 'Green', 'Blue'];

$enemies = [];
for ($i = 0; $i < 10; $i++) {
    $type = $enemyTypes[array_rand($enemyTypes)];
    $color = $enemyColors[array_rand($enemyColors)];
    $enemies[] = $factory->getEnemy($type, $color);
}

foreach ($enemies as $enemy) {
    $enemy->enemy_generator();
}
?>
