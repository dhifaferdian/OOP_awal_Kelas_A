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
    function set_nim($nim)
    {
        $this->nim = $nim;
    }
    function get_nim()
    {
        return $this->nim;
    }
    function set_matkul($matkul)
    {
        $this->matkul = $matkul;
    }
    function get_matkul()
    {
        return $this->matkul;
    }
}

$Jeff = new mahasiswa();
$Jeff->set_name('Jefrinaldi');
$Jeff->set_nim('2255201021');
$Jeff->set_matkul('pbo');
echo "Name: " . $Jeff->get_name();
echo "\n";
echo "nim: " . $Jeff->get_nim();
echo "\n";
echo "matkul: " . $Jeff->get_matkul();