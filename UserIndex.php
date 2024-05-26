<?php session_start(); ?>
<?php include("config/dbconnect.php"); ?>
<html>

<head>
<!-- <link rel="stylesheet" type="text/css" href="./assets/css/login.css"> -->
  <link rel="stylesheet" type="text/css" href="./assets/css/nav.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/content.css">

  <style>
    .hero-section {
      background-image: url("./assets/images/heroimg.jpg");
      height: 300px;
      width: 100%;
      background-size: cover;
    }
  </style>

</head>

<body>
  <header>
    <h2 class="logo">QUICKFIX.</h2>
    <nav>
      <a href="#">HOME</a>
      <a href="aboutus.html">ABOUT US</a>
      <div class="dropdown">
        <a href="#">SERVICES</a>
        <ul class="dropdown-content">
          <li><a href="washingmc.php">Washingmc Repair</a></li>
          <li><a href="microwave.php">Microwave Repair</a></li>
          <li><a href="fridge.php">Refrigerator Repair</a></li>
          <li><a href="#">Service 4</a></li>
          <li><a href="#">Service 5</a></li>
          <li><a href="#">Service 6</a></li>
          <!-- Add more services as needed -->
        </ul>
      </div>
      <button class="btnlogin"><a href="login.php">Login</a></button>
    </nav>
  </header>



  <div class="hero-section"></div>
  <!-- <p><a href="logout.php">Log out</a></p> -->
  <!-- <div class="main">
   <h2>Welcome to Electronic Appliances Repairing Services</h2>
  </div> -->
  <div class="container">
    <div class="parent-con">
      <div class="vertical">
        <div class="parafirst">
          <div class="heading">
            <h2 id="head">Welcome To<br>QUICKFIX Services</h2>
          </div>
          <br>
          <br>
          <div class="firs_des"> Appliances Is Our Specialty. We service all major household appliances including: Refrigerator, Washing machine, Microwave, AC, Geysers, Air coolers, Water purifiers with 100% Satisfaction Guarantee On Electronic appliances Repair and service at your doorsteps with just one click. We offer our service to meet your expectations with a warranty. We provide the best & genuine service of all spare parts.

          </div>

        </div>
        <div class="secpara">
          <br>
          <div class="sec_des">No payment required during booking, pay after service completed, if all parameters are satisfied.
            Our services are available in Pimpri, Chinchwad, Wakad, Pimple Saudagar, Pimple Gurav, Aundh, Baner, Balewadi, Akurdi, Nigadi, Moshi, Marunji, Hinjawadi, Ravet, Punawale, Kiwale, Tathawade, Gahunje, walhekarwadi Pune We offer all home appliance repair and services within a short period of time. Our technicians are well experienced in troubleshooting all appliances like Air conditioner, washing machine, Refrigerator, Geyser, Air cooler, Water purifier, Microwave oven etc.
          </div>
        </div>
      </div>
      <div class="img"><img id="welcome" src="./assets/images/welcomeimg.png"></div>
    </div>
  </div>

  <div class="mid_container">
    <div class="our-services">Our Best Services</div>

    <span class="our_desc">Repairing appliances with excellence</span>
  </div>
  <div class="grid_container">

    <!-- 1st product div start -->
    <div class="item1_container">

      <div class="prod_img_container">
        <img class="prod_img1" src="./assets/images/washM1.jpg" loading="lazy" alt=>
      </div>
      <div id="p_name">Washing Machine Repair</div>
      <div class="price_tag">First Visit Charges: ₹80</div>
      <div class="price_and_button_container">
        <p id="p_desc">we provide best washing machine services Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, nobis aspernatur molestiae voluptatum accusantium dolor cumque sint similique nulla itaque libero temporibus deserunt amet hic culpa, dignissimos, tempora necessitatibus tempore.</p>



        <div class="order_button_container"><a href="washingmc.php" id="order_title">Read More</a>
        </div>
      </div>
    </div>
    <!-- 1st product div end -->


    <!-- 2nd product div start -->
    <div class="item2_container">
      <div class="prod_img_container">
        <img class="prod_img1" src="./assets/images/microwave-repair2.jpg" loading="lazy" alt=>
      </div>
      <div id="p_name">Microwave Repair </div>
      <div class="price_tag">First Visit Charges: ₹80</div>
      <div class="price_and_button_container">
        <p id="p_desc">we provide best washing machine services Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, nobis aspernatur molestiae voluptatum accusantium dolor cumque sint similique nulla itaque libero temporibus deserunt amet hic culpa, dignissimos, tempora necessitatibus tempore.</p>



        <div class="order_button_container"><a href="microwave.php" id="order_title">Read More</a>
        </div>
      </div>
    </div>
    <!-- 2nd product div end -->

    <!-- 3rd product div start -->
    <div class="item3_container">
      <div class="prod_img_container">
        <img class="prod_img1" src="./assets/images/haierf.jpg" loading="lazy" alt=>
      </div>
      <div id="p_name">Refrigerator Repair</div>
      <div class="price_tag">First Visit Charges: ₹80</div>
      <div class="price_and_button_container">
        <p id="p_desc">we provide best washing machine services Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro, nobis aspernatur molestiae voluptatum accusantium dolor cumque sint similique nulla itaque libero temporibus deserunt amet hic culpa, dignissimos, tempora necessitatibus tempore.</p>



        <div class="order_button_container"><a href="fridge.php" id="order_title">Read More</a></div>
      </div>
    </div>
    <!-- 3rd product div end -->




  </div>

  <!-- why choose section start-->
  <div class="container">
    <div class="parent-con">
      <div class="vertical2">
        <div class="parafirst2">
          <div class="heading2">
            <h3>
              <p id="head2"> why choose QUICKFIX Services </p>
            </h3>


          </div>
          <h2>We Would Make Absolutely Any Place Repairing, Neat & Tidey </h2>
          <br>
          <br>
          <div class="firs_des2">
            <ul>
              <li>
                <h5>Experince</h5>
                <p>Over 10 years of experience makes us the best organization in the Repairing
                  services.</p>
              </li>

              <li>
                <h5>Satisfied Clients</h5>
                <p>Since 2015, we have had millions of clients, and all are fully satisfied with our Repairing services.</p>
              </li>

              <li>
                <h5>professionals</h5>
                <p>We have over 60 + professionals who have the best skills and knowledge in their field of expertise.</p>
              </li>

              <li>
                <h5>Best Service</h5>
                <p>With the skilled professional and latest equipment we assure the best service guarantee.</p>
              </li>

              <li>
                <h5>24/7 Costomer Support</h5>
                <p>Our services are available to you 24 hours so that you can schedule your choice or preferred timing.</p>
              </li>

            </ul>
          </div>

        </div>

      </div>
      <div class="img"><img id="welcome" src="./assets/images/whyus.png"></div>
    </div>
  </div>


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