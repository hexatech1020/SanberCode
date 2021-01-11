<?php 

trait Animal{
    public $name;
    public $blood = 50;
    public $legCount;
    public $ability;

    public function ability(){
        return $this->name . ' sedang ' . $this->ability .'<br>';
    }
}

trait Fight{
    public $attackPower;
    public $defensePower;

    public function attack($obj){
        echo $this->name . " sedang menyerang " . $obj->name ."</br>";
    }

    public function beingAttack($obj){
        echo $this->name . " sedang diserang " . $obj->name ."</br>";
        $this->blood = $this->blood - ($obj->attackPower / $this->defensePower);
    }
}

class Tiger{

    use Animal, Fight;
    public $jenishewan = 'Harimau';

    public function __construct($cName, $cLegCount, $cAbility, $cAttackPower, $cDefensePower){
        $this->name = $cName;
        $this->legCount = $cLegCount;
        $this->ability = $cAbility;
        $this->attackPower = $cAttackPower;
        $this->defensePower = $cDefensePower;
    }
    public function getInfoHewan(){
        echo '<br>Nama Hewan = ' . $this->name.'<br>Darah = ' . $this->blood.'<br>Jumlah Kaki = ' . $this->legCount
        .'<br>Keahlian = ' .$this->ability.'<br>Attack Power = ' .$this->attackPower.'<br>Defense Power = ' .$this->defensePower.
        '<br>Jenis Hewan = '. $this->jenishewan."<br>"; 
    }
}

class Eagle{

    use Animal, Fight;
    public $jenishewan = 'Elang';

    public function __construct($cName, $cLegCount, $cAbility, $cAttackPower, $cDefensePower){
        $this->name = $cName;
        $this->legCount = $cLegCount;
        $this->ability = $cAbility;
        $this->attackPower = $cAttackPower;
        $this->defensePower = $cDefensePower;
    }
    public function getInfoHewan(){
        echo '<br>Nama Hewan = ' . $this->name.'<br>Darah = ' . $this->blood.'<br>Jumlah Kaki = ' . $this->legCount
        .'<br>Keahlian = ' .$this->ability.'<br>Attack Power = ' .$this->attackPower.'<br>Defense Power = ' .$this->defensePower. 
        '<br>Jenis Hewan = '. $this->jenishewan."<br>"; 
    
    }
}

$harimau = new Tiger('harimau1', 4, 'Lari Cepat',7, 8);
$elang = new Eagle('elang1', 2, 'Terbang Tinggi', 10, 5);

echo $harimau->ability();
echo $elang->ability();

$harimau->attack($elang);
$harimau->beingAttack($elang);


$harimau->getInfoHewan();
$elang->getInfoHewan();

?>
