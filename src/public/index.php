<?php 
//$countries = [
    //"ブラジル" => 100,
    //"日本" => 150,
    //"スペイン" => 50000
//];

//foreach ($countries as $name => $price) {
  //echo $name . ":" . $price . "人";
  //echo "<br>";
//}

$animals1 = ["いぬ" => 1, "ねこ" => 2, "うさぎ" => 6];
$animals2 = ["ぞう" => 1, "きりん" => 1, "さい" => 4];
$animalsList = ["小動物" => $animals1, "大動物" => $animals2];

$myOwnAnimalList = [];
foreach ($animalsList as $animals) {
    foreach ($animals as $animalName => $animalNum) {
        if ($animalNum > 2) {
            $myOwnAnimalList[] = $animalName;
        }
    }
}
echo implode("<br>", $myOwnAnimalList);