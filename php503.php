<?php
//Associative
$salary = array("Mark"=>"35000","Jhon"=>"45000","Jeff"=>"55000");

echo "$salary[Mark]<br />";
echo "$salary[Jhon]<br />";
echo $salary["Jeff"];

for($i = 0; $i < count($salary); ++$i) {
    echo $people[$i]['Jeff'] ;
}