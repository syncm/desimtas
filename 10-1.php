<?php

class Mokinys {

    public $vardas;
public $gimimoData;


function __construct($vardas, $gimimoData) {
    $this->vardas= $vardas;
    $this->gimimoData=$gimimoData;
}

function pris()
{
    return $this->vardas;
}

function pris1()
{
    return $this->gimimoData;
}


}

$mokiniai = [
    ['vardas' => 'Jonas', 'gimimoData' => '2001-10-31'], 
    ['vardas' => 'Ona', 'gimimoData' => '1992-10-31'], 
    ['vardas' => 'Karolis','gimimoData' => '1993-12-28'], 
    ['vardas' => 'Laura','gimimoData' => '1990-12-28'], 
    ];


    foreach($mokiniai as $zmogus)
{
     echo $zmogus['vardas'],' ';
     echo $zmogus['gimimoData'];
     echo "<br>";

}

foreach($mokiniai as $zmogus) {
$birthdate = new DateTime($zmogus['gimimoData']);
$today     = new DateTime();
$interval  = $today->diff($birthdate);
$a= $interval->format('%y metai');




echo "<br>";
if ($a >= 18) {

    echo $zmogus['vardas'], ' ', $a;
}
else 
echo $zmogus['vardas'], ' ','Nepilnametis';

}










?>