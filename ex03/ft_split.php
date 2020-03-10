#!/usr/bin/php
<?PHP

function ft_split($string)
{
    $arr = preg_split('/[\s]+/', $string);
    foreach ($arr as $key => $value)
    {
        if ($value == "")
        {
            unset($arr[$key]);
        }
    }
    sort($arr);
    return $arr;
}

?>