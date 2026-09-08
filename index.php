<?php

for($i = 0; $i<10; $i++){
    var_dump($i);
}

for($i = 9; $i>0; $i--){
    var_dump($i);
}

for($i = 2; $i<1_000_000; $i*=2){
    var_dump($i);
}

$time = time();
$i = 0;
while(time() < $time+1){
    var_dump($i++);
}

while(false){
    var_dump("While");
}

do{
    var_dump("Do");
} while(false);

//Infinit loops
//while(true){

//}

//for(;;){

//}

$fruits = ["Apple", "Banana", "Kiwi"];
foreach($fruits as $fruits){
    var_dump($fruits);
}

