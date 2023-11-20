<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mat_kul;
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
    function set_mat_kul($mat_kul)
    {
        $this->mat_kul = $mat_kul;
    }
    function get_mat_kul()
    {
        return $this->mat_kul;
    }
}

$yusuf = new mahasiswa();
$yusuf->set_name('Yusuf');
$yusuf->set_nim('2255201040');
$yusuf->set_mat_kul('PBO');
echo "Name: " . $yusuf->get_name();
echo "\n";
echo "nim: " . $yusuf->get_nim();
echo "\n";
echo "mat_kul: " . $yusuf->get_mat_kul();