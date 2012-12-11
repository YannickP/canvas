<?php 

 // Connects to your Database 

 mysql_connect("localhost", "openlink_canvas", "Erdugrim?1") or die(mysql_error());  

 mysql_select_db("openlink_canvas") or die(mysql_error());   



 //Checks if there is a login cookie

 if(isset($_COOKIE['ID_my_site']))


 //if there is, it logs you in and directes you to the members page

 { 
  $username = $_COOKIE['ID_my_site']; 

  $pass = $_COOKIE['Key_my_site'];

    $check = mysql_query("SELECT * FROM users WHERE username = '$username'")or die(mysql_error());

  while($info = mysql_fetch_array( $check ))  

    {

    if ($pass != $info['password']) 

      {

            }

    else

      {

      header("Location: members.php");



      }

    }

 }


 //if the login form is submitted 

 if (isset($_POST['submit'])) { // if form has been submitted



 // makes sure they filled it in

  if(!$_POST['username'] | !$_POST['pass']) {

    die('You did not fill in a required field.');

  }

  // checks it against the database


  if (!get_magic_quotes_gpc()) {

    $_POST['email'] = addslashes($_POST['email']);

  }

  $check = mysql_query("SELECT * FROM users WHERE username = '".$_POST['username']."'")or die(mysql_error());



 //Gives error if user dosen't exist

 $check2 = mysql_num_rows($check);

 if ($check2 == 0) {

    die('That user does not exist in our database. <a href=add.php>Click Here to Register</a>');

        }

 while($info = mysql_fetch_array( $check ))   

 {

 $_POST['pass'] = stripslashes($_POST['pass']);

  $info['password'] = stripslashes($info['password']);

  $_POST['pass'] = md5($_POST['pass']);



 //gives error if the password is wrong

  if ($_POST['pass'] != $info['password']) {

    die('Incorrect password, please try again.');

  }


   else 

 { 

 
 // if login is ok then we add a cookie 

   $_POST['username'] = stripslashes($_POST['username']); 

   $hour = time() + 3600; 

 setcookie(ID_my_site, $_POST['username'], $hour); 

 setcookie(Key_my_site, $_POST['pass'], $hour);  

 

 //then redirect them to the members area 

 header("Location: members.php"); 

 } 

 } 

 } 

 else 

{  
 // if they are not logged in 
 ?> 





<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->



<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Canvas</title>
  
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  -->
  
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.min.css">
  <link rel="stylesheet" href="stylesheets/app.css">

  <script src="javascripts/modernizr.foundation.js"></script>
  <script src="javascripts/jquery.foundation.orbit.js"></script>
 
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->


  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>





</head>




<body>


<div id="topbar">

</div>
 


<div class="row">

    <!-- <div id="header"> -->
               
          <div class="eight columns">
            
            <div id="logo"> 
              <h2>Canvas</h2>
            </div>
                
          </div>
          
         

         <div class="four columns">


    

<div id="login">



 <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post"> 

 <table>  

 <p>Username:</p>
 <input type="text" name="username" maxlength="40"> 

 <p>Password:</p>
 <input type="password" name="pass" maxlength="50"> 

 <input type="submit" name="submit" value="Login"> 

 
 <a href="registration.php" data-reveal-id="myModal">Registration</a>

 </table> 
 </form> 


<?php 

 } 

 

 ?> 

 </div>

 

</div>

    <!-- </div> --> <!-- END HEADER -->

</div>


  



<!-- <div class="row">


<div class="twelve columns">



<div id="menul">

<ul class="navbar color1">
  <li><a href="#"><i class="icon20 home"></i><span>Home</span></a></li>
  <li><a href="#"><i class="icon20 upload"></i><span>Upload</span></a></li>
  <li class="drpdown"><a href="#"><i class="icon20 comments"></i><span>Posts</span></a>
    <ul class="drpcontent">
      <li><a href="#">Latest Posts</a></li>
      <li><a href="#">Popular Posts</a></li>
      <li><a href="#">Private Posts</a></li>
    </ul>
  </li>
  <li><a href="#"><i class="icon20 login"></i><span>Login</span></a></li>
  <li class="drpdown"><a href="#"><i class="icon20 theme"></i><span>Themeselector</span></a>
    <ul class="drpcontent" id="themeselect">
      <li><a href="#" data-color="color1">Orange</a></li>
      <li><a href="#" data-color="color2">Marine</a></li>
      <li><a href="#" data-color="color3">Green</a></li>
      <li><a href="#" data-color="color4">Purple</a></li>
      <li><a href="#" data-color="color5">Red</a></li>
    </ul>
  </li>
</ul>

</div>
  

</div>

</div>
 -->
    

<div class="row">


    <div id="content">
    <div class="twelve columns">
    </div>    
    </div>

</div>

 



<div class="row">

    <!-- <div id="footer"> -->
            
           <div id="footer">    
           <div class="twelve columns">
            

           <p>Troll@troll.dk - Ring til degns mor 88888888 - Din mor</p>

           </div>

  <!--  </div> --> <!-- END FOOTER -->

</div>

  



  
  
  
 
  
  
  <!-- Included JS Files (Uncompressed) -->
  <!--
  
  <script src="javascripts/jquery.js"></script>
  
  <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
  
  <script src="javascripts/jquery.foundation.forms.js"></script>
  
  <script src="javascripts/jquery.foundation.reveal.js"></script>
  
  <script src="javascripts/jquery.foundation.orbit.js"></script>
  
  <script src="javascripts/jquery.foundation.navigation.js"></script>
  
  <script src="javascripts/jquery.foundation.buttons.js"></script>
  
  <script src="javascripts/jquery.foundation.tabs.js"></script>
  
  <script src="javascripts/jquery.foundation.tooltips.js"></script>
  
  <script src="javascripts/jquery.foundation.accordion.js"></script>
  
  <script src="javascripts/jquery.placeholder.js"></script>
  
  <script src="javascripts/jquery.foundation.alerts.js"></script>
  
  <script src="javascripts/jquery.foundation.topbar.js"></script>
  
  <script src="javascripts/jquery.foundation.joyride.js"></script>
  
  <script src="javascripts/jquery.foundation.clearing.js"></script>
  
  <script src="javascripts/jquery.foundation.magellan.js"></script>
  
  -->
  
  <!-- Included JS Files (Compressed) -->
  <script src="javascripts/jquery.js"></script>
  <script src="javascripts/foundation.min.js"></script>
  
  <!-- Initialize JS Plugins -->
  <script src="javascripts/app.js"></script>

</body>
</html>
