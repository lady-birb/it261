
<html>
<head>
<title>My Adder Assignment</title>
<style>

* {
    padding:0;
    margin:0;
    box-sizing:border-box;
}

.red {
color: red;
}

h1, h2, p {
text-align:center;
}

h2 {
padding-bottom: 15px;
font-size:1.5em;

}

h1 {
color:green;
margin-top:20px;

}

fieldset {
border:1px solid red;
padding:10px;
}

form {
    width:400px;
    margin: 10px auto;
    padding:10px;
}

label {
   float:left;
    display:block;
    margin-top:5px;
    margin-right:5px;
}

input {
  
    
   margin-top:5px;
   
   
}

input[type=submit] {
    width:auto;
    float:left;
    display:block;
  
}

.reset {
    display:block;
    text-align:center;
}

</style>
</head>
<body>
<h1>Adder.php</h1>

<form action="" method="post">
<fieldset>
<label>Enter the first number:</label>
<input type="text" name="num1">
<label>Enter the second number:</label>
<input type="text" name="num2">
<input type="submit" value="Add Em!!">
</fieldset>
</form>

<?php     //adder-wrong.php
if($_SERVER['REQUEST_METHOD'] == 'POST')
if (isset($_POST['num1'],
$_POST['num2'])) {
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num1_int = intval($num1);
$num2_int = intval($num2);
$mytotal = $num1_int+$num2_int;

if(empty($_POST['num1'] &&
$_POST['num2'] )) {

echo '<p class="red">Please fill out your numbers</p>';
} else {
echo '<h2>You added '.$num1.' and '.$num2.'</h2>
<p class="red">and the answer is<br>'.$mytotal.'!</p>
<br>
<a class="reset" href="">Reset page</a>';
}

}
?>

</body>