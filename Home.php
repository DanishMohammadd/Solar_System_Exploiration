 <?php  

session_start();
if(!isset($_SESSION['username'])){
header('location:login (2).php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Project</title>
	 <meta http-equiv="Content-Type" content="text/html" charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/Home.css">
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
      
</head>
<body>

  

	<div class="header">
		<div class="up" style="width:290px;margin-left:20px;background-color: black;border-radius:40%;">
		<h2 style="color:white;border:4px solid yellow;border-radius:80%; padding-top:10px;">Solar System Exploiration</h2>
    	</div>

		<div class="down">  

      <nav>
            
            <ul>
      
          <li><a href="Home.php" class="active"><font color="#b4eb0d"><i class="fa fa-home" aria-hidden="true"></i></font> HOME</a></li>
          <li><a href="login (2).php"><font color="#b4eb0d"><i class="fa fa-users" aria-hidden="true"></i></font> LOGIN</a></li>
          <li><a href="Gallery.php"><font color="#b4eb0d"><i class="fa fa-camera" aria-hidden="true"></i></font> GALLERY</a></li>
          <!--<li><a href="#"><font color="#b4eb0d"><i class="fa fa-commenting" aria-hidden="true"></i></font> BLOGS</a></li>-->
          <li><a href="feedback1.php"><font color="#b4eb0d"><i class="fa fa-usb" aria-hidden="true"></i></font> FEEDBACK</a></li>
           <li><a href="mission.php"><font color="#b4eb0d"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></font> MISSIONS</a></li>
         <!-- <li><a href="#"><font color="#b4eb0d"><i class="fa fa-phone-square" aria-hidden="true"></i></font> CONTACT US</a></li> -->
       
      
          </ul>
            
        </nav>
		</div>
		
	</div>
  

	<div class="container">
		<div class="left">
			 <h1><font color="red"><b>WELCOME TO THE WORLD OF SOLAR SYSTEM:</b></font></h1>

          <script type="text/javascript" src="jq.js"></script>
  <script type="text/javascript" src="jcycle.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $("#image").cycle();
      
    });
  
  </script>
</head>
<body>
 


<div id="image">
<img src="images/sse.jpg" height="300px" width="740px">
<img src="images/sse1.jpg" height="300px" width="740px">
<img src="images/sse2.jpg" height="300px" width="740px">
<img src="images/ss3.jpg" height="300px" width="740px">
</div>
                    
                   <!-- <img src="images/home.jpg" height="200px" width="750px">-->
                    
                <p>The first exploration of the Solar System was conducted by telescope, when astronomers first began to map those objects too faint to be seen with the naked eye.

                Galileo was the first to discover physical details about the individual bodies of the Solar System. He discovered that the Moon was cratered, that the Sun was marked with sunspots, and that Jupiter had four satellites in orbit around it.[2] Christiaan Huygens followed on from Galileo's discoveries by discovering Saturn's moon Titan and the shape of the rings of Saturn.[3] Giovanni Domenico Cassini later discovered four more moons of Saturn and the Cassini division in Saturn's rings.Although it is debatable when the Solar System was truly "discovered", three 19th century observations determined its nature and place in the Universe beyond reasonable doubt. First, in 1838, Friedrich Bessel successfully measured a stellar parallax, an apparent shift in the position of a star created by Earth's motion around the Sun.Then, in 1859, Robert Bunsen and Gustav Kirchhoff, using the newly invented spectroscope, examined the spectral signature of the Sun and discovered that it was composed of the same elements as existed on Earth, establishing for the first time a physical similarity between Earth and the other bodies visible from Earth
              </p>
                    
                </div>
            
		</div>
		            <div class="right">
                
                <div class="widget">
<!--                              
<div class="tidate b-orange">
                               
    <h1><font color="#0066FF"><strong><font color="red">PLANETS:::</font></strong></font></h1>
                                 
</div>
        
<marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();" align="right" 
         
      
        
       <img src="images/19_mars.png" width="290px" height="60px"/><br>
        <img src="images/19_mars.png" width="290px" height="60px"/><br>
         <img src="images/28_saturn.png" width="290px" height="60px"> <br>
         <img src="images/Earthpng.png" width="290px" height="60px"> <br>
         <img src="images/jupiter.png" width="290px" height="60px"> <br>
         <img src="images/moon.jpg" width="290px" height="60px"> <br>
         <img src="images/the-sun.jpg" width="290px" height="60px"> <br>
         <img src="images/images.jpg" width="290px" height="60px"></marquee>

                 <img src="images/19_mars.png" width="290px" height="60px"/><br>
         <img src="images/28_saturn.png" width="290px" height="60px"> <br>
         <img src="images/Earthpng.png" width="290px" height="60px"> <br>
         <img src="images/jupiter.png" width="290px" height="60px"> <br>
         <img src="images/moon.jpg" width="290px" height="60px"> <br>
         <img src="images/the-sun.jpg" width="290px" height="60px"> <br>
         <img src="images/images.jpg" width="290px" height="60px"></marquee>

                 <img src="images/19_mars.png" width="290px" height="60px"/><br>
         <img src="images/28_saturn.png" width="290px" height="60px"> <br>
         <!-<img src="images/Earthpng.png" width="290px" height="60px"> <br>
         <img src="images/jupiter.png" width="290px" height="60px"> <br>
         <img src="images/moon.jpg" width="290px" height="60px"> <br>
         <img src="images/the-sun.jpg" width="290px" height="60px"> <br>
         <img src="images/images.jpg" width="290px" height="60px"></marquee>
               
</div>
                
            </div>-->
            <div style="clear: both;"></div>
            
        </div>
		
	</div>
  <div class="content">

    <div class="sub-content">
      <img src="images/iirs.png" height="280px" width="800px"></div>
      <div class="sub-content1"><p><h3><font color="purple">Chandrayaan-2 begins spectroscopic studies of lunar surface:</font></h3>
Imaging Infrared Spectrometer (IIRS) on-board Chandrayaan-2 is designed to measure the reflected sunlight and emitted part of Moon light from the lunar surface in narrow and contiguous spectral channels (bands) ranging from ~800 – 5000 nanometer (0.8-5.0 micrometer (µm)). It uses a grating to split and disperse the reflected sunlight (and emitted component) into different spectral bands. The major objective of IIRS is to understand the origin and evolution of the Moon in a geologic context by mapping the lunar surface mineral and volatile composition using signatures in the reflected solar spectrum.

The first illuminated image of the lunar surface was acquired by IIRS. The image covers part of the lunar farside in the northern hemisphere. Few prominent craters are seen in the image (Sommerfield, Stebbins and Kirkwood).</p></div>

    </div>
  </div>

   <div class="video">
        <div class="video2">
          <video height="100%" width="100%"   autoplay loop muted>
            <source  src="images/v.mp4" type="video/mp4" >
            
          </video>
        </div>
       </div>
  <div class="footer-main-div">
    <div class="footer-social-icons">
      <ul>
        <li><a href="https://www.facebook.com/danish.shaikh.73594" target="blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/home" target="blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" target="blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="https://www.youtube.com/" target="blank"><i class="fa fa-youtube"></i></a></li>
      </ul>
      
    </div>
    <div class="footer-menu-one">
      <ul>
        <li><a href="Home.php">Home</a></li>
        <li><a href="login (2).php">Login</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="feedback1.php">Feedback</a></li>
        <li><a href="mission.php">Mission</a></li>
      </ul>
      
    </div>
   <!-- <div class="footer-menu-two">
      <ul>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">News</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Media</a></li>
        
      </ul>
      
    </div>-->
  </div>
<div class="footer-bottom">
  <p>Design by:DaNiSh<a href="#">@2020</a></p>
  
</div>
<div class="logout">

  <h2 style="color: blue" class="text-center text-success">Welcome <?php  echo $_SESSION['username']; ?> </h2>
  <a href="logout.php"><button  type="submit" class="btn btn-primary"><h3 style="color: red"> Logout...</h3> </button> </a>
</div>
</body>
</html>
