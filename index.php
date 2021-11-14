<?php
 $server = "localhost";
 $username = "root";
 $passowrd = "";  
 $db = "userdatatofollowup";
 
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  
  $conn = new mysqli($server,$username,$passowrd,$db);
  if($conn->connect_error){
    die('connection failed :'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into userdatabase(Name, Email, Phone)values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$phone);
    $stmt->execute();
    echo ' <script>
      alert("Details submitted sucessfully");
    window.location = "Home.html";
  </script>';
    $stmt->close();
    $conn->close();
  }
?>