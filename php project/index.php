<?php
echo "Hello, World!";
$var1 = "Hello";
$var2 = "hello";
if (strtolower($var1) == strtolower($var2)) {
    echo '$var1 is Equal $var2';
} else {
    echo 'Not Equal';
}
echo str_replace("world", "Tala", "Hello world");
echo str_ireplace("world", "Tala", "Hello World");
$x = 4;
if ($x > 3)
    echo "X is grater than 3";
echo "<br>";
////////////////////////////////
$h = 20;
if ($h < "10") {
    echo "Have a good Morning";
} else if ($h < "20") {
    echo "Have a good day";
} else {
    echo "Have a good night";
}
echo "<br>";
//////////////////////////////////////
if ($h < "10"):
    echo "Have a good Morning";

elseif ($h < "20")://=> لازم بتكوم متصلة 
    echo "Have a good day";

else:
    echo "Have a good night";
endif;
echo "<br>";
//////////////////////////////////////////////////
//Switch 
$favColor = 'red';
switch ($favColor) {
    case "red":
        echo "Your fav color red";
        break;
    case "blue":
        echo "Your fav color blue";
        break;
    default:
        echo "";
}
echo "<br>";
////////////////////////////////////////////////////
//loops
for ($x = 0; $x <= 10; $x++) {
    echo "the number is : $x ";
    echo "<br>";
}

for ($x = 0; $x <= 10; $x++):
    echo "the number is : $x ";
    echo "<br>";
endfor;
echo "<br>";
/////////////////////////////////////////
//function
function writeMsg()
{
    echo "Hello, World!";
}
writeMsg(); // call the function
//////////////////////////////////////
//function argument 
echo "<br>";
function personName($fname, $year)
{
    echo " My name is $fname , Born in $year. <br>";
}
personName("tala", 2005);
personName("salma", 2007);
///////////////////////////////////////////
//function default value parameters
function personData($id, $name, $age = "unknown")
{
    echo "$id : $name:  $age <br>";
}
personData(1, "tala", 18);
personData(2, "salma");
/////////////////////////////////
//  declare(strict_types=1);
function addNumber(int $a, int $b)
{
    return $a + $b;
}
echo addNumber(1, 2);
///////////////////////////////////////
function setHeight(int $minHeight = 50)
{
    echo "The height is $minHeight <br>";

}
setHeight(350);
setHeight();// => will use the data type
//////////////////////////////////////////////
//Function Return Type
function sum(int $a, int $b)
{
    return $a + $b;
}
echo sum(1, 2);
echo "<br>";
//////////////////////////////////////////
// return type declarations 
function sumFloat(float $a, float $b): float
{
    return $a + $b;
}
echo sumFloat(1.5, 4.2);
echo "<br>";
function sumInt(float $a, float $b): int
{
    return $a + $b;
}
echo sumInt(2.5, 2.2);
echo "<br>";
//////////////////////////////////////////////
//passing Argument by refrence 
function addFive(&$value)
{
    $value += 5;

}
$num = 2;
addFive($num);
echo " <br> $num";
///////////////////////////////////////////////////
//Date and Time function 
// echo"<br>";
// echo "today ".date("Y-m-d")."<br>";
// echo "today ".date("Y.m.d")."<br>";
// echo "today ".date("Y/m/d")."<br>";
// echo "today ".date("Y");
// echo "<br> 2019 -".date("Y");
//////////////////////////////////////////
//Time 
echo "<br>the time is " . date("h:i:s a");
echo "";
////////////////////////////////////////////
//Time Zone
echo "<br>";
date_default_timezone_set("America/New_York");
echo "The Time is " . date("h:i:s a");
//////////////////////////////////////////////
//Function Example
echo "<br>";
function getAverage($x, $y, $z)
{
    return ($x + $y + $z) / 3.0;
}
echo getAverage(90, 80, 70) . "<br>";
echo getAverage(70, 80, 70) . "<br>";
function checkEvenOdd($x)
{
    if ($x % 2 == 0) {
        echo "Even  ";
    } else {
        echo "Odd";
    }
}
checkEvenOdd(9);
echo "<br>";
checkEvenOdd(4);
function sumEven()
{
    $sum = 0;
    for ($i = 0; $i < 100; $i += 2) {
        $sum += $i;
    }
    echo $sum;
}
sumEven();
function MaxNum($x, $y)
{
    if ($x > $y) {
        return $x;
    } else
        return $y;
}
echo "<br>";
echo maxNum(4, 8);
echo "<br>";
//////////////////////////////////////////////////
// Arrays
$cars = array("Volvo", "BMW", "Toyota");
echo " I like " . $cars[0] . "," . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";


echo "<br>";
for($i=0;$i< count($cars) ;$i++){
    echo $cars[$i] . "<br>";
}
foreach($cars as $val){
    echo $val ."<br>";

}//////////////////////////////////////////////
//Associative Arrays
$age= array("tala" => 21, "salma" => 19, "abood" => 16);
foreach($age as $num => $val){
    echo "key =". $num ." , value" .$val . "<br>";
}
//////////////////////////////////////////////////
//Multidimensional Arrays
echo "<br>";
$marks = array(
    array("tala", 90, 80, 70),
    array("salma", 80, 70, 60),
    array("abood", 70, 60, 50)
);
echo "<br>";
echo $marks[0][0] . " : " . $marks[0][1] . "," . $marks[0][2] . "," . $marks[0][3] . "<br>";
for($i= 0;$i< count($marks) ;$i++){//row
    echo $marks[$i][0] ;
    for($j= 0;$j< count($marks) ;$j++){//col
        echo $marks[$i][1] ;
    }
}







