<?php

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
    $title = 'Home page of our Website Project';
    $body = 'home';    
    break;
    
    case 'about.php' :
    $title = 'About page of our Website Project';
    $body = 'about inner';    
    break;

    case 'daily.php' :
    $title = 'Daily page of our Website Project';
    $body = 'daily inner';    
    break;  
    
    case 'project.php' :
    $title = 'Project page of our Website Project';
    $body = 'project inner';    
    break; 

    case 'contact.php' :
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';    
    break; 

    case 'gallery.php' :
    $title = 'Gallery page of our Website Project';
    $body = 'gallery inner';    
    break; 
}
//our navigational array!
$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body class="<?php echo $body  ;?>">   
<header>
<div class="inner-header">
<a href="index.php">

<img id="logo" src="images/logo2.png" alt="logo">
</a>

<nav>
  <ul>  
<?php
foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li><a  style="color:white;" href=" '.$key.' "> '.$value.' </a></li>';
    } else {
        echo '<li><a style="color:black;" href=" '.$key.' "> '.$value.' </a></li>';
    }
    }
?>
</ul>
</nav>
</div>
<!-- end inner header -->
</header>