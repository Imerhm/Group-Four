?>
<html>
<head>
    <title>Messages</title>
<link rel="stylesheet" href="css/usermassage.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <!-- <li><a href="index.php">HOME</a></li>
                <li class="logout"><a href="admindash.php">DASHBOARD</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="contactus.php">CONTACT</a></li> -->
                <li class="back"><a href="logout.php">LOGOUT</a></li>
              </ul>
        </div>
      </nav>
    </header>
      <div class="main-content-header">
        <form>
         <table>
          <tr>
           <th class="id_h1">Id </th>
           <th class="name_h1">Name </th> 
           <th class="email_h1">Email </th> 
           <th class="contact_h1">Contact No</th>
           <th class="massage_h1">Message </th>
          </tr>
        
<?php
include('dbcon.php');
  $sql="SELECT * FROM `user_massage`";
  $run=mysqli_query($con,$sql);
  if(mysqli_num_rows($run)>0)
{
     while($row=mysqli_fetch_assoc($run))
     {
        ?>
        <tr>
            <th class="id_h"> <?php  echo $row['id'].'<br>'; ?></th>
            <th class="name_h"> <?php  echo $row['u_name'].'<br>'; ?></th> 
            <th class="email_h"> <?php  echo $row['u_email'].'<br>'; ?></th> 
            <th class="contact_h"> <?php  echo $row['u_contact'].'<br>'; ?></th> 
            <th class="massage_h"> <?php  echo $row['u_massage'].'<br>'; ?></th> 
        </tr>     
        <?php    
        }
   
}
else{
    echo "Connection failed";
}

?>
              </table>
        </form>
      </div>
</body>
</html>
