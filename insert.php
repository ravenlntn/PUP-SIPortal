<?php 
include("dbconnect.php");

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

if (isset($_POST['submit'])) {
    $studno = ($_POST['studno']);
    $name = ($_POST['name']);
    $webmail = ($_POST['webmail']);
    $contact = ($_POST['contact']);
    $modeoflearn = ($_POST['modeoflearn']);
    $scholastic = ($_POST['scholastic']);
    $query = "INSERT INTO information (studno,name, webmail, contact, modeoflearn,scholastic)
             VALUES ('$studno','$name','$webmail','$contact','$modeoflearn','$scholastic')";

    mysqli_query($db, $query);
    header("location: admin.php"); 

}

if (isset($_POST['update'])) {

    $studno = ($_POST['studno']);
    $name = ($_POST['name']);
    $webmail = ($_POST['webmail']);
    $contact = ($_POST['contact']);
    $modeoflearn = ($_POST['modeoflearn']);
    $scholastic = ($_POST['scholastic']);

    $id = ($_POST['id']);

    $query = " UPDATE information SET studno ='$studno',name = '$name', webmail= '$webmail', 
                contact = '$contact', modeoflearn = '$modeoflearn',scholastic = '$scholastic' WHERE id='$id'";
            
  
    mysqli_query($db, $query);
    $result=mysqli_query($db, "SELECT * FROM information order by id desc");
    header("location: admin.php"); 

}   

//delete the row //
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $result=mysqli_query($db, "DELETE FROM  information WHERE id=$id");
    header("location: admin.php"); 
}
      
    $result=mysqli_query($db, "SELECT * FROM information order by id desc");



?>