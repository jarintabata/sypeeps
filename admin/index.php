<?php 
require('../includes/config.php'); 

//make sure user is logged in, function will redirect use if not logged in
login_required();

//if logout has been clicked run the logout function which will destroy any active sessions and redirect to the login page
if(isset($_GET['logout'])){
	logout();
}

//run if a user deletion has been requested
if(isset($_GET['deluser'])){
		
	$deluser = $_GET['deluser'];
	$deluser = mysql_real_escape_string($deluser);
	$sql = mysql_query("DELETE FROM user WHERE userID = '$deluser'");
    $_SESSION['success'] = "User Deleted"; 
    header('Location: ' .DIRADMIN);
   	exit();
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

<title><?php echo SITETITLE;?></title>

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo DIR;?>style/theme.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo DIR;?>js/bootstrap.min.js"></script>
</head>
<body role="document">
<!-- NAV -->

<!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">SY/Partners</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo DIRADMIN;?>">Admin</a></li>
            <li><a href="<?php echo DIR;?>sypeeps/" target="_blank">SY/Peeps</a></li>
            <li><a href="<?php echo DIR;?>myteam/" target="_blank">My Team</a></li>
            <li><a href="<?php echo DIRADMIN;?>?logout">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<div class="container">

<div id="content" class="admin">

<?php 
	//show any messages if there are any.
	messages();
?>

<legend>Manage Users
<a href="<?php echo DIRADMIN;?>adduser.php"><button class="btn btn-primary" style="float: right;">Add User</button></a></legend>

<div class="row">
<div class="col-md-6"><strong>Name</strong></div>
<div class="col-md-6"><strong>Action</strong></div>
</div>

<?php
$sql = mysql_query("SELECT * FROM user ORDER BY firstname");
while($row = mysql_fetch_object($sql)) 
{
	echo "<div class='row'>";
		echo "<div class='col-md-6'>$row->firstname"." "."$row->lastname</div>";
		echo "<div class='col-md-6'><a href=\"".DIRADMIN."edituser.php?id=$row->userID\">Edit</a> | <a href=\"javascript:deluser('$row->userID','$row->firstname','$row->lastname');\">Delete</a></div>";
		
		
	echo "</div>";
}
?>

</div>

<div id="footer">	
		<div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>