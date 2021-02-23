<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>PUP-SIPortal</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel="stylesheet" type="text/css" href="css/FINAL.css">
   
    <link rel="icon" href="img/avatar.svg">
    <script src='main.js'></script>
    <style>
  
    </style>
</head>
<body >
  


<div class="Logo"><a href="#"><img src="img/header.svg" width="100%"></a>    
</div>
      <?php 
      
       $con = mysqli_connect('localhost','root','','pupsiportal');
       if(isset($_POST['search'])){
        $searchKey = $_POST['search'];
        $sql = "SELECT * FROM information WHERE name like '%searchKey%' order by name ";
       }else{
         $sql = "SELECT * FROM information ";
         $searchKey = " ";
       }
      
       $sql = "SELECT * FROM information ";
       $result = mysqli_query($con,$sql);
      ?>

        
    <table id="respTable" class="center">
        <thead>
          <tr>
            <th>STUDENT NO.</th>
            <th>NAME</th>
            <th>WEBMAIL</th>
            <th>CONTACT NUMBER</th>
            <th>MODE OF LEARNING</th>
            <th>SCHOLASTIC STATUS</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_object($result)){ ?>
          <tr>
            <td><?php echo $row->studno?></td>
            <td> <?php echo $row->name?></td>
            <td><?php echo $row->webmail?></td>
            <td><?php echo $row->contact?></td>
            <td><?php echo $row->modeoflearn?></td>
            <td><?php echo $row->scholastic?></td>
          </tr>
         
       
           <?php } ?> 
        </tbody>
       
      </table>
   
<script src="./js/index.js"></script>

</body>
</html>
