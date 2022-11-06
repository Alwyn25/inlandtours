<?php

   $connection = mysqli_connect('localhost','root','','feedback');

   if(isset($_POST['send'])){
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $mailid = $_POST['email'];
      $country = $_POST['country'];
      $subject = $_POST['subject'];
  

      $request = " insert into book_form(fname, lname, mailid, country, subject) values('$fname','$lname','$mailid','$country','$subject') ";
      mysqli_query($connection, $request);

      header('location:feedback.php'); 

      
   }else{
      echo 'something went wrong please try again!';
   }

?>