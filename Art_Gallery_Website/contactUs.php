<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="jquery-1.12.0.js"></script>
    <title>Galerie d'Art</title>
    <style>
    .filtered {

           -webkit-filter: grayscale(80%); /* Chrome, Safari, Opera */
            filter: grayscale(80%);
        }
        input[type="text"]
        {
            background-color: transparent;
        }
    </style>
    
</head>
<body>
   <?php include("menu.php"); ?>
    
    <div class="col-10 grad" style="height:500px;width:550px;position:relative;left:350px;top:50px;">
       <center>
           <p>This gallery contains information about artists and their paintings.There are those artists who transform the sun into a yellow spot, but there are others who, with the help of their artistic prowess and talent, transform a yellow spot into the sun. </p>
            
            <p><strong>We are situated at 500 El Camino, Sunnyvale, CA 95053</strong></p>
             <p>Get in touch with us!</p>
            <p>Call <img src="phone.png" alt="phone" style="width:15px;" />&nbsp;<strong>669-292-9685</strong></p>
             <p><img src="email.png" alt="email" style="width:20px;" />&nbsp; Email us at : <strong>galeriedart@gmail.com</strong></p>
              <p><strong>Also get in touch with us through social media!</strong></p>
             
             <a href="https://www.facebook.com"><img src="facebook.png" alt="facebook link" style="width:60px;" /></a>
             &nbsp;
             <a href="https://www.twitter.com"><img src="twitter.png" alt="linkedin link" style="width:60px;" /></a>
        </center>

    </div>
   
	<div class="contact-form col-12 filtered" style="background-image:url(contact.jpg);background-repeat:no-repeat;background-size:cover;width:100%;height:500px;top:200px;">
        <div class="col-12" style="padding:20px;">
	
            <form action="MAILTO:pnanjundaswamy@scu.edu?subject=Contact_through_website" method="post" enctype="text/plain">
            
                 <input type="text" name="firstName" id="fNAME" placeholder="First Name">
                <input type="text" name="lastName" id="lNAME" placeholder="Last Name">
                <input type="text" name="emailID" id="mailID" placeholder="Email ID">
                <input type="text" name="message" id="message" placeholder="Your Message">
                
                
                
            
        <input type="submit" value="Send" >  
        
        </form>
        </div>
    </div>
    


    <div id="footer">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>





