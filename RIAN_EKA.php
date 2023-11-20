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

$rian = new mahasiswa();
$rian->set_name('RIAN EKA PUTRA');
$rian->set_nim('2255201043');
$rian->set_matkul('PBO');
echo "Name: " . $rian->get_name();
echo "/n";
echo "nim: " . $rian->get_nim();
echo "/n";
echo "matkul: " . $rian->get_matkul();
?>
 
