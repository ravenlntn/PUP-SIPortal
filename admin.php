<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/avatar.svg">
    <title>Admin Portal</title>
</head>
<body>
    <div class="full-container"><!--COLUMNS -->
    
        <div class="first-container"> <!-- DESIGN 1ST COLUMN -->
            <form method="post"  action="server.php" class="" enctype="multipart/form-data">
                <input type="hidden" name="id"  value="<?php echo $id;?>">		
                <input type="text" name="studno" placeholder="Student Number" value="<?php echo $studno;?>" required/>
                <input type="text" name="name" placeholder="Full Name" value="<?php echo $name;?>" required/>
                <input type="text" name="webmail" placeholder="Webmail" value="<?php echo $webmail;?>" required/>
                <input type="text" name="contact" placeholder="Contact Number" value="<?php echo $contact;?>" required/>
                <input type="radio"   name="modeoflearn"   placeholder="Mode of Learning" value="<?php echo $modeoflearn;?>" required/>
                <input type="radio"   name="scholastic"   placeholder="Scholastic Status" value="<?php echo $scholastic;?>" required/>  
                <?php if($edit==false):?>
                 <input type="submit" name="save" value="Save" class="save"  autocomplete="off"/>
        
                <?php else:?>
                  <input type="submit" name="update" value="Update"  class="save"   autocomplete="off"/>
                <?php endif ?>
        
          </form>
        </div>

            <div class="second-container"><!-- DESIGN 2nd COLUMN -->
                <table class="container" >
                  <thead>
                    <tr>
                        <th>Student Number</th>
                        <th>Name</th>
                        <th>Webmail</th>
                        <th>Contact Number</th>
                        <th>Mode of Learning</th>
                        <th>Scholastic Status</th>
                    </tr>
                 </thead>
<tbody>
    <?php 

$result=mysqli_query($db, "SELECT * FROM info order by id desc");

    while($row=mysqli_fetch_array($result)) { ?>
<tr>
    <td><?php echo $row["studno"];?></td>
    <td><?php echo $row["name"];?></td>
    <td><?php echo $row["webmail"];?></td>
    <td><?php echo $row["contact"];?> </td>
    <td><?php echo $row["modeoflearn"];?></td>
    <td><?php echo $row["scholastic"];?></td>
    <td>
        <a class="button"  href="admin.php?edit=<?php echo $row['id']; ?>">Edit</a>
    </td>
    <td>
         <a class="button" name="del" href="server.php?del=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>

</tbody>
    <?php }?>
</table>

        </div>
    </div>
    
</body>
</html>