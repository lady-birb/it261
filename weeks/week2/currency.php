<?php
// understanding the logic!!
$ruble_rate = 0.017;
$pound_rate = 1.15;
$canadian_rate = .76;
$euro_rate = 1.00;
$yen_rate = .0074;

$ruble = 10007;
$pound = 500;
$canadian = 5321;
$euro = 1200;
$yen = 2000;

$ruble_converted = $ruble * $ruble_rate;
$pound_converted = $pound * $pound_rate;
$candian_converted = $canadian * $canadian_rate;
$euro_converted = $euro * $euro_rate;
$yen_converted = $yen * $yen_rate;

$total = $ruble_converted + $pound_converted + $candian_converted + $euro_converted + $yen_converted;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Currency Logic Exercisse</title>

    <style>
        * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;

        }

        #wrapper {
            width: 500px;
            margin: 30px auto;
        }

        table {
            border:1px solid orange;
            border-collapse: collapse;
            width:500px;
        }

        th, td {
            border:1px solid orange;
            padding:8px;

        }

        h1, h2, h3 {
            text-align: center;
        }

        </style>

</head>
<body>
<div id="wrapper">
<h1>After our world-wind travels, we have returned with the following currencies</h1>
<ul>
<li>Rubles</li>
<li>Pound Sterling</li>
<li>Canadian Dollas</li>
<li>Euros</li>
<li>Yen</li>
</ul>
<h2>Whatever shall we do?</h2>

<table>
<tr>
<th colspan="2">Currency</th>
<th>Dollars</th>

</tr>
<tr>
    <th>Rubles</th>
    <td><?php echo $ruble; ?></td>
    <td>$<?php echo $ruble_converted; ?></td>
</tr>
<tr>
    <th>Pound Stering</th>
    <td><?php echo $pound; ?></td>
    <td>$<?php echo $pound_converted; ?></td>
</tr>
<tr>
    <th>Canadian Dollars</th>
    <td><?php echo $canadian; ?></td>
    <td>$<?php echo $candian_converted; ?></td>
</tr>
<tr>
    <th>Euros</th>
    <td><?php echo $euro; ?></td>
    <td>$<?php echo $euro_converted; ?></td>
</tr>
<tr>
    <th>Yen</th>
    <td><?php echo $yen; ?></td>
    <td>$<?php echo $yen_converted; ?></td>
</tr>
<tr>
    <th>Total</th>
    <td>American Dollars</td>
    <td>$<?php echo $total; ?></td>
</tr>


</table>

    </div>    
    <!-- end wrapper -->
</body>
</html>