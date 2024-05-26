<html>

<head>
  <!-- <link rel="stylesheet" type="text/css" href="./assets/css/login.css"> -->
  <link rel="stylesheet" type="text/css" href="./assets/css/content.css">

</head>


<div class="mid_container">
  <div class="our-services">Refrigerator Repair Services</div>

  <span class="our_desc"></span>
</div>


<div class="container">
  <div class="parent-con">
    <div class="vertical2">
      <div class="parafirst2">
        <!-- <div class="heading2">
          <p id="head2"> </p>


        </div> -->
        <h2>Refrigerator repair and service</h2>
        <br>
        <br>
        <div class="firs_des2">
          <ul id="size">
            <li>
              <h5>All types Refrigerator repair and service.</h5>

            </li>

            <li>
              <h5>single door</h5>

            </li>

            <li>
              <h5>double door</h5>
            </li>

            <li>
              <h5>Top Freezer</h5>

            </li>

            <li>
              <h5> Mini Refrigerator</h5>

            </li>


          </ul>
          <h5 class="washingmc_desc">We provide professional technicians to service all category of Refrigerator like
            single door, double door, Top Freezer, Mini Refrigerator. Refrigerator is an important part of our daily
            life, we understand the importance of your time and serve you faster than regular refrigerator service
            providers. Even a small glitch in your fridge can cause your refrigerator to not work properly.
            Refrigerators charge only for their genuine work and a small problem will only cost you little, so don't
            hesitate to check our refrigerator repair service in Pimpri, Chinchwad, Wakad, Pimple Saudagar, Pimple
            Gurav, Aundh, Baner, Balewadi, Akurdi, Nigadi, Moshi, Marunji, Hinjawadi, Ravet, Punawale, Kiwale,
            Tathawade, Gahunje, walhekarwadi Pune at your doorstep. Get highly skilled technician, reasonable services.


            All our technicians are certified, trained and experienced. In addition, they all undergo rigorous
            background checks to ensure the safety of you and your home.
          </h5>


        </div>

      </div>

    </div>
    <div class="img"><img id="welcome" src="./assets/images/fridge-repair1.jpg"></div>



  </div>




</div>



<div class="formbold-main-wrapper">
  <!-- Author: FormBold Team -->
  <!-- Learn More: https://formbold.com -->
  <div class="formbold-form-wrapper">
    <form action="" method="POST">
      <div class="formbold-mb-5">
        <label for="name" class="formbold-form-label">Full Name</label>
        <input type="text" name="name" id="name" placeholder="Full Name" class="formbold-form-input" />
      </div>
      <div class="formbold-mb-5">
        <label for="phone" class="formbold-form-label">Phone Number</label>
        <input type="text" name="phone" id="phone" placeholder="Enter your phone number" class="formbold-form-input" />
      </div>
      <div class="formbold-mb-5">
        <label for="email" class="formbold-form-label">Email Address</label>
        <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" />
      </div>
      <div class="formbold-mb-5">
        <label for="pay_method" class="formbold-form-label">Payment Method</label>
        <select name="pay_method" id="pay_method" class="formbold-form-input">
          <option value="cash">Cash</option>
          <option value="online">Online</option>
        </select>
      </div>

      <div class="flex flex-wrap formbold--mx-3">
        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5 w-full">
            <label for="date" class="formbold-form-label">Date</label>
            <input type="date" name="date" id="date" class="formbold-form-input" />
          </div>
        </div>

        <script>
          document.addEventListener("DOMContentLoaded", function() {
            // Get the date input element
            var dateInput = document.getElementById("date");

            // Set the minimum date to today
            var today = new Date();
            var dd = today.getDate();
            var mm = today.getMonth() + 1; // January is 0!
            var yyyy = today.getFullYear();

            if (dd < 10) {
              dd = '0' + dd;
            }

            if (mm < 10) {
              mm = '0' + mm;
            }

            today = yyyy + '-' + mm + '-' + dd;
            dateInput.setAttribute("min", today);
          });
        </script>

        <div class="w-full sm:w-half formbold-px-3">
          <div class="formbold-mb-5">
            <label for="time" class="formbold-form-label">Time</label>
            <input type="time" name="time" id="time" class="formbold-form-input" />
          </div>
        </div>
      </div>

      <div class="formbold-mb-5 formbold-pt-3">
        <label class="formbold-form-label formbold-form-label-2">Address Details</label>
        <div class="flex flex-wrap formbold--mx-3">
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input type="text" name="area" id="area" placeholder="Enter area" class="formbold-form-input" />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input type="text" name="city" id="city" placeholder="Enter city" class="formbold-form-input" />
            </div>
          </div>
          <div class="w-full sm:w-half formbold-px-3">
            <div class="formbold-mb-5">
              <input type="text" name="state" id="state" placeholder="Enter state" class="formbold-form-input" />
            </div>
          </div>

        </div>
      </div>

      <div>
        <input type="submit" name="Done" value="Book Appointment" class="formbold-btn">
      </div>
    </form>
  </div>
</div>

<?php
include("config/dbconnect.php");
error_reporting(0);

if ($_POST['Done']) {

  $name     = $_POST['name'];
  $Phone    = $_POST['phone'];
  $Email    = $_POST['email'];
  $Payment   = $_POST['pay_method'];
  $date     = $_POST['date'];
  $time     = $_POST['time'];
  $area     = $_POST['area'];
  $city     = $_POST['city'];
  $state    = $_POST['state'];



  $sql = " INSERT INTO appointment_data(full_name, phone_number,email,payment_method,appointment_date,appointment_time, area, city, state) VALUES ('$name','$Phone','$Email','$Payment','$date','$time','$area',' $city','$state')";

  $data  = mysqli_query($con, $sql);

  if ($data) {
    echo "<script> alert('Thank You..We Will Contact You Soon..!') </script>";
?>
    <meta http-equiv="refresh" content="1; url=http://localhost/admin_panel/fridge.php" />
<?php
  } else {
    echo "Data Not inserted..ERROR";
  }
}

?>





<!-- footer content -->
<div class="footer_container">
  <div class="four_in_one">
    <div class="first_footer_prod_cont">
      <h2 class="foot_prod_title">QUICKFIX Services</h2>
      <span id="prod_des_container">
        <p class="prod_desc">We Provide Fast and efficient Home Appliances repairing service for all types brands like LG, Samsung, IFB, Whirlpool, Videocon, hier, Godrej, Onida, Panasonic. Our services include top load, frond load, fully automatic, semi automatic Washing Machine Repairing, Single and Double door Refrigerator Repair, AC servicing,services Pune at your doorstep. Get highly skilled technician, reasonable services.</p>
      </span>
    </div>

    <div class="quick_links_container">
      <h3 class="q_link_title">Quick Links</h3>
      <nav class="nav_link_cont">

      <a href="UserIndex.php" class="nav_home2">Home</a>
          <a href="aboutus.html" class="nav_about2">About Us</a>
          <a href="login.php" class="nav_login2">Login</a>
          <a href="login.php" class="nav_signup2">Sign Up</a>
          
      </nav>
    </div>

    <div class="work_time_container">
      <h3 class="work_title">Work Times</h3>
      <div class="work_des">
        <p>
          Mon.:Fri.:8am - 8pm
          <br><br>
          Sat.:9am - 4pm
          <br><br>
          Sun.:Closed
        </p>
      </div>
    </div>

    <div class="contact_info_container">
      <h3 class="contact_title">Contact Info</h3>
      <div class="contact_des">
        <p>
          Phone :9112439927
          <br><br>
          Address :
          #890 CFG Apartment,Mayur Vihar ,Pune-
          india.
          <br><br>
          Email :info@quickfixservices.com
        </p>
      </div>
    </div>
  </div>
  <div class="last_footer">
    <div class="logos">
      <div class="insta_container"><a href="https://www.instagram.com"><img class="insta" src="./assets/images/instagram.jpeg" alt="insta"></a></div>
      <div class="facebook_container"><a href="https://www.facebook.com"><img class="facebook" src="./assets/images/facebook.png" alt="faceb"></a></div>
      <div class="twitter_container"><a href="https://twitter.com"><img class="twitter" src="./assets/images/twitter.png" alt="twitt"></a></div>
    </div>
    <div class="copy_right">
      <p id="copy_right_desc">© Copyright <b>QUICKFIX Services</b>.All Rights Reserved</p>
    </div>
  </div>
</div>


</body>

</html>