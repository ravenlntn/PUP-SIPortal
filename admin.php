<?php
include("insert.php");
if(isset($_GET['edited'])){
  $id=$_GET['edited'];
  $edit= true;
  $result = mysqli_query($db, "SELECT * FROM information order by id desc");
  $record=mysqli_fetch_array($result);
 
  $studno = $record['studno'];
  $name = $record['name'];
  $webmail = $record['webmail'];
  $contact = $record['contact'];
  $modeoflearn= $record['modeoflearn'];
  $scholastic = $record['scholastic'];
  $id = $record['id'];

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <link rel="icon" href="img/avatar.svg">
    <title>Admin Portal</title>
</head>
<body>
    <div class="full-container"><!--COLUMNS -->
        <div class="logo">
            <img src="img/logo.svg">
        </div>    
        <div class="first-container"> <!-- DESIGN 1ST COLUMN -->
            <div class="title">Form Data</div>
            <form method="post"  action="insert.php" class="form" enctype="multipart/form-data">
                <div class="input_field">
                    <label>Student Number</label>
                    <input type="text" class="input" name="studno"  value="<?php echo $studno;?>" required>
                </div>
                <div class="input_field">
                    <input type="hidden" name="id"  value="<?php echo $id;?>">	
                </div>
                <div class="input_field">
                    <label>Full Name</label>
                    <input type="text" class="input" name="name"  value="<?php echo $name;?>" required>
                </div>
                <div class="input_field">
                    <label>Webmail</label>
                    <input type="email" class="input" name="webmail" value="<?php echo $webmail;?>" required>
                </div>
                <div class="input_field">
                    <label>Contact Number</label>
                    <input type="text" class="input" name="contact"  value="<?php echo $contact;?>" required>
                </div>
                <div class="input_field">
                    <label>Mode of Learning</label>
                    <div class="custom_select">
                        <select name="modeoflearn" value="<?php echo $modeoflearn?>">
                            <option value="Online">Online</option>
                            <option value="Correspondence">Correspondence</option>
                        </select>
                    </div>                    
                </div>
                <div class="input_field">
                    <label>Scholastic Status</label>
                    <div class="custom_select">
                        <select name="scholastic" value="<?php echo $scholastic?>"> 
                            <option value="Regular">Regular</option>
                            <option value="Irregular">Irregular</option>
                        </select>
                    </div>                    
                </div>
                <div class="third">
                    <div class="input_field">
                    <?php if($edit==false):?>
                    <input type="submit" name="submit" value="Save" class="btn"  autocomplete="off"/>
                    <?php else:?>
                    <input type="submit" name="update" value="Update"  class="btn"   autocomplete="off"/>
                    <?php endif ?>
        
                    </div> 
                </div>        
          </form>
        </div>

       <form>
        <div class="second-container"><!-- DESIGN 2nd COLUMN -->
            <div class="search">
                <input type="text" placeholder="Find student's data" name="SEARCH" id="search-input">
                    <i class="fas fa-search"></i>                
            </div>

        </form>
            
            <div class="table-wrapper">
                <table id="filterTable">
                    <thead>
                    <tr>
                        <th data-type="text">Student Number</th>
                        <th data-type="text">Name</th>
                        <th data-type="text">Webmail</th>
                        <th data-type="text">Contact Number</th>
                        <th data-type="text">Mode of Learning</th>
                        <th data-type="text">Scholastic Status</th>
                        <th data-type="text"></th>
                        <th data-type="text"></th>
                    </tr>
                    </thead>

                    <tbody>
                        <?php 

                        $result=mysqli_query($db, "SELECT * FROM information order by id desc");
                    
                        while($row=mysqli_fetch_array($result)) {  
                        
                        ?>
                            
                        <tr>
                            <td class="find"><?php echo $row["studno"];?></td>
                            <td class="find"><?php echo $row["name"];?></td>
                            <td class="find"><?php echo $row["webmail"];?></td>
                            <td class="find"><?php echo $row["contact"];?> </td>
                            <td class="find"><?php echo $row["modeoflearn"];?></td>
                            <td class="find"><?php echo $row["scholastic"];?></td>
                            <td>
                                <a class="button" name="edit" href="admin.php?edited=<?php echo $row['id']; ?>">Edit</a>
                            </td>
                            <td>
                                 <a class="button" name="delete" href="admin.php?delete=<?php echo $row['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                        }
                            
                     ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
    <?php session_start(); /* Starts the session */
if(!isset($_SESSION['UserData']['Username'])){
header("location:login.php");
exit;
}
?>

    <a class="s-out" href="logout.php">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Logout
    </a>
  ;
?>
</body>
</html>

