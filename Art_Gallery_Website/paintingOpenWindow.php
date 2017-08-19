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
<body onload="loadCommentsRatings('paintingOpenWindow')";>
    <?php include("menu.php"); ?> 
    
    
    <div id="paintinginfo" style="height:580px" class="col-12">
        <p><center><b> The Open Window</b></center></p>
            <img src="openWindow.jpg" alt="The open Window" style="width:300px;border:10px solid black;padding:25px;position:relative;float:left;left:200px;top:20px;">
              
		      <div style="width:500px;position:relative;float:right;right:100px;padding:20px;top:20px;" class="grad">
                <p><i><strong>Garcon a la Pipe</strong> or <strong>Boy with a Pipe</strong>  was painted by Pablo Picasso in 1905 as a part of his early work.</i></p>
                <p><i>The painting was done by Henri Matisse in 1905 and is oil based on canvas.</i></p>
            <p><i>It exhibits the Fauvist style of painting that Matisse grew to be famous for. The fauves liberated color from any requirements other than those posed by the painting itself that allowed art to exert its own reality. </i></p>
            <p><i>Matisse's imperative was to "interpret nature and submit it to the spirit of the picture." </i></p>
           
            
            <h5><a href="artistMatisse.php"><i><strong>Visit Henri Matisse's page!</strong></i></a></h5>
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
                <button id="ratingSubmit" style="width:80px;" onclick="showRating('paintingOpenWindow')">Submit</button>
            </form></center>
        </div>
        <div id="comment"  style="width:100%;position:relative;background-color:#FA8072;height:300px;clear:both;float:left;">
            <p><b>Comments</b></p>
			<p id="display_comments">Beautiful Contrast of Colors!! &#126;Anonymous</p>
            <center><form>
                <input id="comment_user" type="text" name="comment">
                 <button id="commentSubmit" style="width:80px;" onclick="showComment('paintingOpenWindow')">Submit</button>
            </form>
            </center>
        </div>
        
    </div>
    
  
    <div id="footer">
    <p><i><strong>&copy; Information uploaded by Galerie d'Art</strong></i></p>
    </div>
</body>
</html>


