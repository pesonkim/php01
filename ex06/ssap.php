#!/usr/bin/php
<?PHP

unset($argv[0]);
$arr = array();
foreach($argv as $value)
{
    $tmp = preg_split('/[\s]+/', $value);
    if ($tmp[0] != NULL)
        $arr = array_merge($arr, $tmp);
}
sort($arr);
foreach ($arr as $value)
    echo "$value\n";

?>