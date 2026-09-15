<?php

class Box {
    use HasSmell;
    public bool $isOpen = false;
    private $hasBeenOpened = false;

    public function __construct(private int $width, public $height, public $length) {
        var_dump('Object Created');
    }

    public function setWidth(int $width) {
        if($width<0){
            $this->width = 0;
        }

        $this->width = $width;
    }
    public function getWidth() {
        return $this->width;
    }

    public function open(){
        $this->isOpen = true;
    }

    public function volume() {
        return $this->width * $this->height * $this->length;
    }

    public function test1() {
        var_dump($metal1->hasBeenOPened);
    }
}
class MetalBox extends box {
    use HasColor, HasSmell;
    public $weightPerUnit;
    
    public function mass() {
        return $this->weightPerUnit * $this->volume();
    }
}

trait HasColor {
    public $color;
    public function showColor() {
        return $this->color;
    }
}

trait HasSmell {
    public $smell;
    public function sniff() {
        return $this->smell;
    }
}


$metal1 = new MetalBox(1, 2, 3);
$metal1->weightPerUnit = 1;
var_dump($metal1->mass(), $metal1);
var_dump($metal1->HasBeenOpened);