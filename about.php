<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Build Your Dream</title>
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>

	<!--  CSS LINK -->
	<link rel="stylesheet" href="style.css">
	<!-- w3 link for modal -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<!-- BOOTSTRAP LINK -->
	<link rel="stylesheet" href="bootstrap/bootstrap.css">
	<!-- Link Swiper's CSS -->
    <link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css" />
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="script.js"></script>
	<!-- Animation link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<!-- Font Awesome Icon Link -->
	<script src="https://kit.fontawesome.com/f1f4d6ac4e.js" crossorigin="anonymous"></script>
	<!-- mail links -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<!-- Slider  -->
<script src="jquery/jquery.js" type="text/javascript"></script>
<script src="jquery/jquery.cycle.all.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#slid').cycle('fade')
})
</script>
<!-- Link JS FIle -->
<script src="bootstrap/js/bootstrap.bundle.min.js"></script>

<body>
	<!--- Header Section start --->
	 
    <?php   include('header.php');?>
	 
	<!--- Header Section End --->
	<!--- Home Section start --->
	<section class="section">
			<img src="images/build-banner1.jpg" alt="">
					<div class="baner-text">
						<h1>About Us</h1>
                            <div class="search-cover">
                               <p> Know More About Our Privacy Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam asperiores repellendus iure, consequuntur libero ab debitis dicta in unde animi soluta odit, eum corporis deleniti. Assumenda rem perspiciatis libero vel.</p>
				            </div>
				    </div>

	</section>	

    <section id="home2">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<img src="image/buld1.jpg" alt="">
				</div>
				<div class="col-md-6 mr-5">
					<h1>We Provide The Best <br> Property For You.</h1>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odio repellat aperiam similique, commodi
					voluptatum voluptates esse laudantium nihil perspiciatis. <br><br>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ea. <br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, molestiae! <br>
					<button type="button" class="btn btn-primary" id="btn" style="margin-top: 15px;">Learn More</button>
				</div>
			</div>
			<!-- <div class="row" style="margin-top: 20px;">
				
			</div> -->
		</div>
	<!-- </section>
    
    <section id="home2"> -->
		<div class="container" style="margin-top:35px;">
			<div class="row">
                <div class="col-md-6 mr-5">
					<h1>We Provide The Best <br> Property For You.</h1>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum odio repellat aperiam similique, commodi
					voluptatum voluptates esse laudantium nihil perspiciatis. <br><br>
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, ea. <br><br>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, molestiae! <br>
					<button type="button" class="btn btn-primary" id="btn" style="margin-top: 15px;">Learn More</button>
				</div>
				<div class="col-md-6 ab-img">
					<img src="image/build2.jpg" alt="">
				</div>
				
			</div>
        </div> 
    </section>
	<!-- Working Section -->
	<section id="agent">
		<div class="container">
			<h2>How It Work</h2>
			<div class="text1">
				Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure aperiam quas <br> qui facilis itaque amet a
				expedita aspernatur modi!
			</div>
			<div class="row" style="margin-top:25px;">
				<!-- Swiper -->
    
	<div class="swiper mySwiper container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br><i class="fa-solid fa-house-chimney"></i><br><br>
                    <b>Find Home</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br><i class="fa-solid fa-people-carry-box"></i><br><br>
                    <b>Meet Roommates</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br><i class="fa-solid fa-shield"></i><br><br>
                    <b>Make it Official</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br> <i class="fa-solid fa-user"></i><br><br>
                    <b>Make Your Dream True</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br><i class="fa-solid fa-handshake"></i><br><br>
                    <b>Start Your Membership</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="">
                <div class="work border">
                    <br> <i class="fa-solid fa-house-chimney"></i><br><br>
                    <b>Enjoy Your New Home</b>
                    <br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nulla inventore at commodi impedit.
                </div>
            </div>
        </div>
        
      </div>
      <div class="swiper-pagination"></div>
    </div>
   
			</div>
		</div>
	</section>
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script src="home-js.js"></script>

    <section id="contact">
        <form method="POST" id="frmContactus">
            <div class="container">
                <div class="text2">
                    <h1> Have Question In Mind...? <br>
                        Let Us Help You</h1>
    
                    <div class="con">
                        
                    <input type="email" id="mails" name="emails" placeholder="Enter Your Email">
					<span style="color:red;"class="error"id="emailerr"></span>

					<button onclick="mailus();" class="btn btn-primary submit" name="submit"  id="submit"> send</button>
					<span style="color:red;" id="msg"></span>
                    </div>
                
                </div>
            </div>
            </form>
    
        		<!--validation for contact us  -->

<script>

var check=0;
function mailus()

   {	
       if (check==0) {
           
       jQuery('#frmContactus').on('submit',function(e){
    
        var email=document.getElementById("mails").value;
             
        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(!email)
        {
            
           document.getElementById("emailerr").innerHTML="Email is required";
        
        }else if(email.match(mailformat))
           {
           jQuery('#msg').html('');
           jQuery('#submit').html('Please wait');
           jQuery('#submit').attr('disabled',true);
       
           jQuery.ajax({
               url:'contactus.php',
               type:'post',
               data:jQuery('#frmContactus').serialize(),
                   success:function(result){ 
                   jQuery('#msg').html(result);
                   jQuery('#submit').html('send');
                   jQuery('#submit').attr('disabled',false);
                   //  alert('sendsuccesfully');
                   document.getElementById("emailerr").innerHTML="";
                      jQuery('#frmContactus')[0].reset();
                   
               }
           });
            
           } else{
               document.getElementById("emailerr").innerHTML="Email is inavalid";
                
           }
        
               e.preventDefault();
           });

   
       }
       check++;
   }
   </script>
        </section>
    
        <!-- Contact Section End -->
    
        <!-- Footer Section Start -->
        <footer>
              <div class="">
                       
                          <div class="row footer">
                              <div class="col-md-3 foot">
                                  <div class="f-img">
                                      <img src="image/home-r.png" alt="">
                                  </div>
                                  <h3>About Us</h3>
                                      <p>We are a young company always looking fornew and creative ideas to help you with your products in your everyday work</p>
                                  
                            
                              </div>
                              <div class="col-md-3 foot">
                                  <h3>Information</h3>
                                  <p>About Us</p>
                                  <p>Flats</p>
                                  <p>Rents</p>
                                  <p>P.G.</p>
                                  <p>Contact Us</p>
                              </div>
                              <div class="col-md-3 foot">
                                  <h3>Helpfull Link</h3>
                                  <p>Services</p>
                                  <p>Supports</p>
                                  <p>Terms & Condition</p>
                                  <p>Privacy Policy </p>
                              </div>
                              <div class="col-md-3 soc">
                              <h3>Contact Us</h3>
                                      <p>+712 69874456</p>
                                      <p>hrperceptconsultant@gmail.com</p>
                                    <p><img src="image/fb.svg" alt=""><img src="image/tweet.svg" alt=""><img src="image/insta.svg" alt=""><img src="image/google.svg" alt=""></p>
                              </div>
                          </div>
                      
              <div class="copyrights">
              <p>	copyrights © 2022 Home Build Your Dream. All Rights Reserved</p>
    
              <p>designed by: Percept Infosystem</p>
              </div>
          </footer>
    
          <!-- Footer Section End -->
    
    
</body>

</html>