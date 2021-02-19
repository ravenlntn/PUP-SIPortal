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
    <div class=""><!--COLUMNS -->
        <div class=""> <!-- DESIGN 1ST COLUMN -->
            <form method="post"  action="server.php" class="" enctype="multipart/form-data">
                <input type="hidden" name="id"  value="<?php echo $id;?>" >		
                <input type="text"   name="studno"       placeholder="STUD NO "     value="<?php echo $studno;?>" required/>
                <input type="text"   name="name" placeholder="NAME" value="<?php echo $name;?>" required/>
                <input type="text"   name="webmail"    placeholder="WEBMAIL"    value="<?php echo $webmail;?>" required/>
                <input type="number" name="contact"     placeholder="CONTACT NO#"     value="<?php echo $contact;?>" required/>
                <input type="text"   name="modeoflearn"   placeholder="MODE OF LEARNING"   value="<?php echo $modeoflearn;?>" required/>
                <input type="text"   name="scholastic"   placeholder="SCHOLASTIC STATUS"   value="<?php echo $scholastic;?>" required/>  
                <?php if($edit==false):?>
                 <input type="submit" name="save" value="save" id="save"  autocomplete="off"/>
        
                <?php else:?>
                  <input type="submit" name="update" value="save"  id="save"   autocomplete="off"/>
                <?php endif ?>
        
          </form>
        </div>

            <div class=""><!-- DESIGN 2nd COLUMN -->
                <table class="container" >
                  <thead>
                    <tr>
                        <th><h1>ID</h1></th>
                        <th><h1>STUDENT #</h1></th>
                        <th><h1>NAME</h1></th>
                        <th><h1>WEBMAIL</h1></th>
                        <th><h1>CONTACT #</h1></th>
                        <th><h1>MODE OF LEARNING </h1></th>
                        <th><h1>SCHOLASTIC STATUS</h1></th>
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
        <a class=""  href="admin.php?edit=<?php echo $row['id']; ?>">Edit</a>
    </td>
    <td>
         <a class="" name="del" href="server.php?del=<?php echo $row['id']; ?>">Delete</a>
    </td>
</tr>

</tbody>
    <?php }?>
</table>

        </div>
    </div>
    
</body>
</html>