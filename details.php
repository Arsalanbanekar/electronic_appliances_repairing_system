<?php 
include("config/dbconnect.php");
$query = "SELECT * FROM `register`";
$data=mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total > 0)
{
    ?>
    <link rel="">
    <h1> Registered Members</h1>
    <table border="2" width="50%">
        <tr>
            <th width="10%"> ID</th>
            <th width="10%"> username</th>
            <th width="10%"> email</th>
            <th width="10%"> phone</th>
            <th width="10%"> Action</th>

         </tr>
         <?php
         while($result = mysqli_fetch_assoc($data))
         {
            echo"<tr>
                   <td>".$result['id']."</td>
                   <td>".$result['username']."</td>
                   <td>".$result['email']."</td>
                   <td>".$result['phone']."</td>
                   <td><a href='Delete.php? id=$result[id]' onclick='return DeleteMe()'>Delete </td>
                   </tr>
                   ";
                }
            }
            else
            {
                echo "No Records";
            }
        ?>
        </table>
        <script>
            function DeleteMe()
            {
                return confirm("DO You Really Want To Delete This Record ?");
            }
            </script>
