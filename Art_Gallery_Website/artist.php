<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />
   
    <title>Galerie d'Art</title>
    
    <style>
#scroller {
        position: relative;
    }
    #scroller .innerScrollArea {
        overflow: hidden;
        position: absolute;
        left: 0;
        right: 0;
        top: 30px;
        bottom: 0;
    }
    #scroller ul {
        padding: 0;
        margin: 0;
        position: relative;
    }
    #scroller li {
        padding: 0;
        margin: 0;
        list-style-type: none;
        position: absolute;
    }
         #largeImgPanel {
                text-align: center;
                display: none;
                position: fixed;
                z-index: 100;
                top: 0; left: 0; width: 100%; height: 100%;
                background-color: rgba(100,100,100, 0.5);
}


       
    </style>
    
</head>
<body>
   <?php include("menu.php");?>
   
	
    
    <div id="scroller"style="width: 100%; height: 490px; margin: 0 auto;">
    <div class="innerScrollArea">
        <ul>
            <li><a href="artistDaVinci" id="artistDaVinci" onclick="document.location=this.id+'.php';return false;" ><img id="img1" src="daVinci.jpg" width="400px" height="450px" alt="Priya" 
                 /></a></li>
            <li><a href="artistMatisse" id="artistMatisse" onclick="document.location=this.id+'.php';return false;" ><img id="img2" src="matisse.jpg" width="400px" height="450px" alt="Priya"
                  /></a></li>
            <li><a href="artistPicasso" id="artistPicasso" onclick="document.location=this.id+'.php';return false;" ><img id="img3" src="picasso.jpg" width="400px" height="450px" alt="Priya" 
                 /></a></li>
            <li><a href="artistRaphael" id="artistRaphael"  onclick="document.location=this.id+'.php';return false;" ><img id="img4" src="raphael.jpg" width="400px" height="450px" alt="Priya" 
                 /></a></li>
            <li><a href="aristVanGogh" id="aristVanGogh" onclick="document.location=this.id+'.php';return false;" ><img id="img5" src="vanGogh.jpg" width="400px" height="450px" alt="Priya"
                 /></a></li>
            
        </ul>
    </div>
</div>
       <div id="largeImgPanel" onclick="this.style.display='none'">
            <img id="largeImg"
                 style="height:100%; margin:0; padding:0;" /> </div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript">
    $(function(){
        var scroller = $('#scroller div.innerScrollArea');
        var scrollerContent = scroller.children('ul');
        scrollerContent.children().clone().appendTo(scrollerContent);
        var curX = 0;
        scrollerContent.children().each(function(){
            var $this = $(this);
            $this.css('left', curX);
            curX += $this.outerWidth(true);
        });
        var fullW = curX / 2;
        var viewportW = scroller.width();

        // Scrolling speed management
        var controller = {curSpeed:0, fullSpeed:2};
        var $controller = $(controller);
        var tweenToNewSpeed = function(newSpeed, duration)
        {
            if (duration === undefined)
                duration = 600;
            $controller.stop(true).animate({curSpeed:newSpeed}, duration);
        };

        // Pause on hover
        scroller.hover(function(){
            tweenToNewSpeed(0);
        }, function(){
            tweenToNewSpeed(controller.fullSpeed);
        });


        // Scrolling management; start the automatical scrolling
        var doScroll = function()
        {
            var curX = scroller.scrollLeft();
            var newX = curX + controller.curSpeed;
            if (newX > fullW*2 - viewportW)
                newX -= fullW;
            scroller.scrollLeft(newX);
        };
        setInterval(doScroll, 20);
        tweenToNewSpeed(controller.fullSpeed);
    });


</script>

        <script type="text/javascript">
            function showImage(smSrc, lgSrc) {
                cimage = document.getElementById('largeImg').src = smSrc;
                showLargeImagePanel();
                unselectAll();
                setTimeout(function() {
                    document.getElementById('largeImg').src = lgSrc;
                }, 1)
            }
            function showLargeImagePanel() {
                cimage = document.getElementById('largeImgPanel')//.style.display = 'block';
                $(cimage).css('display', 'block').animate({width:"100%", height:"100%"}, 100000); 
            }
            function unselectAll() {
                if(document.selection)
                    document.selection.empty();
                if(window.getSelection)
                    window.getSelection().removeAllRanges();
            }
        </script>


    
      
        
    <div id="footer">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>





