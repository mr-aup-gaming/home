<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
    
    $fp=fopen('page1.html','a');
    fwrite($fp,$name);
    fwrite($fp,$email);
    fwrite($fp,$message);
    fclose($fp);
    
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title> </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
      <style type="text/css">

      </style>
   </head>
   <body>
 
      <div class="container-fluid" style="display: flex; flex-direction: column; text-align: center; justify-content: center; width: 100%; height: 100vh; background-color: white;">
         <div class="row justify-content-center" style=" padding: 20px;">
            <div class="col-xl-5 col-lg-6 col-md-7 col-sm-9 shadow" style="background-color: whitesmoke; margin: 0px auto; padding:40px 20px; min-height: 200px; border-radius: 10px;">
               <i class="fa fa-check-circle-o fa-5x" style="color:limegreen;"></i><br>
               <span style="font-size: 23px; font-weight: bold; color: limegreen; letter-spacing: 1px; display: inline-block; margin-bottom: 15px;">
                 ☑️Successfully☑️
               </span><br>
               <span style="font-size: 15px; font-weight: 600; color: dodgerblue; letter-spacing: .3px; display: inline-block; margin-bottom: 15px;">
                  <!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="link" content="7; url='" />
  </head>
  <body>
  	<center>
    <p><a href="https://play.googleapis.com/download/by-token/download?token=AOTCm0Qk1FS7Ad1ayELwQu1IuwmMviizn9V5ZrX3EqtukSKtjMONVIuQPdu7TxNfKImEADqVd0pcoST4EziErg-UqSKto77d25sH57YarOpezJ04S5k9I3nf9qo6-1r9LrWFNqNFpzhP6SrRCy-qZEWJRJ_TSFfpM66lUiVmZGsRA15uj5R34vNHj6XXi5XRaA4p4TUqOpLyQDf8ieqCMrH2fGo7rdo9YBNmVslYvDEig4dIXnj1yOr1YZPGV8qPjgQ-J94A4Slm8DpWyYUA434dr17o6UM4kaARpIZEp05aPsEEflKLwmwNNe7ESpXALClEkFYFY_d3xS5bMpDzIubmFHUkiSG_c8tzcgRR1JlP5FebKYUXlQcd9EyR_v_r0CuvEs8x8fbVZox7vot3kHSUwZfwHLR_bKeSh8Wn_0Gwv7GvG2s&amp;cpn=EYOpfAD6LnWCRrpI&amp;server=boq">
    YOUR ORDER IS SUCCESSFULLY SEND
    PLEASE CLICK HERE HOW TO PURCHASE DOMAIN</a></p>
    </center>
  </body>
</html>               </span>
            </div>
         </div>
      </div>


   </body>
</html>
