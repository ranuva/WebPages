
<table width="100%" border="1">
        <tr> 
          <td><strong><font color="#000000">ID</font></strong></td>
          <td><strong><font color="#000000">GSM Frame</font></strong></td>
          <td><strong><font color="#000000">Channel Type</font></strong></td>
          <td><strong><font color="#000000">CNIC</font></strong></td>
          <td><strong><font color="#000000">Mobile #</font></strong></td>
          <td><strong><font color="#000000">Telephone #</font></strong></td>
          <td><strong><font color="#000000">Company Name</font></strong></td>
          <td><strong><font color="#000000">Client Status</font></strong></td>
          <td><strong><font color="#000000">Register Date</font></strong></td>
   <td><strong><font color="#000000">Edit/Delete/Complaints</font></strong></td>
        </tr>
  <?PHP


    // In the variables section below, replace user and password with your own MySQL credentials as created on your server
   $servername = "localhost";
    $username = "root";
   $password = "root123";
   $DB_Name = "GSM_MS_BTS";

     // Create MySQL connection 
     $conn = mysqli_connect($servername, $username, $password,$DB_Name);

   // Check connection - if it fails, output will include the error message
       if (!$conn) {
                   die('<p>Connection failed: <p>' . mysqli_connect_error());
                  }
      //      echo '<p>Connected successfully</p>';
    
    //$sql = "SELECT * FROM `client_reg` Order by Id DESC ";
    $sql = "SELECT Record_ID,GSMFrame,ChannelType    FROM GSM_MS_BTS Order by Record_ID  DESC";// LIMIT 10";
            //echo '<p>SQL executed</p>';
   //echo $sql;exit;
   if ( ($result=$conn->query($sql)) == TRUE) {
       echo "Database created successfully";
     }  
      else 
       {
        echo "Error creating database: " . $conn->error;
      }

    while( $row = $result->fetch_assoc())
    {
    ?>
        <tr> 
          <td><?php echo $row['Record_ID']; ?></td>
          <td><?php echo $row['GSMFrame']; ?></td>
          <td><?php echo $row['ChannelType']; ?></td>
         
        </tr>
  <?php
  }
  ?>

