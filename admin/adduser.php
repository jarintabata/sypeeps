<?php 


require('../includes/config.php'); 

if(isset($_POST['submit'])){
$photo = file_get_contents($_FILES['photo']['tmp_name']);
$photo = mysql_real_escape_string($photo);
$firstname=$_POST['firstname']; 
$lastname=$_POST['lastname']; 
$title=$_POST['title']; 
$office=$_POST['office']; 
$sector=$_POST['sector']; 
$cellphone=$_POST['cellphone']; 
$email=$_POST['email']; 
$goal01=$_POST['goal01']; 
$goal02=$_POST['goal02'];
$goal03=$_POST['goal03']; 
$joined=$_POST['joined']; 
$intronote=$_POST['intronote']; 
$artifact = file_get_contents($_FILES['artifact']['tmp_name']);
$artifact = mysql_real_escape_string($artifact);


mysql_query ("INSERT INTO user 
					(photo, firstname, lastname, title, office, sector, cellphone, email, goal01, goal02, goal03, joined, intronote, artifact)
                    VALUES
                    ('$photo', '$firstname', '$lastname', '$title', '$office', '$sector', '$cellphone', '$email', '$goal01', '$goal02', '$goal03', '$joined', '$intronote', '$artifact')")or die(mysql_error());
$_SESSION['success'] = 'User Added';
header('Location: '.DIRADMIN);
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
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
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

<div id="content">

<form enctype="multipart/form-data" action="adduser.php" method="post" class="form-horizontal">
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />

<fieldset>

<!-- Form Name -->
<legend>Add User</legend>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="firstname">First Name</label>  
  <div class="col-md-4">
  <input id="firstname" name="firstname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="lastname">Last Name</label>  
  <div class="col-md-4">
  <input id="lastname" name="lastname" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-2 control-label" for="photo">Profile Image</label>
  <div class="col-md-4">
    <input id="photo" name="photo" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="title">Title</label>  
  <div class="col-md-4">
  <input id="title" name="title" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-2 control-label" for="office">Office</label>
  <div class="col-md-4">
    <select id="office" name="office" class="form-control">
      <option value="sf">San Francisco</option>
      <option value="ny">New York</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-2 control-label" for="sector">Sector</label>
  <div class="col-md-4">
    <select id="sector" name="sector" class="form-control">
      <option value="sy">SY</option>
      <option value="sypartners">SYPartners</option>
      <option value="syproducts">SYProducts</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="cellphone">Cell Phone</label>  
  <div class="col-md-4">
  <input id="cellphone" name="cellphone" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="email">Email</label>  
  <div class="col-md-4">
  <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="goal01">Goal 1</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="goal01" name="goal01"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="goal02">Goal 2</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="goal02" name="goal02"></textarea>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="goal03">Goal 3</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="goal03" name="goal03"></textarea>
  </div>
</div>

<!-- Date -->
<div class="form-group">
  <label class="col-md-2 control-label" for="joined">Joined</label>
  <div class="col-md-4">                     
    <input type="date" class="form-control" id="joined" name="joined">
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="intronote">Intro Note</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="intronote" name="intronote"></textarea>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-2 control-label" for="artifact">Artifact of Greatness</label>
  <div class="col-md-4">
    <input id="artifact" name="artifact" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</div>

</fieldset>
</form>


</div>

<div id="footer">	
		<div class="copy">&copy; <?php echo SITETITLE.' '. date('Y');?> </div>
</div><!-- close footer -->
</div><!-- close wrapper -->

</body>
</html>