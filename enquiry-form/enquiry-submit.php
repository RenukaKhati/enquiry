<?php

    $con=mysqli_connect("localhost","root","","enquiry") or die($con);
    $name= mysqli_real_escape_string($con,$_POST['name']);
    $email= mysqli_real_escape_string($con,$_POST['email']);
    $pincode= mysqli_real_escape_string($con,$_POST['pincode']);
    $phone= mysqli_real_escape_string($con,$_POST['phone']);
    $comments=mysqli_real_escape_string($con,$_POST['comments']);
    $trade= mysqli_real_escape_string($con,$_POST['trade']);
    $preferences="";
    $arr=$_POST['chk'];
    foreach ($arr as $c){ $preferences=$preferences." ".$c;}
   
    //griueufguKhati1@gmail.com7777777777777777uguehriosrNoSubscribe Subscribe
  
    echo $name.$email.$pincode.$phone.$comments.$trade.$confirm.$subscribe.$remember.$preferences;

    $query="INSERT INTO form(name, email, pincode, phone, comments, trade,Preferences) values ('$name', '$email', '$pincode', '$phone', '$comments', '$trade', '$preferences')";
    mysqli_query($con,$query);

?>

