<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />

    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
    <title>Galerie d'Art</title>

   <style>


                .bg{

                        z-index:-100;
            width: 100%;

                }
                #video-bg-elem{
                        position:absolute;
                        top:100px;  
                        left:0;
            margin: 0;
                        width: 100%;
                        min-width:100%;
            height: 500px;
            object-fit: initial;

                }
                div.content{
                        position:absolute;
                        width:100%;
                        min-width:100%;
                        z-index:100;
                        }
                .content h1{
                        text-align:center;
                        font-size:65px;

                        font-weight:300;
                        color:#fff;
                        padding-top:15%;
                        margin-bottom:10px;
                }
                .content p{
                        text-align:center;
                        font-size:20px;
                        letter-spacing:3px;
                        color:white;
                }
                .new_op{
                        opacity:0.8;
                        text-align:center;
                }

        .filtered {

           -webkit-filter: grayscale(100%); /* Chrome, Safari, Opera */
            filter: grayscale(100%);
        }

       .left
{
    width:350px;
    height:350px;
    float:left;
    border-style:solid;
    margin-left:25px;
}
.middle
{
        background-image:url();
    background-repeat:repeat-x;
    height:350px;
    margin-right:auto;
    margin-left:auto;
    width:350px;
    border-style:solid;
}
.right
{
    width:350px;
    height:350px;
    float:right;
    border-style:solid;
         margin-right:25px;
}
.divpic{
    opacity: 0.7;
}

 .divpic:hover {
    opacity: 1.0;
}

.imgdiv {
  -webkit-filter: grayscale(0.8);
  filter: grayscale(0.5);
}

       <style>
    /*setup*/

* {
  margin: 0;
  padding: 0;
}


/*neeeeoooon*/

.myFont {
  text-align: center;
  font-size: 0em;
  margin: 250px 0 20px 0;
  font-family: 'My Custom Font', Fallback;
}

a {
     text-decoration: none;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  transition: all 0.5s;
}

p:nth-child(1) a {
  color: #fff;
  
  -webkit-animation: neon1 1.5s ease-in-out infinite alternate;
  -moz-animation: neon1 1.5s ease-in-out infinite alternate;
  animation: neon1 1.5s ease-in-out infinite alternate;
}




p a:hover {
  color: #ffffff;
}
/*glow for webkit*/

@-webkit-keyframes neon1 {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #ffff, 0 0 30px #fff, 0 0 40px #993f6c, 0 0 70px #993f6c, 0 0 80px #993f6c, 0 0 100px #993f6c, 0 0 150px #993f6c;
  }
  to {
    text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 15px #fff, 0 0 20px #993f6c, 0 0 35px #993f6c, 0 0 40px #993f6c, 0 0 50px #993f6c, 0 0 75px #993f6c;
  }
}

 @font-face {
             font-family: 'My Custom Font';
             

             src: url('FoglihtenNo07.otf') format('truetype');
           }

         
    


    
    </style>

    
</head>
<body>

      <?php include("menu.php"); ?>
<div class="bg">
           <video id="video-bg-elem" preload="auto" autoplay ="true" loop="loop" muted="muted" class="filtered">
                <source src="myvideo.mp4" type="video/mp4" >
            </video>


   <div class="content">
                  <p class="myFont" style="font-size:50px;"><a href="#">Galerie d' Art</a></p>
	   
    </div>
    </div>
    <div style="background-color:white;margin-top:0;width:100%;height:90px;position:relative;float:left;clear:both;top:450px;">
        <?php include("trialscroll.php"); ?>

    </div>
    

    <div style="background-color:white;margin-top:0;position:relative;float:left;width:100%;clear:left;top:450px;height:400px;padding-top:20px;">
        <div class="left divpic" id="fade1" >
            <a href="painting.php"><img src="painting1.jpg" style="width:350px;height:350px;" class="imgdiv"/></a>
            
    </div>
        <div class="right divpic" id="fade2">
            <a href="galleries.php"><img src="gallery1.jpeg" style="width:350px;height:350px;" class="imgdiv"/></a>
           
        </div>
        <div class="middle divpic" id="fade3">
            <a href="artist.php"><img src="artist1.jpg" style="width:350px; height:350px;" class="imgdiv"/></a>
           
        </div>
        
       

    </div>
    <div id="footer" style="bottom:0px;position:relative;top:450px;background-color:#6A1F44;opacity:1.0;color:white;">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>