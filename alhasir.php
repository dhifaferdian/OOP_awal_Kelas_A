<?php
class mahasiswa
{
  // Properties
  private $name;
  private $nim;
  private $matkul;

  // Methods
  function set_name($name)
  {
    $this->name = $name;
  }
  function get_name()
  {
    return $this->name;
  }
  function set_matkul($matkul)
  {
    $this->matkul = $matkul;
  }
  function get_matkul()
  {
    return $this->matkul;
  }
  function set_nim($nim)
  {
    $this->nim = $nim;
  }
  function get_nim()
  {
    return $this->nim;
  }
}

$upp = new mahasiswa();
$upp->set_name('ALHASHIR');
$upp->set_nim('2255201024');
$upp->set_matkul('PBO');
echo "Nama: " . $upp->get_name();
echo "\n";
echo "Nim: " . $upp->get_nim();
echo "\n";
echo "Matkul: " . $upp->get_matkul();
?>