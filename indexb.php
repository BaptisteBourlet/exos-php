<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Dates</title>
</head>
<body>
<?php
echo date('d-m-Y').'<br>';
echo date('d-m-y').'<br>';
echo date('l j F -Y').'<br>';
$timestamp = strtotime('02-09-2016 15:00:00');
echo ($timestamp).'<br>';

$date1 = "16-05-2016";
$date2 = date("d-m-Y");
$diff = ((strtotime($date2)) - strtotime($date1));
$diff = round($diff / (60*60*24));
echo $diff."<br>";

$number=cal_days_in_month ( CAL_GREGORIAN,2,2017).'<br>';
echo ($number);

print date('d M Y', strtotime('+20 day')).'<br>';

print date('d M Y', strtotime('-22 day')).'<br>';

?>
</body>
</html>