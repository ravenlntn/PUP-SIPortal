<?php 
include('dbconnect.php');

$studno = " ";
$name = " "; 
$webmail = " ";
$contact = " ";
$modeoflearn = " ";
$scholastic = " "; 
$id=0;

$edit=false;

/* Student No. 
Name
Webmail
Contact Number
Mode of Learning - online or correspondence 
Scholastic Status - irregular or regular*/

if (isset($_POST['save'])) {
    //we put strtoupper to convert string to uppercase
    $studno=stripcslashes($db,$studno);
    $studno = strtoupper(mysql_real_escape_string($_POST['studno']));
    $name=stripcslashes($db,$name);
    $name = strtoupper(mysql_real_escape_string($_POST['name']));
    $webmail=stripcslashes($db,$webmail);
    $webmail = strtoupper(mysql_real_escape_string($_POST['webmail']));
    $contact=stripcslashes($db,$contact);
    $contac = strtoupper(mysql_real_escape_string($_POST['contact']));
    $modeoflearn =stripcslashes($db,$modeoflearn);
    $modeoflearn = strtoupper(mysql_real_escape_string($_POST['modeoflearn']));
    $scholastic =stripcslashes($db,$scholastic);
    $scholastic = strtoupper(mysql_real_escape_string($_POST['scholastic']));
    $query = "INSERT INTO info (studno,name, webmail, contact, modeoflearn,scholastic)
             VALUES ('$studno','$name','$webmail','$contact','$modeoflearn','$scholastic')";

    mysqli_query($db, $query);
    header("location: admin.php"); //redirect to admin page after inserting

}

if (isset($_POST['update'])) {
    //we put strtoupper to convert string to uppercase
    $studno=stripcslashes($db,$studno);
    $studno = strtoupper(mysql_real_escape_string($_POST['studno']));
    $name=stripcslashes($db,$name);
    $name = strtoupper(mysql_real_escape_string($_POST['name']));
    $webmail=stripcslashes($db,$webmail);
    $webmail = strtoupper(mysql_real_escape_string($_POST['webmail']));
    $contact=stripcslashes($db,$contact);
    $contac = strtoupper(mysql_real_escape_string($_POST['contact']));
    $modeoflearn =stripcslashes($db,$modeoflearn);
    $modeoflearn = strtoupper(mysql_real_escape_string($_POST['modeoflearn']));
    $scholastic =stripcslashes($db,$scholastic);
    $scholastic = strtoupper(mysql_real_escape_string($_POST['scholastic']));
    $id = ($_POST['id']);
    
    $query = " UPDATE info SET studno ='$studno',name = '$name', webmail= '$webmail', 
                contact = '$contact', modeoflearn = '$modeoflearn',scholastic = '$scholastic' WHERE id='$id'";
            
  
    mysqli_query($db, $query);
    $result=mysqli_query($db, "SELECT * FROM info order by id desc");
    header("location: admin.php"); //redirect to admin page after inserting

}   

//delete the row //
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($db, "DELETE FROM  info WHERE id=$id");
    header("location: admin.php"); //redirect to admin page after inserting
}
        // retrieve record
    $result=mysqli_query($db, "SELECT * FROM info order by id desc");




?>