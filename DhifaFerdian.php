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
  function __construct ($dhifa, $nim, $matkul, $cita_cita){
  	$this->name = $dhifa;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->cita_cita = $cita_cita;
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
  function get_cita_cita() {
  	return $this->cita_cita;
  }
}

$dhifa = new mahasiswa('Muhammad Dhifa Ferdian', '2255201050', 'PBO', 'Pejabat');
echo $dhifa->get_name();
echo "<br>";
echo $dhifa->et_nim();
echo "<br>";
echo $dhifa->get_matkul();
echo "<br>";
echo $dhifa->get_cita_cita();

?>
 
</body>
</html>
