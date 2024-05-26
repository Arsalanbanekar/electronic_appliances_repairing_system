<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username</th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql = "SELECT * FROM register"; // Retrieve all customers
      $result = mysqli_query($con, $sql); // Use mysqli_query for consistency
      $count = 1;
      if (mysqli_num_rows($result) > 0) { // Check if there are rows returned
        while ($row = mysqli_fetch_assoc($result)) {
    ?>
          <tr>
            <td><?= $count ?></td>
            <td><?= $row["user"] ?></td>
            <td><?= $row["email"] ?></td>
            <td><?= $row["phone"] ?></td>
          </tr>
    <?php
          $count++;
        }
      } else {
        echo "<tr><td colspan='4'>No users found</td></tr>";
      }
    ?>
  </table>
</div>
