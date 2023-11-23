<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa {
  
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $citacita;

  // Methods
  function __construct ($name, $nim, $matkul, $citacita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->citacita = $citacita;
  }
  function get_name() {
    return $this->name;
  }
  function get_nim() {
    return $this->nim;
  }
  function get_matkul() {
  	return $this->matkul;
  }
  function get_citacita() {
  	return $this->citacita;
  }
}

$Jefri = new mahasiswa('Jefrinaldi', '2255201021', 'pbo', 'Hebaatt');

echo $Jefri->get_name();
echo "<br>";
echo $Jefri->get_nim();
echo "<br>";
echo $Jefri->get_matkul();
echo "<br>";
echo $Jefri->get_citacita();

?>
</body>
