<?php


session_start();

include('config.php');
//we will eventually have a header include
('./includes/header.php');

$iConn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

// we will be asking if reg_user isset
// we will also be using a new function which is mysqli_real_escape_string

if(isset($_POST['reg_user'])) {

$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password1 = mysqli_real_escape_string($iConn, $_POST['password1']);
$password2 = mysqli_real_escape_string($iConn, $_POST['password2']);

if(empty($first_name)) {
    array_push($errors, 'First name is required');
}

if(empty($last_name)) {
    array_push($errors, 'Last name is required');
}

if(empty($email)) {
    array_push($errors, 'Email is required');
}

if(empty($username)) {
    array_push($errors, 'Username is required');
}

if(empty($password1)) {
    array_push($errors, 'Password is required');
}

// logic - we are not going to ask if password2 is empty, our question is
// does password1 = password2

if($password1 !== $password2) {
    array_push($errors, 'Passwords do not match');
}

$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";


$result = mysqli_query($iConn, $user_check_query)  or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

if($rows) {

if($rows['username'] == $username) {
    array_push($errors, 'Username already exists');
}

if($rows['email'] == $email) {
    array_push($errors, 'Email already exists');
}


} // end big if statement

// if there are NO errors, life is very good!

if((int)$errors == 0) {

$password = md5($password1);

// logically - we have to insert the information into our database

$query = "INSERT INTO users (first_name, last_name, email, username, password) VALUES ('$first_name', '$last_name', '$email', '$username', '$password') ";

mysqli_query($iConn, $query);


$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

header('Location:login.php');




} // end if errors


} // close if isset reg_user


if(isset($_POST['login_user'])) {
// our login page will only have two input fields - one for username and one for password.
    $username = mysqli_real_escape_string($iConn, $_POST['username']);
    $password = mysqli_real_escape_string($iConn, $_POST['password']);

    if(empty($username)) {
        array_push($errors, 'Username is required');
    }
    if(empty($password)) {
        array_push($errors, 'Password required');
    }


// we are counting our errors, if we have no errors - we will continue the same way

if(count($errors) == 0) {

$password = md5($password);

// we are going to query our users table to make sure that our username AND password match

$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password' ";

$results = mysqli_query($iConn, $query );

if(mysqli_num_rows($results) == 1) {
$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

// if the above is successful, we will be directed to the index.php page!!!

header('Location:index.php');


} else {


array_push($error, 'Wrong username/password combo!!');
    
}

} // end count errors

} // close if isset login_user