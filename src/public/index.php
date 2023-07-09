<?php 
$countries = [
    "ブラジル" => 100,
    "日本" => 150,
    "スペイン" => 50000
];

foreach ($countries as $name => $price) {
  echo $name . ":" . $price . "人";
  echo "<br>";
}