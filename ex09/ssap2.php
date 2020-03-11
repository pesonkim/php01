#!/usr/bin/php
<?PHP

if ($argc < 2)
    return;
unset($argv[0]);
$arr = array();
$final = array();
foreach($argv as $value)
{
    $tmp = preg_split('/[\s]+/', $value);
    if ($tmp[0] != NULL)
        $arr = array_merge($arr, $tmp);
}
foreach($arr as $key => $value)
{
    if (is_numeric($value))
    {
        $arr_n[] = $value;
        unset($arr[$key]);
    }
    else if (!preg_match('/^[a-zA-Z]+$/', $value))
    {
        $arr_s[] = $value;
        unset($arr[$key]);
    }
}
sort($arr, SORT_FLAG_CASE | SORT_NATURAL);
usort($arr_n, 'strcmp');
usort($arr_s, 'strcmp');
$final = $arr;
foreach($arr_n as $value)
{
    $final[] = $value;
}
foreach($arr_s as $value)
{
    $final[] = $value;
}
foreach ($final as $value)
{
    echo "$value\n";
}

?>