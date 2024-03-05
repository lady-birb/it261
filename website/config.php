<?php

ob_start();

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

    case 'animal-view.php' :
        $title = 'Animal Crossing Character Information';
        $body = 'animal-view inner';    
        break; 

    case 'contact.php' :
    $title = 'Contact page of our Website Project';
    $body = 'contact inner';    
    break; 

    case 'thx.php' :
        $title = 'Thank you page for our form';
        $body = 'thx inner';    
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

function make_links($nav) {
    $my_return = '';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
    $my_return .= '<li><a class="current" href="'.$key.'"> '.$value.'</a></li>'; 
    } else {
    $my_return .= '<li><a href="'.$key.'"> '.$value.'</a> </li>';  
    }
    
    } //end foreach
    return $my_return;
    
    } // end function
    
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

// my form's php

$first_name = '';
$last_name = '';
$email = '';
$gender = '';
$phone = '';
$vacation = '';
$travel = '';
$comments = '';
$privacy = '';

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$gender_err = '';
$phone_err ='';
$vacation_err = '';
$travel_err = '';
$comments_err = '';
$privacy_err = '';

if($_SERVER['REQUEST_METHOD'] == "POST") {

// if inputs are empty, we will declare a statement else we will assign the $_POST to a variable
// $wines = $_POST['wines'] 

if(empty($_POST['vacation'])) {
// say something or do something
$vacation_err = 'Please select at least one destination';

} else {

    $vacation = $_POST['vacation'];
}

if(empty($_POST['first_name'])) {
    // say something or do something
    $first_name_err = 'Please fill in your first name';
    
    } else {
    
        $first_name = $_POST['first_name'];
    }

if(empty($_POST['last_name'])) {
    // say something or do something
    $last_name_err = 'Please fill in your last name';
    
    } else {
    
        $last_name = $_POST['last_name'];
    }    
if(empty($_POST['email'])) {
    // say something or do something
    $email_err = 'Please fill in your email address';
    
    } else {
    
        $email = $_POST['email'];
    }

if(empty($_POST['gender'])) {
    $phone_err = 'Your phone number please!';
} elseif(array_key_exists('phone', $_POST)){
if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
{ // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
$phone_err = 'Invalid format!';
} else{
$phone = $_POST['phone'];
} // end else
    }

if(empty($_POST['phone'])) {
    // say something or do something
    $phone_err = 'Please enter your phone number';
    
    } else {
    
        $phone = $_POST['phone'];
    }    

if(empty($_POST['travel'])) {
    // say something or do something
    $travel_err = 'Please select when you want to depart';
    
    } else {
    
        $travel = $_POST['travel'];
    }  
if(empty($_POST['comments'])) {
    // say something or do something
    $comments_err = 'We value your input';
    
    } else {
    
        $comments = $_POST['comments'];
    }
if(empty($_POST['privacy'])) {
    // say something or do something
    $privacy_err = 'No privacy? Hello spam and viruses!';
    
    } else {
    
        $privacy = $_POST['privacy'];
    }
    
function my_vacation($vacation) {
$my_return='';
if(!empty($_POST['vacation'])) {
    $my_return = implode(',' , $_POST['vacation']);
}
return $my_return;
} // end my_vacation function

if(isset($_POST['first_name'],
$_POST['last_name'],
$_POST['email'],
$_POST['gender'],
$_POST['phone'],
$_POST['vacation'],
$_POST['travel'],
$_POST['comments'],
$_POST['privacy']
)) {

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $vacation = $_POST['vacation'];
    $travel = $_POST['travel'];
    $comments = $_POST['comments'];
    $privacy = $_POST['privacy'];    

$to = 'szemeo@mystudentswa.com';
$subject = 'Test Email on '.date('m/d/y, h i A');
$body = '
First Name: '.$first_name.' '.PHP_EOL.'
Last Name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Wines: '.my_vacation($vacation).' '.PHP_EOL.'
Regions: '.$travel.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
privacy: '.$privacy.' '.PHP_EOL.'
';  

$headers = array(
    'From' => 'noreply@toriclasswork.com'
);

// we will be adding an if statement - that this email form will work only if all of the fields are filled out!

if (
    !empty($first_name) &&
    !empty($last_name) &&
    !empty($email) &&
    !empty($gender) &&
    !empty($vacation) &&
    !empty($travel) &&
    isset($phone) &&  // Make sure $phone is set
    empty($phone_err) &&  // Make sure there is no phone error
    !empty($comments) &&
    !empty($privacy)
) {

  mail($to, $subject, $body, $headers); 
  header('Location: thx.php');     
    }
 

} //end isset
    
} // closing server request methos

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$selected_image = ''.$photos[$i].'.jpg';




function random_images($photos) {
$my_return = '';
$i = rand(0, 4);
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';
return $my_return;

}

// For my gallery

ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

// project

function myError($myFile, $myLine, $errorMsg)
{
if(defined('DEBUG') && DEBUG)
{
 echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
      echo 'Error message: <b> '.$errorMsg.'</b>';
      die();
  }  else {
      echo ' Houston, we have a problem!';
      die();
  }
    
    
}
