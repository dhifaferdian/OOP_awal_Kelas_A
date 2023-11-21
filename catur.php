<?php
class mahasiswa
{
    // Properties
    private $name;
    private $nim;
    private $mata_kuliah;
    private $citacita;

    // Methods
    function __construct($name, $nim, $mata_kuliah, $citacita)
    {
        $this->name = $name;
        $this->nim = $nim;
        $this->mata_kuliah = $mata_kuliah;
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
    
    function get_mata_kuliah()
    {
        return $this->mata_kuliah;
    }
    function get_citacita()
    {
        return $this->citacita;
    }
}

$catur = new mahasiswa('catur', '2255201015', 'PBO', 'menjadi power ranger hitam');
echo "name: " . $catur->get_name();
echo "\n";
echo "nim: " . $catur->get_nim();
echo "\n";
echo "mata kuliah: " . $catur->get_mata_kuliah();
echo "\n";
echo "cita cita: " . $catur->get_citacita();
