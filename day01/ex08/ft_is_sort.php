#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
    $arr = $tab;
    sort($arr);
    $diffcount = count(array_diff_assoc($tab, $arr));
    if ($diffcount == 0)
        return TRUE;
    else
        return FALSE;
}

?>