<?php
$stringvar="Hello PHP";
$intvar=25;
$floatvar=10.5;
$boolvar=true;

echo "string: $stringvar <br>";
echo "integer: $intvar <br>";
echo "float: $floatvar <br>";
echo "boolean: $boolvar <br>";


function local(){
    $var="This is local variable";
    echo "$var <br>";
}
local();
$var2="This is global variable";
function globalscope(){
    global $var2;
    echo "$var2 <br>";

}
globalscope();
function staticscope(){
    static $count=0;
    $count++;
    echo "$count<br>";
}
staticscope();
staticscope();
staticscope();
?>