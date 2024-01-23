<?php

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
case 'Friday' :
$treat = '<h2>Friday\'s Special is Chocolate Rose Petal Croissants</h2>';    
$pic = 'rosecro.jpg';
$alt = 'Chocolate Rose Petal Croissants';
$content = '<p>Experience a sensory journey with our chocolate and rose petal croissants: a delightful fusion of indulgence and floral elegance. These buttery, flaky croissants are baked fresh on <b>Fridays</b> and are generously filled with premium chocolate, creating a decadent interior that complements the delicate aroma of rose petals.</p>';
$background = '<body style="background:#d1babf">';
break;

case 'Saturday' :
    $treat = '<h2>Saturday\'s Special is Cherry Pie</h2>';    
    $pic = 'cherry.jpg';
    $alt = 'Cherry Pie';
    $content = '<p>Celebrate love and sweetness with our heart-shaped cherry pie, a delightful confection that adds a touch of romance to your <b>Saturday</b> dessert table. This artisanal pie is lovingly crafted with a flaky, golden crust that encases a luscious filling of succulent cherries.  </p>';
    $background = '<body style="background: #f4dae9">';
    break;

case 'Sunday' :
     $treat = '<h2>Sunday\'s Special is Chocolate and Vanilla Flower Cookies</h2>';    
     $pic = 'cookies.jpg';
     $alt = 'Chocolate Flower Cookies';
     $content = '<p>These delectable treats combine the rich, indulgent flavor of chocolate with the classic sweetness of vanilla, creating a perfect balance of tastes. The intricately crafted flower shapes add a touch of elegance to these delicious cookies, making them a delightful and visually appealing snack for any <b>Sunday</b> afternoon.</p>';
     $background = '<body style="background:#dfcce2">';
     break;   

 case 'Monday' :
 $treat = '<h2>Monday\'s Special is Strawberry Roll Cake</h2>';    
 $pic = 'rollcake.jpg';
 $alt = 'Strawberry Roll Cake';
 $content = '<p>Soft, light sponge cake envelops a luscious strawberry-infused cream, creating a perfect harmony of textures. Each bite offers a burst of juicy strawberry goodness, making this roll cake a delightful treat for even the gloomiest <b>Monday</b></p>';
 $background = '<body style="background:#dbacb8">';
   break;   

   case 'Tuesday' :
    $treat = '<h2>Tuesday\'s Special is Chocolate Mocha Brownies</h2>';    
    $pic = 'brownie.jpg';
    $alt = 'Chocolate Mocha Brownie';
    $content = '<p>Say hello to <b>Tuesday</b> with our Chocolate Mocha Brownies. Rich, fudgy, and infused with the bold essence of mocha, these brownies are a heavenly blend of intense chocolate and aromatic coffee flavors. The dense, moist texture melts in your mouth, while the subtle hint of coffee adds a sophisticated twist to the classic chocolate indulgence.</p>';
    $background = '<body style="background:#ae8e83">';
      break;   
   
 case 'Wednesday' :
 $treat = '<h2>Wednesday\'s Special is Coffee Cake Crumble Muffins</h2>';    
$pic = 'coffeecake.jpg';
 $alt = 'Coffee Cake Crumble Muffin';
 $content = '<p>Elevate your <b>Wednesday</b> mornings with our delectable coffee cake crumble muffins. These moist and flavorful treats are a harmonious blend of light, fluffy muffins and the irresistible essence of coffee cake. Each bite is a delightful journey of textures, from the soft muffin base to the generously crumbly, cinnamon-infused topping that adds a perfect crunch.</p>';
 $background = '<body style="background: #cbe4e8">';
  break; 

case 'Thursday' :
$treat = '<h2>Thursday\'s Special is Nutella Macarons</h2>';    
$pic = 'nutella.jpg';
 $alt = 'Nutella Macarons';
 $content = '<p>Indulge in the exquisite pleasure of our Nutella macarons – a symphony of delicate flavors and luxurious texture. Baked fresh every <b>Thursday</b>, our perfectly crafted French macarons feature a crisp, almond-based shell that gives way to a velvety Nutella filling.</p>';
 $background = '<body style="background:#b6ccac">';
  break; 

}

include('./includes/header.php')
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