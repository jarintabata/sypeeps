<?php
 require('../includes/config.php'); 
if(logged_in()) {header('Location: '.DIRADMIN);}
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
<body>

<div class="container">

<?php 
		if($_POST['submit']) {
			login($_POST['username'], $_POST['password']);
		}
		?>

<p><?php echo messages();?></p> 
<form class="form-horizontal" action="" method="post">
<fieldset>


<!-- Text input-->
<div class="form-group">
<div class="col-md-3"></div>
  <label class="col-md-2 control-label" for="username">Username</label>  
  <div class="col-md-4">
  <input id="username" name="username" type="text" placeholder="" class="form-control input-md">
    
  </div>
  <div class="col-md-3"></div>
</div>

<!-- Text input-->
<div class="form-group">
<div class="col-md-3"></div>
  <label class="col-md-2 control-label" for="password">Password</label>  
  <div class="col-md-4">
  <input id="password" name="password" type="text" placeholder="" class="form-control input-md">
    
  </div>
  <div class="col-md-3"></div>
</div>

<!-- Button -->
<div class="form-group">
<div class="col-md-3"></div>
  <label class="col-md-2 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" type="submit" value="login" class="btn btn-primary">Submit</button>
  </div>
  <div class="col-md-3"></div>
</div>

</fieldset>
</form>


</div>

</body>
</html>


