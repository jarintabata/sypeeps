<?php
 require('../includes/config.php'); 
?>

<!DOCTYPE html>
<html class="html">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.2.232.244"/>
  <title>myTeam</title>
  <meta name="viewport" content="width=1024"/>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?253219416"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?4185113104" id="pagesheet"/>
  <link rel="stylesheet" type="text/css" href="css/index_new.css"/>
  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>
   <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix browser_width colelem" id="u13962"><!-- group -->
     <div class="clip_frame grpelem" id="u13966"><!-- image -->
      <img class="block" id="u13966_img" src="images/closewhite.png" alt="" width="100" height="80"/>
     </div>
    </div>
    <img class="colelem" id="u13965-8" src="images/u13965-8.png" alt="Every team, project and  ambition starts out imperfect. What will you do to improve  the chances you’ll be great?" width="656" height="200"/><!-- rasterized frame -->
    <div class="clearfix colelem" id="pu13969"><!-- group -->
     <a class="nonblock nontext anim_swing clip_frame grpelem" id="u13969" href="index.php#problems"><!-- image --><img class="block" id="u13969_img" src="images/flechas.png" alt="" width="100" height="80"/></a>
     <img class="grpelem" id="u13964-4" src="images/u13964-4.png" alt="My team" width="837" height="112"/><!-- rasterized frame -->
     <div class="clip_frame grpelem" id="u13959"><!-- image -->
      <img class="block" id="u13959_img" src="images/syresource.png" alt="" width="150" height="104"/>
     </div>
    </div>
    <div class="clearfix browser_width colelem" id="u14811"><!-- group -->
     <div class="clearfix grpelem" id="pproblems"><!-- column -->
      <a class="anchor_item colelem" id="problems"></a>
      <div class="clearfix colelem" id="u14813-4"><!-- content -->
       <p>SY</p>
      </div>
     </div>
     <div class="clearfix grpelem" id="u14812-4"><!-- content -->
      <p>SY/Partners</p>
     </div>
     <div class="clearfix grpelem" id="u14814-4"><!-- content -->
      <p>SY/Products</p>
     </div>
     <div class="clearfix grpelem" id="u14815"><!-- group -->
      <div class="rounded-corners clearfix grpelem" id="u14816"><!-- group -->
       <div class="clearfix grpelem" id="u14817-4"><!-- content -->
        <p id="u14817-2">Diagnoser</p>
       </div>
      </div>
     </div>
    </div>
    
    
<?php

if( isset($_POST['idsArray']) )
{
$array = json_decode($_POST['idsArray']);
echo 'This is the'.$array.'!';

} else {

$sql = mysql_query("SELECT * FROM user WHERE userID < 10 ORDER BY firstname");
while($row = mysql_fetch_array($sql)) 
{
	echo '<a href="#" class="peepShow" id="'.$row['userID'].'"><div class="peepThumb">';
	echo '<img class="peepImg" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" alt="'.$row['firstname'].' '.$row['lastname'].'" />';
	echo '<div class="plus">';
    echo '<img class="block" src="images/addsmall.png" alt="" width="34" height="29"/>';
    echo '</div>';
	echo '<div class="info">';
    echo '<p class="name">'.$row['firstname'].' '.$row['lastname'].'</p>';
    echo '<p class="title">'.$row['title'].'</p>';
    echo '<p class="office">'.$row['office'].'</p>';
    echo '<div class="check">';
    echo '<img class="block" src="images/check.png" alt="" width="34" height="29"/>';
    echo '</div>';
    echo '</div>'; 
    echo '</div></a>';
	
 }
 echo '<div class="clear"><button><a id="buildmyteam" href="#">Build my team</a></button></div>';
	echo '</div>';
}

?>  
    

  </div>
  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?3880880085" type="text/javascript"></script>
  <script src="scripts/jquery.tobrowserwidth.js?152985095" type="text/javascript"></script>
  <script src="scripts/webpro.js?33264525" type="text/javascript"></script>
  <script src="scripts/musewpslideshow.js?272207905" type="text/javascript"></script>
  <script src="scripts/jquery.museoverlay.js?466079611" type="text/javascript"></script>
  <script src="scripts/touchswipe.js?261777990" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
  
   $(document).ready(function() {
   
   
	   $('.peepShow').click(function() {
		   $(this).toggleClass('selected');
		   return false;	   		   
	   });

	   
	   $('#buildmyteam').click(function() {
	   	
		   var idsArray = [];
		   
		   $('.selected').each(function(){
			   var ids = $(this).attr('id');
			   idsArray.push(ids);
		   });
		   
		   $.ajax({  
			type: 'POST',
	 		url: 'index2.php',
	   		data: {list:idsArray},
	   		success: function(res) {
		   		alert(res);
	   		}
	    });
		
	     
		   return false;
	   });
	   
	     
	   
   });
</script>
   </body>
</html>
