<?php
$gods=array();
    $gods[]="Kareena";
    $gods[] = "Ram";
    $gods[] = "Mila";
    $gods[] = "Aruna";
    $gods[] = "Kushal";
    $gods[] = "Ranzan";
    $gods[] = "Sabin";
    $gods[] = "Karuna";




    //  print_r($gods);



    $searchString=strtolower($_GET['search']);//Strlower converts uppercase letter to lowercase
// echo $_GET['search'].' searching...';
// print_r($gods);//echo only prints string
$hint='';
$len = strlen($searchString);//strlen returns number of bytes
if($len==0){
    '';
    exit(0);//String input nahuda exit hunxa
}
foreach ($gods as $god) {//Foreach le array ma matra kam garxa ra array ma vayako each 
    if ($searchString == strtolower(substr($god, 0, $len))) {
       // $hint .= $god.",";
       $hint= $hint.$god.",";
    }
    //if($hint != ''){
       // break;
   // } euta matra suggestion lina
}
echo $hint;
    ?>
