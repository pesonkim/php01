#!/usr/bin/php
<?PHP

if ($argc == 4)
{
    $opp = preg_replace('/[^\+\-\*\/\%]/', '', $argv[2]);
    $a = intval($argv[1]);
    $b = intval($argv[3]);
    if ($opp == "+")
        echo $a + $b."\n";
    else if ($opp == "-")
        echo $a - $b."\n";
    else if ($opp == "*")
        echo $a * $b."\n";
    else if ($opp == "/")
        echo $a / $b."\n";
    else if ($opp == "%")
        echo $a % $b."\n";
}
else
    echo "Incorrect Parameters\n";

?>