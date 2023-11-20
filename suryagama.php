<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $matkul;
    private $citacita;
    // Methods
    function __construct($name, $nim, $matkul, $citacita)
    {
        $this->name = $name;
        $this->nim = $nim;
        $this->matkul = $matkul;
        $this->citacita = $citacita;
    }
    function get_name()
    {
        return $this->name;
    }

    function get_nim()
    {
        return $this->nim;
    }

    function get_matkul()
    {
        return $this->matkul;
    }
    function get_citacita()
    {
        return $this->citacita;
    }
}

$surya = new mahasiswa('gama', '2255201045', 'PBO', 'menjadi ultramen');

echo "Name: " . $surya->get_name();
echo "\n";
echo "nim: " . $surya->get_nim();
echo "\n";
echo "matkul: " . $surya->get_matkul();
echo "\n";
echo "citacita: " . $surya->get_citacita();