<?php
require_once "../method/json_loader.php"; //JSON形式ファイル読み込み用関数

$filename = "../recipes/recipe.json"; //ファイル名
$obj = json_load($filename); //ファイル読み込み

echo $obj['recipe1']."\n"; //出力

?>