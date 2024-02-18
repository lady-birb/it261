<form action="" method="post">
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
<fieldset>
<legend>
Contact Tori
</legend>
<label>First Name</label>
<input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']);?>">
<span><?php echo $first_name_err ;?></span>

<label>Last Name</label>
<input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']);?>">
<span><?php echo $last_name_err ;?></span>

<label>Email</label>
<input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']);?>">
<span><?php echo $email_err ;?></span>

<label>Gender</label>
<ul>
<li><input type="radio" name="gender" value="female"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked= "checked"';?>>Female</li>


<li><input type="radio" name="gender" value="male"
<?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked= "checked"';?>>Male</li>

<li><input type="radio" name="gender" value="other"<?php if(isset($_POST['gender']) && $_POST['gender'] == 'other') echo 'check= "checked"';?>>Other</li>
</ul>
<span><?php echo $gender_err ;?></span>

<label>Phone</label>
<input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars ($_POST['phone'])   ;?>">
<span><?php echo $phone_err ;?></span>

<label>Where Would You Like to Take a Vacation?</label>
<ul>
<li><input type="checkbox" name="vacation[]" value="tokyo" <?php if(isset($_POST['vacation']) && in_array('tokyo', $_POST['vacation'])) echo 'check = "checked"';?>>Tokyo</li>

<li><input type="checkbox" name="vacation[]" value="london" <?php if(isset($_POST['vacation']) && in_array('london', $_POST['vacation'])) echo 'check = "checked"';?>>London</li>

<li><input type="checkbox" name="vacation[]" value="hawaii" <?php if(isset($_POST['vacation']) && in_array('hawaii', $_POST['vacation'])) echo 'check = "checked"';?>>Hawaii</li>

<li><input type="checkbox" name="vacation[]" value="rome" <?php if(isset($_POST['vacation']) && in_array('rome', $_POST['vacation'])) echo 'check = "checked"';?>>Rome</li>

<li><input type="checkbox" name="vacation[]" value="cancun" <?php if(isset($_POST['vacation']) && in_array('cancun', $_POST['vacation'])) echo 'check = "checked"';?>>Cancun</li>
</ul>
<span><?php echo $vacation_err ;?></span>

<label>When Would You Like to Go?</label>
<select name="travel">
<option value="" <?php if(isset($_POST['travel']) && is_null($_POST['travel'])) echo 'selected="unselected"';?>>Select One</option>

<option value="now" <?php if(isset($_POST['travel']) && $_POST['travel'] == "now") echo 'selected="selected"';?>>Right Now!</option>

<option value="weeks" <?php if(isset($_POST['travel']) && $_POST['travel'] == "weeks") echo 'selected="selected"';?>>In a few weeks</option>

<option value="months" <?php if(isset($_POST['travel']) && $_POST['travel'] == "months") echo 'selected="selected"';?>>In several months</option>

<option value="years" <?php if(isset($_POST['travel']) && $_POST['travel'] == "years") echo 'selected="selected"';?>>At least 1 year from now</option>

<option value="long" <?php if(isset($_POST['travel']) && $_POST['travel'] == "long") echo 'selected="selected"';?>>Undecided/A long time from now</option>
</select>
<span><?php echo $travel_err ;?></span>

<label>Comments</label>
<textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']);?></textarea>
<span><?php echo $comments_err ;?></span>

<label>Privacy</label>
<ul>
<li><input type="radio" name="privacy" value="yes"<?php if(isset($_POST['privacy']) && $_POST['privacy'] = "yes") echo 'checked = "checked"';?>>Yes</li>
</ul>
<span><?php echo $privacy_err ;?></span>

<input type="submit" value="Send it">

<p><a href="">Reset</a></p>

</fieldset>
</form>





</form>