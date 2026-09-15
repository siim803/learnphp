<?php

class Box {
    public $width;
    public $height;
    public $length;
    public $isOpen = false;
    public $hasBeenOpened = false;
};

    public function __construct(public $width, public $height, public $length) {
        var_dump('Object Created');
    }

    public function open(){
        $this->isOpen = true;
    }

    public function _toString() {
        return "I'm a box";
    }

    public function __destruct() {
        var_dump("Object destreoyed");
    }

};
$box1 = new box(1 ,2 , 3);
$box1 = 1;
var_dump($box1);
echo($box1);
$box1