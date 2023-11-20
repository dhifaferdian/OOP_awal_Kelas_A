<?php
class ryan {
  // Properties
  private $nama;
  private $nim;
  private $matkul;
  private $citacita;

  // Methods
  function __construct($nama, $nim, $matkul, $citacita) {
    $this->nama = $nama;
    $this->nim = $nim;
    $this->matkul = $matkul;
    $this->citacita = $citacita;
  }

  function get_nama() {
    return $this->nama;
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

$ryan = new ryan("M.RYAN_MAULANA_NST", "2255201022", "PBO", "Pengusaha");
echo $ryan->get_nama();
echo "\n";
echo $ryan->get_nim();
echo "\n";
echo $ryan->get_matkul();
echo "\n";
echo $ryan->get_citacita();

?>