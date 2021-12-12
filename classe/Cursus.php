<?php
class Cursus{
    public $cursus;
    public $niveau1;
    public $niveau2;
    public $niveau3;
    public $niveau4;
    

function __construct($cursus,$niveau1,$niveau2,$niveau3,$niveau4)
{
    $this->Cursus=$cursus;
    $this->niveau1=$niveau1;
    $this->niveau2=$niveau2;
    $this->niveau3=$niveau3;
    $this->niveau4=$niveau4;
}
function get_cursus(){
    return $this->cursus;
}
function get_niveau1(){
    return $this->niveau1;
}
function get_niveau2(){
    return $this->niveau2;
}
function get_niveau3(){
    return $this->niveau3;
}
function get_niveau4(){
    return $this->niveau4;
}


}
$Cursus = new Cursus(" Cursus académique","prepa 2 -","prepa 1 -","baccalaureat -","probatoire -");
?>
