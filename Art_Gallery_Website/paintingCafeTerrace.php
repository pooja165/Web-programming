<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <script type="text/javascript" src="jquery-1.12.0.js"></script>
	<script type="text/javascript" src="loadCommentsRatings.js"></script>
	<link rel="stylesheet" type="text/css" href="css/new_file/normalize.css" />
	<link rel="stylesheet" type="text/css" href="css/new_file/demo.css" />
	<link rel="stylesheet" type="text/css" href="css/new_file/linkstyles.css" />
    <title>Galerie d'Art</title>
	<script>
		window.requestAnimFrame = (function(callback) {
			return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame ||
				function(callback) {
					window.setTimeout(callback, 1000 / 60);
				};
		})();

		function start() {
			if (!requestId) {
				requestId = window.requestAnimFrame(jolt);
			}
		}

		function stop() {
			if (requestId) {
				clearTimeout(jolttime);
				window.cancelAnimationFrame(requestId);
				requestId = undefined;
			}
		}
	</script>
</head>
<body onload="loadCommentsRatings('paintingCafeTerrace')";>
    <?php include("menu.php"); ?> 
    
    
    <div id="paintinginfo" style="height:580px" class="col-12">
	<div class="grid__item color-11">
				<a class="link link--yaku" href="#">
				<p style="font-size: 0px;"><center><b><span>Cafe&nbsp</span><span>Terrace&nbsp</span></b></center></p>
        <!--<p><center><b>Mona Lisa</b></center></p>-->
			</a>
			</div>
	
	
        <!--<p><center><b>Cafe Terrace</b></center></p>-->
            <img src="cafeTerrace.jpg" alt="Boy with a Pipe" style="width:300px;border:10px solid black;padding:25px;position:relative;float:left;left:200px;top:20px;">
              
		      <div style="width:500px;position:relative;float:right;right:100px;padding:20px;top:20px;" class="grad">
               <p> This painting by <strong>Vincent Van Gogh</strong> is an oil on canvas painting executed during September 1888. There is also a large pen drawing of the composition. </i></p>
            <p><i>Opinions of this painting are along the lines of "of drinkers in the harsh, bright lights of their illuminated facades".</i></p>
            <p><i>Cafe Terrace has a similar style and compositional structure to <strong>Avenue de Clichy in the Evening</strong> by Anquetin. Regardless of whether Van Gogh was directly inspired by Anquetin's work, the composition of Cafe Terrace is unique among all of Van Gogh's oeuvre.</i></p>
            <p><i>The painting is currently on display at the  Kroller-Muller Museum in Otterlo, Netherlands.
                <h5><a href="vanGogh.php"><i><strong><center>Visit vanGoghpage!</center></strong></i></a></h5>
           
                </div>
    
    </div>
    
    
    
   <div class="commentRating">
        <div id="rating" style="width:100%;position:relative;background-color:#6A1F44;height:200px;float:left;">
            <p><b>Rating</b></p>
			<p id="display_rating"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"></p>
            <center><form>
                <input type="radio" name="rating" value="1" checked><img src="star.png" style="width:20px;">&nbsp;
                <input type="radio" name="rating" value="2"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;">&nbsp;
                <input type="radio" name="rating" value="3"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;">&nbsp;
                <input type="radio" name="rating" value="4"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;">&nbsp;
                <input type="radio" name="rating" value="5"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"><img src="star.png" style="width:20px;"> 
                <button id="ratingSubmit" style="width:80px;" onclick="showRating('paintingCafeTerrace')">Submit</button>
            </form></center>
        </div>
        <div id="comment"  style="width:100%;position:relative;background-color:#FA8072;height:300px;clear:both;float:left;">
            <p><b>Comments</b></p>
            <p id="display_comments">Beautiful Contrast of Colors!! &#126;Anonymous</p>
            <center><form>
                <input id="comment_user" type="text" name="comment">
                 <button id="commentSubmit" style="width:80px;" onclick="showComment('paintingCafeTerrace')">Submit</button>
            </form>
            </center>
        </div>
        
    </div>
    
  
    <div id="footer">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>




