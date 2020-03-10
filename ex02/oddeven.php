#!/usr/bin/php
<?PHP

while ($answer != "^D")
{
    echo "Enter a number: ";
    if (($answer = trim(fgets(STDIN))) == NULL)
    {
        echo "^D\n";
        break ;
    }
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

?>