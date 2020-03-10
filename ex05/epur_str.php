#!/usr/bin/php
<?PHP

if ($argc == 2)
{
    $arr = preg_split('/[\s]+/', $argv[1]);
    foreach ($arr as $key => $value)
    {
        if ($value == "")
        {
            unset($arr[$key]);
        }
    }
    foreach ($arr as $value)
    {
        echo $value;
        if ($value != end($arr))
            echo " ";
    }
    echo "\n";
}

?>