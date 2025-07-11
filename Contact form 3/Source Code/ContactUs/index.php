<?php
$servername="localhost";
$username="root";
$password="";
$database="";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
  die("connection not".mysqli_error($conn));
}
else{
  echo "connect";
  
}
  if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = $email;
    $subject = $message;
    
    $sql="INSERT INTO `employees` ( `name`, `role`, `doj`) VALUES ('$username', '$email', '2022-03-18 10:40:31.000000')";
    $run=mysqli_connect($conn,$sql);
  }
?>

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	
    <link rel="stylesheet" href="about.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
	<link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>

	</head>
	<body>
		<nav>
			<div class="menu">
			  <div class="logo">
				<img src="blogo1.png" alt="Donate Blood" width="60" height="45">
				<a href="#">Donate<span>Blood</span></a>
			  </div>
			  <ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a></li>
				<li><a href="#">Services</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Feedback</a></li>
				<li><a href="#">Login/Reg</a></li>
			  </ul>
			</div>
		  </nav>
		  <div class="img"></div>

          <div class="container">
            <span class="big-circle"></span>
            <img src="img/shape.png" class="square" alt="" />
            <div class="form">
              <div class="contact-info">
                <h3 class="title">Let's get in touch</h3>
                <p class="text">
                  Donate blood and save lives. The blood you donate will be small for you but for another person it can mean everything.
                </p>
      
                <div class="info">
                  <div class="information">
                    <img src="img/location.png" class="icon" alt="" />
                    <p>UET Taxila, Punjab, Pakistan.</p>
                  </div>
                  <div class="information">
                    <img src="img/email.png" class="icon" alt="" />
                    <p>DonateBlood@gmail.com</p>
                  </div>
                  <div class="information">
                    <img src="img/phone.png" class="icon" alt="" />
                    <p>090078601</p>
                  </div>
                </div>
      
                <div class="social-media">
                  <p>Connect with us :</p>
                  <div class="social-icons">
                    <a href="#">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                      <i class="fab fa-linkedin-in"></i>
                    </a>
                  </div>
                </div>
              </div>
      
              <div class="contact-form">
                <span class="circle one"></span>
                <span class="circle two"></span>
      
                <form action="index.html" autocomplete="off">
                  <h3 class="title">Contact us</h3>
                  <div class="input-container">
                    <input type="text" name="name" class="input" />
                    <label for="">Username</label>
                    <span>Username</span>
                  </div>
                  <div class="input-container">
                    <input type="email" name="email" class="input" />
                    <label for="">Email</label>
                    <span>Email</span>
                  </div>
                  <div class="input-container">
                    <input type="tel" name="phone" class="input" />
                    <label for="">Phone</label>
                    <span>Phone</span>
                  </div>
                  <div class="input-container textarea">
                    <textarea name="message" class="input"></textarea>
                    <label for="">Message</label>
                    <span>Message</span>
                  </div>
                  <input type="submit" value="Send" class="btn" />
                </form>
              </div>
            </div>
          </div>
      
          <script src="app.js"></script>

		  


  <footer>

	<div class="footer-container-footer-all">

		 <div class="footer-container-body">

			 <div class="footer-colum1">
				 <h1><font color="white"><b>Donate as much as you can</b></font></h1>

				 <p>A little blood taken from you doesn't really affect
					 your health but instead benifits you as well as the 
					 other person who you can save from a fatal situation.
				 </p>

			 </div>

			 <div class="footer-colum2">

				 <h1><font color="white"><b>Social Media Accounts</b></font></h1>

				 <div class="footer-row">
					 <img src="icon/facebook.png">
					 <label>Facebook</label>
				 </div>
				 <div class="footer-row">
					 <img src="icon/twitter.png">
					 <label>Twitter</label>
				 </div>
				 <div class="footer-row">
					 <img src="icon/instagram.png">
					 <label>Instagram</label>
				 </div>
				 <div class="footer-row">
					 <img src="icon/google-plus.png">
					 <label>Google Plus</label>
				 </div>
				 <div class="footer-row">
					 <img src="icon/pinterest.png">
					 <label>Pinterest</label>
				 </div>


			 </div>

			 <div class="footer-colum3">

				 <h1><font color="white"><b>Information Contacts</b></font></h1>

				 <div class="footer-row2">
					 <img src="icon/house.png">
					 <label>University
					 of Engineering and
					 Technology (UET),
					 Texila, Punjab, Pakistan.
					 </label>
				 </div>

				 <div class="footer-row2">
					 <img src="icon/smartphone.png">
					 <label>+923456789012</label>
				 </div>

				 <div class="footer-row2">
					 <img src="icon/contact.png">
					  <label>DonateBlood@gmail.com</label>
				 </div>

			 </div>

		 </div>

	 </div>

	 <div class="footer-container-footer">
			<div class="footer">
				 <div class="footer-copyright">
					 © 2022 All Rights Reserved | <a href="">DonateBlood@UET</a>
				 </div>

				 <div class="footer-information">
					 <a href="">Society Information</a> | <a href="">Privacy Protection</a> | <a href="">Terms and Conditions</a>
				 </div>
			 </div>

		 </div>

 </footer>

	</body>
</html>
