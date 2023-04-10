<!DOCTYPE html>
<html>
    <head>
     <link rel="stylesheet" href="index.css">

    </head>
<body>
    <div class="outside">
        <div class="button">
            <button class="add" id="add" onclick="func_add()">Add</button>
            <button class="update" id="update" onclick="func_update()">Update</button>
            <button class="delete" id="delete" onclick="func_delete()">Delete</button>
            <button class="retrive" id="retrive" onclick="func_retrive()">Retrive</button>
        </div>
        
         <div id="hide_add">
             
            <form id="form_add" action="?" method="post">
                <h1 style="color:green;">Add The Details Here</h1>
                <input type="text" name="fname" id="fname" placeholder="firstname"><br><br>
                <input type="text" name="desig" id="desig" placeholder="designation"><br><br>
                <input type="text" name="addr1" id="addr_1" placeholder="address 1"><br><br>
                <input type="text" name="addr2" id="addr_2" placeholder="address 2"><br><br>
                <input type="text" name="city" id="city" placeholder="city"><br><br>
                <input type="text" name="state" id="state" placeholder="state"><br><br>
                <input type="text" name="email" id="email" placeholder="Email ID"><br><br>
                <input type="submit" id="btn" name="submit_add" value="Submit" >
            </form>
         </div>

         <diV id="hide_update">
            
            <form id="form_update" action="?" method="post">
                <h1 style="color:green;">Update The Details Here</h1>
                <input type="text" name="email" id="email" placeholder="Email ID"><br><br>
                <select id="select_upd" name="select_upd">
                    <option>select the field to update</option>
                  <option value="Firstname">Firstname</option>
                  <option value="Designation">Designation</option>
                  <option value="Address1">Address1</option>
                  <option value="Address2">Address2</option>
                  <option value="City">City</option>
                  <option value="Ctate">State</option>
                  <option value="Email_ID">Email ID</option>
                </select><br><br>
               <input type="text" name="val" id="val" placeholder="enter value to update" ><br><br>
               <input type="submit" id="btn" name="submit_update" value="Submit" >
            </form>
         </diV>

         <div id="hide_delete">
           
            <form id="form_delete" action="?" method="post">
                <h1 style="color:green;">Delete The Details Here</h1>
                <input type="text" name="email" id="email" placeholder="Email ID"><br><br>
                <input type="submit" id="btn" name="submit_delete" value="Submit" >
            </form>
         </div>

         <div id="hide_retrive">
            <form id="form_retrive" action="?" method="post">
                <h1 style="color:green;">Search The Details Here</h1>
                <input type="text" name="email" id="email" placeholder="Email ID"><br><br>
                <input type="submit" id="btn" name="submit_retrive" value="Search" >

                  
                  <?php
                  $host="localhost";
                  $dbusername="root";
                  $dbpassword="";
                  $dbanme="test";
                  $conn=mysqli_connect($host, $dbusername, $dbpassword, $dbanme);
                  
                  
                  if (!$conn){
                      echo "Server is not connected";
                  }


        if (isset($_POST['submit_retrive'])){
                    $email=$_POST['email'];
                     $sql = "SELECT * from address_book where Email_ID='$email' ";
                 
                     
                     function view($conn, $sql, $row){
                         if($query = mysqli_query($conn, $sql)){
                             if(mysqli_num_rows($query) > 0){
                                 while($result = mysqli_fetch_array($query)){
                                     $name  = $result['Firstname'];
                                     $desig = $result['Designation'];
                                     $addr1 = $result['Address1'];
                                     $addr2 = $result['Address2'];
                                     $city = $result['City'];
                                     $state = $result['State'];
                                     $email = $result['Email_ID'];
                 
                                     $row = $row."<tr>
                                         <td>$name</td>
                                         <td>$desig</td>
                                         <td>$addr1</td>
                                         <td>$addr2</td>
                                         <td>$city</td>
                                         <td>$state</td>
                                         <td>$email</td>
                                         </tr>";
                                 }
                                 mysqli_free_result($query);
                             }
                         }
                         return $row;
                     }
                     $s = view($conn, $sql, "");
                     echo "<table>
                     <tr>
                       <th>Firstname</th>
                       <th>Designation</th>
                       <th>Address 1</th>
                       <th>Address 2</th>
                       <th>City</td>
                       <th>State</th>
                       <th>Email ID</th>
                     </tr>".$s."
                     </table>";
                 }
                  ?>
            </form>
     
    </div>
         <h2>CLICK THE <b>BUTTON</b> TO PERFORM THE RESPECTIVE OPERATION !!!</h2>
    </div>



</body>
<script src="index.js">
   
</script>
<?php
$host="localhost";
$dbusername="root";
$dbpassword="";
$dbanme="test";
$conn=mysqli_connect($host, $dbusername, $dbpassword, $dbanme);


if (!$conn){
    echo "Server is not connected";
}

if(isset($_POST['submit_add']))
{
 $fname=$_POST['fname'];
 $desig=$_POST['desig'];
 $addr1=$_POST['addr1'];
 $addr2=$_POST['addr2'];
 $city=$_POST['city'];
 $state=$_POST['state'];
 $email=$_POST['email'];

            
          $sql_query="insert into address_book (Firstname,Designation,Address1,Address2,City,State,Email_ID)
                             values('$fname','$desig','$addr1','$addr2','$city','$state','$email')";
          
                             if(mysqli_query($conn,$sql_query)){
                              $msg="Date Added Successfully !!!";
                              echo "<script type='text/javascript'>alert('$msg');</script>";
                             }
                             else{
                               echo "Error".$sql_query." ".mysqli_error($conn);
                             }
}
 if(isset($_POST['submit_update']))
{
 $email=@$_POST['email'];
 $select=@$_POST['select_upd'];
 $value=@$_POST['val'];
            
          $sql_query="update address_book set $select='$value' where Email_ID='$email' ";
          
                             if(mysqli_query($conn,$sql_query)){
                              $msg="Date Updated Successfully !!!";
                              echo "<script type='text/javascript'>alert('$msg');</script>";
                             }
                             else{
                               echo "Error".$sql_query." ".mysqli_error($conn);
                             }
}
if (isset($_POST['submit_delete']))
{
 $email=$_POST['email'];

            
          $sql_query="delete from address_book where Email_ID='$email'";
          
                             if(mysqli_query($conn,$sql_query)){
                              $msg="Date Deleted Successfully !!!";
                              echo "<script type='text/javascript'>alert('$msg');</script>";
                             }
                             else{
                               echo "Error".$sql_query." ".mysqli_error($conn);
                             }
}


?>
</html>