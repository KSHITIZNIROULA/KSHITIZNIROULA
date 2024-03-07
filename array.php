<?php
// $age =array(
//     "ram"=>24,
//     "shysam"=>4,
// );
// echo $age["ram"];
// echo "<pre>";
// echo print_r($sge);
// echo "</pre>"

$emp =[
    [1,"anup","manager",3000],
    [2,"shayam","salesman",2300],
    [3,"asish","Coperator",2000],
];
// echo"<pre>";
// print_r($emp);
// echo"</pre>";

foreach($emp as $value1){
    foreach($value1 as $value2){
        echo $value2."";
    }
    echo "<br>";
}

//echo $emp[0][1];//
?>