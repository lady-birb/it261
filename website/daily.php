<?php
include('config.php');
include('./includes/header.php');

?>

<div id="wrapper">


<main>

<h1>Welcome to the Lillypad Cafe and Bakery </h1>

<h3> We offer a large veriety of teas, espresso beverages, and bakery treats made fresh each day.</h3>

<?php
echo $treat;
echo $background;
?>

<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>


</main>


<aside>

<h3>This Week's Bakery Specials</h3>
<ul>
<li><a href="daily.php?today=Sunday">Sunday</a></li>
<li><a href="daily.php?today=Monday">Monday</a></li>
<li><a href="daily.php?today=Tuesday">Tuesday</a></li>
<li><a href="daily.php?today=Wednesday">Wednesday</a></li>
<li><a href="daily.php?today=Thursday">Thursday</a></li>
<li><a href="daily.php?today=Friday">Friday</a></li>
<li><a href="daily.php?today=Saturday">Saturday</a></li>


</ul>
</aside>



</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php'); 