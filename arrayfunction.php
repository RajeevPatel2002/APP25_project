<?php
$arr=[1,2,3,4,5,6];
// array_push($arr,7);
// echo "<pre>";
// print_r ($arr);
// array_pop($arr);
// echo "<pre>";
// print_r ($arr);
// array_unshift($arr,"Rajeev Patel Is The father of Vansh Beta.");
// echo "<pre>";
// print_r ($arr);
// array_shift($arr);
// echo "<pre>";
// print_r ($arr);
// $a=[1,2,3,4];
// $b=[5,4,6,7];
// $c=array_merge($a,$b);
// print_r($c);
// $a=1;
// $b=3;
// $c="Rajeev";
// print_r(compact('a','b','c'));
// $arr=[1,5,6,4,3,7,10,6,9,2,8];
// sort($arr);
// print_r($arr);
// $arr=[1,5,6,4,3,7,10,6,9,2,8];
// rsort($arr);
// print_r($arr);
// print_r(range('a','z'));
// $key=range('a','f');
// $value=range(0,5);
// $arr=array_combine($key,$value);
// print_r($arr);
// $animal=["dog","Elephant","Donkey","Horse","Lion"];
// print_r(array_search("dog",$animal));
?>
<?php
$arr = [1, 1, 2, 2,2,2,2,3,3,3,3,3,3, 2, 3, 2, 4, 4, 4,7,7,7,7,7, 7, 4, 5,6];
$Raj = array_unique($arr);

echo "Unique elements are : " . implode(',', $Raj);
// print_r( $Raj);
?>