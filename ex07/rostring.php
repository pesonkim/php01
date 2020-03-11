#!/usr/bin/php
<?PHP

if ($argc >= 2)
{
    $str = preg_split('/[\s]+/', $argv[1], -1,PREG_SPLIT_NO_EMPTY);
}
array_push($str, $str[0]);
unset($str[0]);
foreach ($str as $key => $word)
{
    echo $word;
    if ($word != end($str))
            echo " ";
}
echo "\n";

?>