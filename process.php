<?php
if(isset($_POST)){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$message = $_POST['message'];
             $storage = $_POST;

   function sendDetails($storage){
      $myfile = fopen('store.txt','a+') or die('error');
      foreach($storage as $key => $val){
          if($key != 'send' ){
              $paired =   $key. ':'.$val."\n";
              fwrite($myfile,$paired);
            
          }
      } 
      fclose($myfile);
      return true;

   }       
   if(sendDetails($storage)){
       echo "<script>alert('details sent')</script>";
       echo "<script>window.location = 'form.php'</script>";
   }   
}