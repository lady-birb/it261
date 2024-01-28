<?php

//we are asking if the name and email in the form is set
//if it is not set, show me the form

if(isset($_GET['name'],
  $_GET['email']  )) {
    $name = $_GET['name'];
    $email = $_GET['email'];
  } else {
    echo '
    <form action = "" method="get">
    <label>NAME</label>
    <input type="text" name="name">
    <label>EMAIL</label>
    <input type="text" name="email">
    <input type="submit" value="Confirm">
    
    </form>
     ';
      }