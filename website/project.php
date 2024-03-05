<?php

include('config.php');
include('./includes/header.php');
?>
<main>
  <h1>Welcome to the Animal Crossing Hub!</h1>
<?php
$sql = 'SELECT * FROM animals';

// now, we need to connect to the database!!

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we have a row, which translates into an array
// if our result is greater than 0, we are happy

if(mysqli_num_rows($result) > 0) {

// we are going to add a while loop

while($row = mysqli_fetch_assoc($result)) {

    echo '
   <h2>Information about: '.$row['name'].'</h2> 
   <ul> 
   <li><b>Species:</b> '.$row['species'].' </li> 
   <li><b>Birthday:</b> '.$row['birthday'].' </li>
   <li><b>Personality:</b> '.$row['personality'].' </li>    
    </ul>
  <p>For more information about '.$row['name'].', click <a href="animal-view.php?id='.$row['animals_id'].'">here</a></P>  
    ';
}

} else {
echo 'Nobody home!';

} 
@mysqli_free_result($result);
@mysqli_close($iConn);
?>
</main>

</div>
<?php
include('./includes/footer.php');
?>