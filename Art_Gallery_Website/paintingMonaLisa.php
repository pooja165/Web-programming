<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <script type="text/javascript" src="jquery-1.12.0.js"></script>
		<script type="text/javascript" src="loadCommentsRatings.js"></script>
    <title>Galerie d'Art</title>
</head>
<body onload="loadCommentsRatings('paintingMonaLisa')";>
    <?php include("menu.php"); ?> 
    
    
    <div id="paintinginfo" style="height:580px" class="col-12">
        <p><center><b>Mona Lisa</b></center></p>
            <img src="monaLisa.jpg" alt="Mona lisa" style="width:300px;border:10px solid black;padding:25px;position:relative;float:left;left:200px;top:20px;">
              
		      <div style="width:500px;position:relative;float:right;right:100px;padding:20px;top:20px;" class="grad">
                <p><i>The <strong>Mona Lisa</strong>, a potrait of a woman by Leonardo da Vinci is said to have been painted between 1503 and 1506. Some speculate that da Vinci continued working on the painting as late as 1517.</i></p>
            <p><i>The painting is extremely famous and equally infamous as "the best known, the most visited, the most written about, the most sung about, the most parodied work of art in the world".</i></p>
            <p><i>The subtlety of the facial expression brought together by the modeling of the forms and illusionism are touted as reasons as to why there is continued fascination associated with the painting.</i></p>
            <p><i>The painting is on permanent display at the Louvre Museum in Paris since 1797.</i></p>
           
            <h5><a href="artistDaVinci.php"><i><strong>Visit Leonardo da Vinci's page!</strong></i></a></h5>
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
                <button id="ratingSubmit" style="width:80px;" onclick="showRating('paintingMonaLisa')">Submit</button>
            </form></center>
        </div>
        <div id="comment"  style="width:100%;position:relative;background-color:#FA8072;height:300px;clear:both;float:left;">
            <p><b>Comments</b></p>
			<p id="display_comments">Beautiful Contrast of Colors!! &#126;Anonymous</p>
            <center><form>
                <input id="comment_user" type="text" name="comment">
                 <button id="commentSubmit" style="width:80px;" onclick="showComment('paintingMonaLisa')">Submit</button>
            </form>
            </center>
        </div>
        
    </div>
    
  
    <div id="footer">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>









