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
    <link rel="stylesheet" type="text/css" href="css/keithyamashita.css" /> 

  <!-- Other scripts -->
  <script type="text/javascript">
   document.documentElement.className += ' js';
</script>
   </head>
 <body>




<div class="clearfix" id="page">
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu19992">
     <div class="clearfix browser_width grpelem" id="u19992">
      <img class="grpelem" id="u19993-4" src="images/u19993-4.png" alt="Peeps" width="163" height="52"/>
      <div class="clip_frame clearfix grpelem" id="u19996">
       <div id="u19996_clip">
        <img class="position_content" id="u19996_img" src="images/closewhite.png" alt="" width="100" height="80"/>
       </div>
      </div>
     </div>
     <div class="clip_frame grpelem" id="u19994">
      <img class="block" id="u19994_img" src="images/syresource.png" alt="" width="58" height="40"/>
     </div>
     <div class="clip_frame grpelem" id="u19998">
      <img class="block" id="u19998_img" src="images/backwhite-u19998.png" alt="" width="65" height="80"/>
     </div>
     <div class="clearfix grpelem" id="u20000">
      <div class="pointer_cursor rounded-corners clearfix grpelem" id="u20001">
       <a class="block" href="index.html"></a>
       <a class="nonblock nontext clearfix grpelem" id="u20002-4" href="index.html"></a>
      </div>
     </div>
     <div class="clearfix grpelem" id="u23155">
      <div class="rounded-corners clearfix grpelem" id="u23156">
       <div class="clearfix grpelem" id="u23157-4">
        <p id="u23157-2">My Team</p>
       </div>
      </div>
     </div>
    </div>

    <?php
    

$strSQL = "SELECT * FROM user WHERE userID=" . $_GET["id"];

// Execute the query (the recordset $rs contains the result)
$rs = mysql_query($strSQL);
	
// Loop the recordset $rs
while($row = mysql_fetch_array($rs)) {

$photo=$row['photo'];
$firstname=$row['firstname']; 
$lastname=$row['lastname']; 
$title=$row['title']; 
$office=$row['office']; 
$sector=$row['sector'];
$cellphone=$row['cellphone']; 
$email=$row['email']; 
$goal01=$row['goal01']; 
$goal02=$row['goal02'];
$goal03=$row['goal03']; 
$joined=$row['joined']; 
$intronote=$row['intronote']; 
$artifact=$row['artifact'];
echo "
   <div class='clearfix browser_width colelem' id='u21211'>
     <div class='clearfix grpelem' id='u21089-9'>
      <p id='u21089-4'>Joined</span>:</p>
      <p id='u21089-7'>$joined</p>
     </div>
     <div class='clip_frame clearfix grpelem' id='u21083'>
      <div class='peepDetailImg'>";
echo "<img src='data:image/jpeg;base64," . base64_encode( $photo ) . "' />";
echo "
      </div>
     </div>
     <div class='clearfix grpelem' id='u21084-18'>
      <p id='u21084-2'>$firstname $lastname</p>
      <p id='u21084-6'>$sector<br/>$title</p>
      <p id='u21084-8'>$office</p>
      <p id='u21084-16'><span><br/></span><a class='nonblock' href='mailto:$email'><span id='u21084-11'>$email</span></a><span id='u21084-15'><br/>$cellphone</span></p>
     </div>
    </div>
    <div class='clearfix colelem' id='ppu21093-4'>
     <div class='clearfix grpelem' id='pu21093-4'>
      <div class='clearfix colelem' id='u21093-4'>
       <p>About me</p>
      </div>
      <div class='colelem' id='u21090'><!-- simple frame --></div>
     </div>
     <div class='clearfix grpelem' id='u21085-10'>
      $intronote
     </div>
    </div>
    <div class='clearfix colelem' id='ppu21100-6'>
     <div class='clearfix grpelem' id='pu21100-6'>
      <div class='clearfix colelem' id='u21100-6'>
       <p>My artifact <br/>of greatness</p>
      </div>
      <div class='colelem' id='u21101'><!-- simple frame --></div>
     </div>
     <div class='clip_frame grpelem' id='u21373'>";
     echo "<img id='u21373_img' src='data:image/jpeg;base64," . base64_encode( $artifact ) . "' width='626' height='834' />";
 echo "
     </div>
    </div>
   </div>
  </div>
  ";
 } ?>

  <!-- JS includes -->
  <script type="text/javascript">
   if (document.location.protocol != 'https:') document.write('\x3Cscript src="http://musecdn.businesscatalyst.com/scripts/4.0/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script type="text/javascript">
   window.jQuery || document.write('\x3Cscript src="scripts/jquery-1.8.3.min.js" type="text/javascript">\x3C/script>');
</script>
  <script src="scripts/museutils.js?3880880085" type="text/javascript"></script>
  <script src="scripts/jquery.tobrowserwidth.js?152985095" type="text/javascript"></script>
  <!-- Other scripts -->
  <script type="text/javascript">
   $(document).ready(function() { try {
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
$('.browser_width').toBrowserWidth();/* browser width elements */
Muse.Utils.prepHyperlinks(false);/* body */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
} catch(e) { Muse.Assert.fail('Error calling selector function:' + e); }});
</script>
   </body>
</html>
