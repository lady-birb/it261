<?php

// do not call out the header include yet!
// the following information is above the doctype
include('config.php');

// is id set??

if(isset($_GET['id'])) {
$id = (int)$_GET['id'];


} else {
    header('Location: project.php');
}

$sql = 'SELECT * FROM animals WHERE animals_id = '.$id.'';


$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn, $sql)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {

$name = stripcslashes($row['name']);  
$species = stripcslashes($row['species']); 
$birthday = stripcslashes($row['birthday']); 
$personality = stripcslashes($row['personality']); 
$catchphrase = stripcslashes($row['catchphrase']);
$fave= stripcslashes($row['fave']);
$details = stripcslashes($row['details']);     
 // will i add a colume?
 $feedback = '';   


    } // close while loop


} else {
 $feedback = 'Houston, we have a problem';

}

include('./includes/header.php');

?>

<main>

<h1><?php echo $name; ?></h1>
<ul>
<?php
echo '
<li><b>catchphrase:</b> "'.$catchphrase.'"</li>
<li><b>Species:</b> '.$species.'</li>
<li><b>Birthday:</b> '.$birthday.'</li>
<li><b>Personality:</b> '.$personality.'</li>

';
?>
</ul>
<p><?php echo $details;?></p>
<p>Return to our <a href="project.php"> main page</a></p>
</main>

<aside>
<figure>
<img src="./images/animal<?php echo $id;?>.jpg" alt="<?php echo $name;?>">
<figcaption>
    <?php echo $fave;?>
</figcaption>
</figure>
</aside>

</div>
<!--end wrapper-->

<?php
@mysqli_free_result($result);
@mysqli_close($iConn);
include('./includes/footer.php');