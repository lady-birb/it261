<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculating Form </title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1 class="travel">My Travel Calculator</h1>
<form action="<?php echo htmlspecialchars ($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>
<label>Name</label>
<input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']) ;?>">

<label>Total miles driving?</label>
<input type="number" name="miles" value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']) ;?>">

<label>How fast do you typically drive?</label>
<input type="number" name="speed" value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']) ;?>">

<label>How many hours per day do you plan on driving?</label>
<input type="number" name="hours_per_day" value="<?php if(isset($_POST['hours_per_day'])) echo htmlspecialchars($_POST['hours_per_day']) ;?>">

<label>Price of gas</label>
<ul>   
<li><input type="radio" name="gas" value="3.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.00) echo 'checked="checked" ';?>>$3.00</li>
<li><input type="radio" name="gas" value="3.50" <?php if(isset($_POST['gas']) && $_POST['gas'] == 3.50) echo 'checked="checked" ';?>>$3.50</li>
<li><input type="radio" name="gas" value="4.00" <?php if(isset($_POST['gas']) && $_POST['gas'] == 4.00) echo 'checked="checked" ';?>>$4.00</li>
</ul>

<label>Fuel efficiency</label>
<select name="efficiency">
<option value="" <?php if(isset($_POST['efficiency']) && is_null($_POST['efficiency'])) echo 'selected = "unselected"';?>>Select one</option>
<option value="40"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 40) echo 'selected = "selected"';?>>Great - 40mpg</option>
<option value="23"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 23) echo 'selected = "selected"';?>>Good - 23mpg</option>
<option value="10"<?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == 10) echo 'selected = "selected"';?>>Terrible - 10mpg</option>
</select>

<input type="submit" value="Calculate">

<p><a href="">Reset</a></p>

</fieldset>
</form>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {

if(empty($_POST['name'])) {

    echo '<p class="error">Please fill out your name</p>'; 
}

if(empty($_POST['miles'])) {

    echo '<p class="error">Please fill out your total driving miles</p>'; 
}

if(empty($_POST['speed'])) {

    echo '<p class="error">Please fill out how fast you plan on driving</p>'; 
}

if(empty($_POST['hours_per_day'])) {

    echo '<p class="error">How many hours per day would you like to drive?</p>'; 
}

if(empty($_POST['gas'])) {

    echo '<p class="error">Please select the cost of gas</p>'; 
}

if($_POST['efficiency'] == NULL) {
    echo '<p class="error">Please select your car\'s efficiency</p>';
}

if (isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hours_per_day'],
$_POST['gas'],
$_POST['efficiency']
)) {

$name = $_POST['name'];    
$miles = floatval($_POST['miles']);
$speed = floatval($_POST['speed']);
$hours_per_day = floatval($_POST['hours_per_day']);
$gas = floatval($_POST['gas']);
$efficiency = floatval($_POST['efficiency']);
if($speed == 0) {
    $speed = 1;
}
$totalhours = $miles / $speed;
if($hours_per_day == 0) {
    $hours_per_day = 1;
}
$totaldays = $totalhours/ $hours_per_day;
if($efficiency == 0) {
    $efficiency = 1;
}
$gastotal = $miles / $efficiency;
$cost = $gastotal * $gas;

if(!empty($name && $miles && $speed && $hours_per_day && $gas) && ($efficiency !=NULL)) {
echo '
<div class="box">
<p>Hello <b>'.$name.'</b>, you will be traveling a total of <b>'.$totalhours.' hours</b>, taking <b>'.$totaldays.' days.</b> 
You will also be using <b>'.number_format($gastotal,0).'</b> gallons of gas, costing you<b> $'.number_format($cost,2).' dollars</b></p>

</div>
';
}

}
 
}   


 // end server request


?>
</body>
</html>