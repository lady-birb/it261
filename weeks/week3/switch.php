<?php

//what is the isset function = is asking if something has been set?
// $variable = 'This is our variable';
// if(isset($variable)) {
//     echo 'Variable has been set';
// } else
// echo 'Variable has not been set';

// echo '<br>';

// if(isset($_GET['today'])) {
//     echo 'Today has been set';
// } else {
//     echo 'NOT!!!!';
// }

// the $_GET global variable receives data, our isset statement above returns NOT because there is no data exchange right now

if(isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

switch($today) {
case 'Friday' :
$coffee = '<h2>Friday is our Pumkin Latte Day!</h2>';    
$pic = 'pumpkin.jpg';
$alt = 'Pumpin Latte';
$content = '<p>A <b>Pumpkin Spice Latte</b> is a coffee drink made with a mix of traditional fall spice flavors (cinnamon, nutmeg, and clove), steamed milk, espresso, and often sugar, topped with whipped cream and pumpkin pie spice. </p>';
break;

case 'Saturday' :
    $coffee = '<h2>Friday is our Green Tea Latte Day!</h2>';    
    $pic = 'greentea.jpg';
    $alt = 'Green Tea';
    $content = '<p>A <b>green tea latte</b> is simply a latte made with green tea instead of espresso. Traditional lattes are a blend of steamed milk and espresso, but in a green tea latte, we remove the coffee and use tea in its place.</p>';
    break;

case 'Sunday' :
     $coffee = '<h2>Sunday is our Regular Joe Day!</h2>';    
     $pic = 'coffee.png';
     $alt = 'Regular Coffee';
     $content = '<p><b> A regular joe</b> is a coffee with cream (or milk) and two sugars.</p>';
     break;   

 case 'Monday' :
 $coffee = '<h2>Monday is our Latte Day!</h2>';    
 $pic = 'latte.jpg';
 $alt = 'Latte';
 $content = '<p>A <b>latte</b> or <b>caffè latte</b> is a milk coffee that is a made up of one or two shots of espresso, steamed milk and a final, thin layer of frothed milk on top</p>';
   break;   

   case 'Tuesday' :
    $coffee = '<h2>Tuesday is our Americano Day!</h2>';    
    $pic = 'americano.jpg';
    $alt = 'Americano';
    $content = '<p>An <b>Americano</b> is a type of coffee drink prepared by diluting an espresso shot with hot water at a 1:3 to 1:4 ratio, resulting in a drink that retains the complex flavors of espresso, but in a lighter way.</p>';
      break;   
   
 case 'Wednesday' :
 $coffee = '<h2>Wednesday is our Cappuccino Day!</h2>';    
$pic = 'cap.jpg';
 $alt = 'Cappuccino';
 $content = '<p>A <b>cappuccino</b> is an espresso-based coffee drink that is traditionally prepared with steamed milk foam. Variations of the drink involve the use of cream instead of milk, using non-dairy milk substitutes and flavoring with cinnamon or cocoa powder.</p>';
  break; 

case 'Thursday' :
$coffee = '<h2>Thursday is our Frap Day!</h2>';    
$pic = 'frap.jpg';
 $alt = 'Frap';
 $content = '<p>A <b>frap coffee</b>, cold coffee, Greek frappé, or just frappé is a Greek iced coffee drink generally made from spray-dried instant coffee, water, sugar, and milk.</p>';
  break; 

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
        
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        #wrapper {
            width:940px;
            margin:20px auto;
        }

        h1, h2, img {
            margin-bottom: 10px;
        } 

        p {
            margin-bottom: 20px;
        }

        </style>
</head>
<body>
    
<div id="wrapper">
<h1>My Wonderful Switch Classwork Exercise (Not the daily homework)</h1>
<?php
echo $coffee;
?>
<img src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content; ?>
<h2>Check out our Daily Specials</h2>

<ul>
<li><a href="switch.php?today=Sunday">Sunday</a></li>
<li><a href="switch.php?today=Monday">Monday</a></li>
<li><a href="switch.php?today=Tuesday">Tuesday</a></li>
<li><a href="switch.php?today=Wednesday">Wednesday</a></li>
<li><a href="switch.php?today=Thursday">Thursday</a></li>
<li><a href="switch.php?today=Friday">Friday</a></li>
<li><a href="switch.php?today=Saturday">Saturday</a></li>


</ul>

</div>
<!-- end wrapper -->


</body>
</html>

