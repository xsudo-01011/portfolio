<?php
//===========SANITIZING INPUTS==============

//setting all possible variables to empty
$fname = $lname = $email = $subject = $comment = ""; 
//variables to handle error messages
$fname_err = $lname_err = $email_err = $subject_err = $comment_err = "";
  
  function sanitize_input($input){
    $input = htmlspecialchars($input);
    $input = trim($input);
    $input = stripslashes($input);
    $input = strip_tags($input);
    return $input;
  }

  if($_SERVER['REQUEST_METHOD'] = POST){
    $fname = sanitize_input($_POST['firstname']);
    $lname = sanitize_input($_POST['lastname']);
    $email = sanitize_input($_POST['email']);
    $subject = sanitize_input($_POST['subject']);
    $comment = sanitize_input($_POST['comment']);
  }



//===============================DATABASE LINK========================

//defining variables
$db_hostname = "localhost";
$db_username = "benoit";
$db_password = "0101157029";
$db_database = "portfolio";

//connecting to the database
$db_connect = mysqli_connect($db_hostname, $db_username, $db_password, $db_database);

//loading contents.... USING PREPARED 
$tbl_insert = $db_connect->prepare("INSERT INTO contact_info  (firstname, lastname, email, subject, comment)
                                         VALUES(?, ?, ?, ?, ?)");
// BINDING DATA
$tbl_insert->bind_param("sssss" , $first_name, $last_name, $e_mail, $sub_ject, $com_ment);

//SETTING PARAMETERS AND EXEXUTE
$first_name = $fname;
$last_name = $lname;
$e_mail = $email;
$sub_ject = $subject;
$com_ment = $comment;
  $tbl_insert->execute();

  /*
  if(mysqli_query($db_connect, $tbl_insert)){
    echo '<p style="font-size:40px;"><b><i>Your request has been initiated successfully...!  <a href="../../index.html">Return To Page ---></a></i></b></p>';
} else {
    echo  "request unccessfull... please try again";
}
*/

echo '<p style="font-size:40px;"><b><i>Your request has been initiated successfully...!  <a href="../../index.html">Return To Page ---></a></i></b></p>';

$tbl_insert->close();
mysqli_close($db_connect);

//===============================DATABASE LINK========================




?>