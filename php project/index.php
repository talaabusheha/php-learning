<?php echo "Hello, World!";
$var1="Hello";
$var2="hello";
if(strtolower($var1) == strtolower($var2)) {
    echo'$var1 is Equal $var2';
}else{
    echo 'Not Equal';
}
echo str_replace("world","Tala","Hello world");
echo str_ireplace("world","Tala","Hello World"); 
$x=4;
if($x>3)echo"X is grater than 3";
////////////////////////////////
$h=20;
if($h<"10"){
    echo"Have a good Morning";
}
else if($h<"20"){ 
    echo"Have a good day";
}
else{
    echo"Have a good night";
}
//////////////////////////////////////
if($h<"10"):
    echo"Have a good Morning";

elseif($h<"20")://=> لازم بتكوم متصلة 
    echo"Have a good day";

else:
    echo"Have a good night";
endif;
//////////////////////////////////////////////////
//Switch 
$favColor ='red';
switch($favColor) {
    case"red":
    echo"Your fav color red";
    break;
    case"blue":
    echo"Your fav color blue";
    break;
    default:
    echo "";
}
////////////////////////////////////////////////////
//loops
for($x=0;$x<=10;$x++){
    echo"the number is : $x ";
}

for($x= 0;$x<= 10;$x++):
    echo"the number is : $x ";
endfor;
/////////////////////////////////////////




