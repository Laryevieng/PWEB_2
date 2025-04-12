<?php
class Hewanku {
    public $nama;
    public function makan(){
        return "$this->nama sedang makan.";
    }
}
class Kucing extends Hewanku{
    public function bersuara(){
        return"$this->nama mengeong.";
    }
}
$kucing1 = new Kucing();
$kucing1->nama="Kitty";
echo $kucing1->makan(). "<br>";
echo $kucing1->bersuara();