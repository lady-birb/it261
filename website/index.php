<?php
include('config.php');
include('./includes/header.php');
?>

<div id="wrapper">


<!-- end hero -->

<main>

<h1>Welcome to our Web App Programming Class!</h1>
<img class="comp" src="images/computer.gif" alt="computer">
<h2>We are going to learn PHP!</h2>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce interdum suscipit nibh non bibendum. Nam ultricies diam sed magna congue sodales. Donec at nunc ut quam lobortis aliquam non ut metus. Mauris sed facilisis massa. Nam sed convallis nisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec condimentum sapien sit amet magna dignissim dapibus nec id leo. Aliquam erat volutpat. In sit amet pellentesque odio. Curabitur metus massa, facilisis ac luctus nec, ultricies eget eros. Nam ac erat et tellus semper tincidunt.</p>

<h2>Enjoy a Cute Random Picture</h2>
<span><?php echo random_images($photos);?></span>
</main>


<aside>

<h3>This is our headline three in our beautiful aside</h3>
<p>Donec condimentum sapien sit amet magna dignissim dapibus nec id leo. Aliquam erat volutpat. In sit amet pellentesque odio. Curabitur metus massa, facilisis ac luctus nec, ultricies eget eros. Nam ac erat et tellus semper tincidunt.</p>
</aside>



</div>
<!-- end wrapper -->

<?php
include('./includes/footer.php'); 