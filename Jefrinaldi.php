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
  function __construct ($name, $nim, $matkul, $cita_cita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->citacita = $citacita;
  }
  function get_name() {
    return $this->name;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
  function set_matkul($matkul) {
  	$this->matkul = $matkul;
  }
  function get_matkul() {
  	return $this->matkul;
  }
  function set_citacita($citacita) {
    $this->citacita = $citacita;
  }
  function get_citacita() {
  	return $this->citacita;
  }
}

$Jefri = new mahasiswa('Jefrinaldi', '2255201021', 'pbo', 'Hebaatt');

echo "Nama:" . $Jefri->get_name();
echo "<br>";
echo "NIM:" . $Jefri->get_nim();
echo "<br>";
echo "Matkul: " . $Jefri->get_matkul();
echo "<br>";
echo "Cita-Cita: " . $Jefri->get_citacita();

?>
</body>
