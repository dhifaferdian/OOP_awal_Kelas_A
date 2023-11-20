<?php
class identitas {
  // Properties
  private $nama;
  private $nim;
  private $matkul;

  // Methods
  function __construct($nama) {
    $this->nama = $nama;
  }

  function get_nama() {
    return $this->nama;
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

}

$identitas = new identitas();
$identitas->set_nama('M.RYAN_MAULANA_NST');
$identitas->set_nim('2255201022');
$identitas->set_matkul('PBO');
echo "nama: " . $identitas->get_nama();
echo "\n";
echo "nim: " .  $identitas->get_nim();
echo "\n";
echo "matkul: " .  $identitas->get_matkul();

?>