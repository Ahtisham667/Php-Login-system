<?php


  ob_start();
  session_start();
  // require_once 'db_connection.php';
    $conn = mysqli_connect("localhost","root","","messenger");
  
  // if session is not set this will redirect to login page
  if( !isset($_SESSION['user']) ) {
    header("Location: ../login/index.php");
    exit;
  }

  $query = mysqli_query($conn,"UPDATE members SET m_status='green' WHERE m_id=".$_SESSION['user']);
  
  // select loggedin users detail
  $res=mysqli_query($conn,"SELECT  * FROM  members WHERE m_id=".$_SESSION['user']);
  $userRow=mysqli_fetch_array($res);
  
   $username = $userRow['m_name'];  
   $user_id = $userRow['m_id'];



  
?>