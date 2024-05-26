
<div id="ordersBtn">
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>name</th>
        <th>phone</th>
        <th>email</th>
        <th>Payment Method</th>
        <th>date</th>
        <th>time</th>
        <th>area</th>
        <th>city</th>
        <th>state</th>
        <th>Order Status</th>
        <th>Payment Status</th>

      </tr>
    </thead>
    <?php
include_once "../config/dbconnect.php";
$sql = "SELECT * FROM appointment_data";
$result = $con->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td><?= $row["id"] ?></td>
      <td><?= $row["full_name"] ?></td>
      <td><?= $row["phone_number"] ?></td>
      <td><?= $row["email"] ?></td>
      <td><?= $row["payment_method"] ?></td>
      <td><?= $row["appointment_date"] ?></td>
      <td><?= $row["appointment_time"] ?></td>
      <td><?= $row["area"] ?></td>
      <td><?= $row["city"] ?></td>
      <td><?= $row["state"] ?></td>
      <td>
                <?php
                if ($row["order_status"] == 0) {
                    echo '<button class="btn btn-danger" onclick="ChangeOrderStatus(' . $row['id'] . ')">Pending</button>';
                } else {
                    echo '<button class="btn btn-success" onclick="ChangeOrderStatus(' . $row['id'] . ')">Delivered</button>';
                }
                ?>
            </td>
        
            <td>
                <?php
                if ($row["pay_status"] == 0) {
                    echo '<button class="btn btn-danger" onclick="ChangePay(' . $row['id'] . ')">Unpaid</button>';
                } else {
                    echo '<button class="btn btn-success" onclick="ChangePay(' . $row['id'] . ')">Paid </button>';
                }
                ?>
            </td>
            </tr>
    <?php
            
        }
      }
    ?>

</table>
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
  <div class="modal-dialog modal-lg">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Order Details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="order-view-modal modal-body">
      </div>
    </div><!--/ Modal content-->
  </div><!-- /Modal dialog-->
</div>
<script>
  //for view order modal  
  $(document).ready(function() {
    $('.openPopup').on('click', function() {
      var dataURL = $(this).attr('data-href');
      $('.order-view-modal').load(dataURL, function() {
        $('#viewModal').modal({ show: true });
      });
    });
  });
</script>