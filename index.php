<?php
$test = array(1, 2, 3,);
$test = [1, 2, 3,];
$test = [8, "sukoma", true, [1, 2, 3]];
$test = [
    1,
    "name" => "Siim",
    "age" => 18,
    3,
    "aadsas",
    true,
    100 => "lol",
    "troll"
    ];

var_dump($test["name"]);
array_push($test, "aaaaaaaaa", "dtryui", 3);
unset($test[3]);
//var_dump($test);