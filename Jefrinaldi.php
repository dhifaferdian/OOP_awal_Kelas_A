<!DOCTYPE html>
<html>
<body>
<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;
  private $cita_cita;

  // Methods
  function set_name($name) {
    $this->name = $name;
  function __construct ($name, $nim, $matkul, $cita_cita){
  	$this->name = $name;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita_cita = $cita_cita;
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
  function get_matkul () {
  function get_matkul() {
  	return $this->matkul;
  }
  function get_cita_cita() {
  	return $this->cita_cita;
  }
}

$Jefri = new mahasiswa();
$Jefri->set_name('Jefrinaldi');
$Jefri->set_nim('2255201021');
$Jefri->set_matkul('pbo');
echo "Nama: " . $Jefri->get_name();
$Jefri = new mahasiswa('Jefrinaldi', '2255201021', 'pbo', 'Hebaatt');
echo $Jefri->get_name();
echo "<br>";
echo $Jefri->get_nim();
echo "<br>";
echo "nim: " .  $Jefri->get_nim();
echo $Jefri->get_matkul();
echo "<br>";
echo "matkul: " . $Jefri->get_matkul();
echo $Jefri->get_cita_cita();

?>

</body>
