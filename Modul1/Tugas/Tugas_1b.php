<?php 
abstract class Hewan {
    protected $nama;
    
    public function __construct($nama) {
        $this->nama = $nama;
    }
    abstract public function bersuara();
}
class Anjing extends Hewan {
    public function bersuara() {
        return "Guk guk!";
    }
    
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . " (Anjing)<br>";
        echo "Suara: " . $this->bersuara() . "<br>";
    }
}

class Kucing extends Hewan {
    public function bersuara() {
        return "Meow meow!";
    }
    
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . " (Kucing)<br>";
        echo "Suara: " . $this->bersuara() . "<br>";
    }
}

$anjing = new Anjing("Buddy");
$kucing = new Kucing("Kitty");

echo "<h3>Tugas 2: Class Hewan dengan Turunan</h3>";
$anjing->tampilkanInfo();
echo "<br>";
$kucing->tampilkanInfo();
?>