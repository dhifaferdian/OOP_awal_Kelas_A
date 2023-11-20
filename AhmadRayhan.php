<!DOCTYPE html>
<html>
<body>

<?php
class mahasiswa {
  // Properties
  private $name;
  private $nim;
  private $matkul;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_matkul($matkul) {
    $this->matkul = $matkul;
  }
  function get_matkul() {
    return $this->matkul;
  }
  function set_nim($nim) {
    $this->nim = $nim;
  }
  function get_nim() {
    return $this->nim;
  }
}

$upp = new mahasiswa();
$upp->set_name('Rayhan');
$upp->set_nim('2255201053');
$upp->set_matkul('PBO');
echo "Nama: " . $upp->get_name();
echo "<br>";
echo "Nim: " .  $upp->get_nim();
echo "<br>";
echo "Matkul: " .  $upp->get_matkul();
?>
 
</body>
</html>
