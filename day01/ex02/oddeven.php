#!/usr/bin/php
<?PHP

while (1)
{
    echo "Enter a number: ";
    $str = fopen("php://stdin", "r");
    $tmp = fgets($str);
    if ($tmp == NULL)
        break ;
    $answer = trim($tmp);
    fclose($str);
    if (is_numeric($answer))
    {
        if ($answer % 2 == 0)
            echo "The number $answer is even\n";
        else
            echo "The number $answer is odd\n";
    }
    else
        echo "'$answer' is not a number\n";
}
echo "\n";

?>