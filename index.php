<?php
namespace index;
include"lib/lib.php";
include"car.php";

$tom = new \base\car("Это машина");
$bom = new \work\car(" в библиотеке");

?>

<link rel="stylesheet" href="container/style.css">

<div class="container">
  <p><?php echo $tom -> name , $bom -> name;?></p>
</div>