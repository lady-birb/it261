<?php 

// celcius and farenheit

// $far = ($cel * 9/5) + 32;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Celcius Table</title>
    <style> 
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


table {
    width:500px;
    margin: 20px auto;
    border-collapse: collapse;
    border:1px solid lightblue;
}

td, th {
    border-collapse: collapse;
    border:1px solid lightblue;
    padding:5px;
}

h1, h2 {
    text-align:center;
    margin:10px 0;
    color:green;
}

</style>

</head>
<body>
    <h1>My Celcius / Farenheit Table!</h1>
<table>
<tr>
<th>Celcius</th>
<th>Farenheit</th>

</tr>
<?php
for($cel = 0; $cel <= 100; $cel += 3) {
    $far = ($cel * 9/5) + 32;
    echo '<tr>';
    echo '<td> '.$cel.' degrees </td>';
    echo '<td> '.number_format($far, 0).' degrees </td>';
    echo '</tr>';

}
?>

</table>

<h1>My Kilometers / Miles Table!</h1>
<table>
<tr>
<th>Kilometers</th>
<th>Miles</th>

</tr>
<?php
for($km = 0; $km <= 100; $km +=5) {
    $mil = ($km * 0.62137119);
    echo '<tr>';
    echo '<td> '.$km.' kilometers </td>';
    echo '<td> '.number_format($mil, 2).' miles </td>';
    echo '</tr>';
}
?>

</table>

</body>
</html>