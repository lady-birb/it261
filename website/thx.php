<?php
include('config.php');
include('./includes/header.php');

?>

<div id="wrapper">


<main>

<h1>Thank you for filling out the form</h1>
<p>We appreciate hearing from you!</p>

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