
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>WELCOME</title>
   <link rel="stylesheet" type="text/css" href="st16.css">
</head>
<body>
   <marquee>GRIT MULTILEVEL MARKETING SYSTEM.</marquee>
   <div class="navbar">
      <a href="home2.php">Home <i class="fa fa-home" aria-hidden="true"></i></a>
      <a href="assignment.php">About us <i class="fa fa-question"></i></a>
      <a href="services.php">Services</a>
      <a href="joinings.php">Contact Us <i class="fa fa-fw fa-envelope"></i></a>
      <a href="wallet.php">My Account <i class="fa fa-user" aria-hidden="true"></i></a>
      <a href="help.php">Help <i class="fa fa-question" aria-hidden="true"></i></a>
      <a href="includes/process.php?logout">Signing out</a>    
   </div>

   <div id="outerdiv">
      <p id="demo" align="right" font="serif"></p>
      <script>
         const d = new Date();
         document.getElementById("demo").innerHTML = d;
      </script>
   </div>

   <form>
      <?php require('includes/functions.php');
         $data['ref_code']=$user['user_code'];
         $reflist = getRefList($data);
      ?>
      <div class="col-9 m-auto mt-7">
         <h1>Welcome to the website, <b><?=$user['full_name']?></b></h1>
         <h4>Your gmail is: <b><?=$user['email_id']?></b></h4>
         <h4>You have been reffered by: <b><?=$user['ref_code']?></b></h4>
         <div class="bg-success p-2 text-white m-2" role="alert" style="border-radius:5px;">
            <h1>Total Points : <?=count($reflist)*2?></h1>
         </div>
         <h4>Your Referral Code is: <?=$user['user_code']?> </h4>
         <div class="alert alert-warning" role="alert"><h4>
         http://localhost/refwebsite/?refcode=<?=$user['user_code']?></h4>
         </div>
         <h4>Users referred by you:</h4>
         <ol>
            <?php
            foreach($reflist as $u){
               ?>
               <li><h6><?=$u['full_name']?> - <?=$u['email_id']?></h6></li>
               <?php
            }
            ?>
         </ol>
      </div>            
   </form>

   <div class="navbar">
      <a href="history.php">History <i class="fa fa-history" aria-hidden="true"></i></a>
      <a href="assignment.php">Business Plan</a>
      <a href="site.php">Site Map <i class="fa fa-globe"></i></a>
      <a href="">Joinings <i class="fa fa-sign-in" aria-hidden="true"></i></a>
      <a href="joinings.php">Developer <i class="fa fa-connectdevelop" aria-hidden="true"></i></a>
   </div>   
</body>
</html>
