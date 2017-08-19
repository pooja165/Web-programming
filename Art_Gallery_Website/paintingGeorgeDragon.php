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
<body  onload="loadCommentsRatings('paintingGeorgeDragon')";>
    <?php include("menu.php"); ?> 
    
    
    <div id="paintinginfo" style="height:580px" class="col-12">
	<div class="grid__item color-11">
				<a class="link link--yaku" href="#">
				<p style="font-size: 0px;"><center><b><span>Saint&nbspGeorge&nbspand&nbsp</span><span>the&nbspDragon</span></b></center></p>
        <!--<p><center><b>Mona Lisa</b></center></p>-->
			</a>
			</div>
        <!--<p><center><b>Saint George and the Dragon</b></center></p>-->
            <img src="georgeDragon.jpg" alt="Boy with a Pipe" style="width:300px;height:380px;border:10px solid black;padding:25px;position:relative;float:left;left:200px;top:20px;">
              
		      <div style="width:500px;position:relative;float:right;right:100px;padding:20px;top:20px;" class="grad">
             <p> <strong>  Saint George and the Dragon</strong> is a cabinet painting by Raphael which was done between the years 1504 and 1506
              The traditional subject, Saint George and the Dragon, combining chivalry and Christianity, is appropriate for the occasion; like his father, Guidobaldo was a condottiero, or proprietor of a band of mercenary soldiers. In the early stages of his career Raphael painted a number of tiny cabinet paintings, including another St George in the Louvre, and the Vision of a Knight in the National Gallery in London.  <h5><a href="“artistRaphael.php""><i><strong>Visit Raphael page!</strong></i></a></h5>
           
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
                <button id="ratingSubmit" style="width:80px;" onclick="showRating('paintingGeorgeDragon')">Submit</button>
            </form></center>
        </div>
        <div id="comment"  style="width:100%;position:relative;background-color:#FA8072;height:300px;clear:both;float:left;">
            <p><b>Comments</b></p>
			<p id="display_comments">Beautiful Contrast of Colors!! &#126;Anonymous</p>
            <center><form>
                <input id="comment_user" type="text" name="comment">
                 <button id="commentSubmit" style="width:80px;" onclick="showComment('paintingGeorgeDragon')">Submit</button>
            </form>
            </center>
        </div>
        
    </div>
    
  
    <div id="footer">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>




