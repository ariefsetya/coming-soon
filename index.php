
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Site under construction</title>

<link rel="stylesheet" type="text/css" href="style.css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jcarousellite1.0.1_min.js"></script>

<!-- jquery countdown-->
<script type="text/javascript">
$(function () {
var austDay = new Date("December 10, 2016 02:15:00");
    $('#defaultCountdown').countdown({until: austDay, layout: '{dn} {dl}, {hn} {hl}, {mn} {ml}, and {sn} {sl}'});
    $('#year').text(austDay.getFullYear());
    });
</script>

<!-- jquery slider -->
<script type="text/javascript">

$(function() {
    $("#slidertext").jCarouselLite({
        btnNext: ".next",
        btnPrev: ".prev"
    });
});

</script>

<!--script for IE6-image transparency recover-->
<!--[if IE 6]>
<script type="text/javascript" src="js/DD_belatedPNG_0.0.7a-min.js"></script>
<script>
  /* EXAMPLE */
  DD_belatedPNG.fix('#logo img,#main,.counter,.twitter,.flickr,.facebook,.youtube,.skype,.stumbleupon, #submit,.prev img,.next img,#email');
  
</script>
<![endif]--> 

</head>

<body>


<div class="container">
  
    <div id="header">
    
      <div id="logo">
          <a href="index.html"><img src="images/kiosku-h.png" style="width:150px;" alt="logo"/></a>
        </div><!--end logo-->
            
        <div id="contact_details">
          <p><a href="#">ariefsetya@live.com</a></p>
      <p><a href="#">+62 838 7000 2220</a></p>
    </div><!--end contact details-->     
                
  </div><!--end header-->
              <div style="clear:both"></div> 
              
  <div id="main">

     <div id="content">
                    
              <div class="text">
              <h2>Coming Soon</h2>
              </div><!--end text-->
                  
              <div class="counter">
              <h3>Estimated Time Remaining Before Launch:</h3>
              <div id="defaultCountdown"></div>

         </div><!--end counter-->
                 
         <div class="details">
              <!--slider prev button-->    
            <a class="prev" href="#"><img src="images/prev.png" alt="" /> 
            </a>

                  <div id="sliderwrap">
                      <div id="slidertext"><!-- The slider -->
                            
                                <ul><!-- 
                                   <li>
                                        <h3>Type your email id to get the updates!</h3>
                    <form method="post" id="subscribeform" action="emailform.php">
                      <div id="email_input">
                        <input name="email" type="text" size="30" value="Enter Your E-mail" onfocus="if(this.value=='Enter Your E-mail'){this.value=''};"   onblur="if(this.value==''){this.value='Enter Your E-mail'};" id="email" /> 
                        <input type="submit" id="submit" value="SUBMIT" size="80" />
                      </div>
                    </form>
                                  </li><!-- Slider item --> -->
                  
                                     <li>
                                         <h3>You may find us below:</h3>
                                         <div class="social">
                                         <a href="#" class="twitter">Follow Us on Twitter</a>
                                         <a href="#" class="youtube">Follow Us on Yahoo</a>
                                         <a href="#" class="facebook">Like Us on Facebook</a>
                                         </div>
                                     </li><!-- Slider item -->
                                 
                                  <li>
                                         <h3>Some words about us</h3>
                                         <p>Penasaran? sabar yaa :D</p>
                                        
                                 
                                   </li><!-- Slider item -->
                            
                                </ul>
                            
               </div><!-- End of slidertext -->
    
              </div><!-- End of sliderwrap -->

          <!--slider next button-->
              <a class="next" href="#"><img src="images/next.png" alt=""/></a>

                  
                  </div><!--end details-->  
                </div><!--end content-->
            <p class="copyright">Copyright &copy; Kios Media Kreatif. All rights selected</p>
</div><!--end main-->

</div><!--end class container-->

</body>

</html>
