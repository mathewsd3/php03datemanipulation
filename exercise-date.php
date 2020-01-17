<?php

function showTitle($title)
{
echo "<br/><b>&#9830; $title</b><br/>";
echo '<hr/>';
}

showTitle('Exercise 1');

//$date = date();
//echo date_format($date,"Y/m/d H:i:s");
echo date("D, j M Y h:i:s").'<br>';


showTitle('Exercise 2');

echo date("j").'<br>';


showTitle('Exercise 3');

echo date("n").'<br>';
echo date("M").'<br>';


showTitle('Exercise 4');

echo date("Y").'<br>';

showTitle('Exercise 5');

echo date("j, n, Y").'<br>';
echo date("j, F, Y").'<br>';

showTitle('Exercise 6 (Add 1 month to the constant date)');

$month= date("n");
$nextmonth = $month+1;

//echo $month.'<br>';
//echo $nextmonth.'<br>';

//$monthNum  = 3;


echo date("D, j ");

$monthName = date('M', mktime(0, 0, 0, $nextmonth, 10)); 
echo $monthName;

echo date(" Y h:i:s").'<br>';

showTitle('Exercise 7 (Number of days since 31 December 1973)');

$to_date = time(); // Input your date here e.g. strtotime("2014-01-02")
$from_date = strtotime("1973-12-31");

$day_diff = $to_date - $from_date;
echo floor($day_diff/(60*60*24))." Days".'<br>';

showTitle('Exercise 8');

echo date("l, j F Y").'<br>';


?>