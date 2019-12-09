<?php
require('connection.php');

session_start();
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['member_id'])){
 header("location:access-denied.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    


<link href="css/user_styles.css" rel="stylesheet" type="text/css" />
</head>
<body  >


<center><b><font color = "brown" size="6">Online Voting System</font></b></center><br><br>
<div id="page"  >
<div id="header">
<h1>Voter HOME </h1>
<a href="student.php">Home</a> | <a href="vote.php">Current Polls</a> | <a href="manage-profile.php">Manage My Profile</a> | <a href="changepass.php">Change Password</a>| <a href="logout.php">Logout</a>
</div>
<div id="container">
<p> Click a link above to do some stuff.</p>
</div>

</div>
</body>
</html>