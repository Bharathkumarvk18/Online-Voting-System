<?php
session_start();
require('../connection.php');
//If your session isn't valid, it returns you to the login screen for protection
if(empty($_SESSION['admin_id'])){
 header("location:access-denied.php");
} 
//retrive candidates from the tbcandidates table
$result=mysqli_query($con,"select * from tblogs; ");
if (mysqli_num_rows($result)<1){
    $result = null;
}
?>
<?php
// retrieving positions sql query
$positions_retrieved=mysqli_query($con, "SELECT * FROM tbPositions");
/*
$row = mysqli_fetch_array($positions_retrieved);
 if($row)
 {
 // get data from db
 $positions = $row['position_name'];
 }
 */
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Admin Control Panel:Logs</title>
<link href="css/admin_styles.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/admin.js">
</script>
</head>
<body bgcolor="tan">
<center><b><font color = "brown" size="6">Online Voting System</font></b></center><br><br>
<div id="page">
<div id="header">
  <h1>MANAGE CANDIDATES</h1>
 <b>  <a href="admin.php">Home</a> | <a href="positions.php">Manage Positions</a> | <a href="candidates.php">Manage Candidates</a> | <a href="refresh.php">Poll Results</a> | <a href="manage-admins.php">Manage Account</a> | <a href="change-pass.php">Change Password</a>  | <a href="logs.php"> View Logs</a> | <a href="logout.php">Logout</a></b>
 </div>


    
<hr>
<table border="0" width="620" align="center">
<CAPTION><h3>AVAILABLE LOGS</h3></CAPTION>
<tr>
<th> ID</th>

<th>action</th>
<th>cdate</th>
</tr>

<?php
//loop through all table rows
$inc=1;
while ($row=mysqli_fetch_array($result)){
    
echo "<tr>";
echo "<td>" . $inc."</td>";
//echo "<td>" . $row['member ID']."</td>";
echo "<td>" . $row['action']."</td>";
echo "<td>" . $row['cdate']."</td>";

echo "</tr>";
$inc++;
}

mysqli_free_result($result);
mysqli_close($con);
?>
</table>
<hr>
</div>
</div>
</body>
</html>