<?php
//we will use this method from now on
if(isset($_POST['name'],
$_POST['email'])) {
$name = $_POST['name'];
$email = $_POST['email'];
echo $name;
echo '<br>';
echo $email;
} else {
   echo '
   <form action= "" method="post">
    <label>NAME</label>
    <input type="text" name="name">
    <label>EMAIL</label>
    <input type="text" name="email">
    <input type="submit" value="Send It!">

    </form>
   '; 
}
