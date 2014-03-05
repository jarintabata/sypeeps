<?php
 require('../includes/config.php'); 
?>

<!DOCTYPE html>
<html class="html">
 <head>
 
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="7.2.232.244"/>
  <title>Peeps</title>
  <meta name="viewport" content="width=1024"/>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?4000879106"/>
  <link rel="stylesheet" type="text/css" href="css/index.css?4784400" id="pagesheet"/>
    <link rel="stylesheet" type="text/css" href="../myteam/css/index_new.css"/>

  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>

  <div class="clearfix" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu12909"><!-- group -->
     <div class="clearfix browser_width grpelem" id="u12909"><!-- group -->
      <div class="clip_frame grpelem" id="u12906"><!-- image -->
       <img class="block" id="u12906_img" src="images/closewhite.png" alt="" width="100" height="80"/>
      </div>
     </div>
     <div class="clearfix grpelem" id="u23152"><!-- group -->
      <div class="rounded-corners clearfix grpelem" id="u23153"><!-- group -->
       <div class="clearfix grpelem" id="u23154-4"><!-- content -->
        <p id="u23154-2">My Team</p>
       </div>
      </div>
     </div>
    </div>
    <img class="colelem" id="u12908-10" src="images/u12908-10.png" alt="Here is a description of this  tool that should be exactly the  lenght of this box, four lines  well&#45;ragged, and concise. " width="660" height="220"/><!-- rasterized frame -->
    <div class="clearfix colelem" id="u21054-3"><!-- content -->
     <p>&nbsp;</p>
    </div>
    <div class="clearfix colelem" id="pu12913-4"><!-- group -->
     <img class="grpelem" id="u12913-4" src="images/u12913-4.png" alt="Peeps" width="795" height="112"/><!-- rasterized frame -->
     <div class="clip_frame grpelem" id="u12911"><!-- image -->
      <img class="block" id="u12911_img" src="images/syresource.png" alt="" width="150" height="104"/>
     </div>
     <div class="clearfix grpelem" id="u13070-3"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <a class="nonblock nontext anim_swing clip_frame grpelem" id="u12914" href="index.php#u14819"><!-- image --><img class="block" id="u12914_img" src="images/flechas.png" alt="" width="100" height="80"/></a>
    </div>
    <div class="clearfix colelem" id="u21055-3"><!-- content -->
     <p>&nbsp;</p>
    </div>
    <div class="clearfix colelem" id="pu21053-3"><!-- group -->
     <div class="clearfix grpelem" id="u21053-3"><!-- content -->
      <p>&nbsp;</p>
     </div>
     <div class="clearfix browser_width grpelem" id="u14819"><!-- group -->
      <div class="clearfix grpelem" id="pproblems"><!-- column -->
       <a class="anchor_item colelem" id="problems"></a>
      <ul class="syNav">
       <li><a href="#" class="selected" id="all">All</a></li>
	   <li><a href="#" id="sy">SY</a></li>
      <li><a href="#" id="sypartners">SY/Partners</a></li>
      <li><a href="#" id="syproducts">SY/Products</a></li>
      </ul>
      </div>
      </div>
     </div>
    </div>
   
    
    <?php



$sql = mysql_query("SELECT * FROM user ORDER BY firstname");
while($row = mysql_fetch_array($sql)) 
{
	echo '<a href="detail.php?id='.$row['userID'].'" class="peepShow '.$row['sector'].'"><div class="peepThumb">';
	echo '<img class="peepImg" src="data:image/jpeg;base64,' . base64_encode( $row['photo'] ) . '" alt="'.$row['firstname'].' '.$row['lastname'].'" />';
	echo '<div class="arrow">';
    echo '<img class="block" src="images/flechadchawhite.png" alt="" width="34" height="29"/>';
    echo '</div>';
	echo '<div class="info">';
    echo '<p class="name">'.$row['firstname'].' '.$row['lastname'].'</p>';
    echo '<p class="title">'.$row['title'].'</p>';
    echo '<p class="office">'.$row['office'].'</p>';
    echo '</div>'; 
    echo '</div></a>';
	
 }
	echo '</div>';

?>

    
   </div>
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
	  
	   $('.syNav li a').click(function() {
		   $(this).toggleClass('selected');
		   return false;	   		   
	   });
	   
	   $('.syNav li a#all').click(function() {
		   $('.peepShow').show();
		   return false;	   		   
	   });
	   
	   $('.syNav li a#sy').click(function() {
		   $('.peepShow.sy').show();
		   $('.peepShow.sypartners').hide();
		   $('.peepShow.syproducts').hide();
		   return false;	   		   
	   });
	   
   });
</script>
   </body>
</html>
