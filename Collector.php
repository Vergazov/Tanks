<?php
namespace App;

require_once 'vendor/autoload.php';

$aims = [
    new Aim(2),
    new Aim(7),
    new Aim(5),
    new Aim(15),
    new Aim(30),
    new Aim(1),
    new Aim(54),
    new Aim(12),
    new Aim(61)
];

foreach ($aims as $aim){
    $messages[] = (new Dispatcher())->getRightTanks($aim);
}

?>

<ul>
  <?php foreach ($messages as $message) : ?>
     <li><?= $message ?></li>
  <?php endforeach; ?>
</ul>