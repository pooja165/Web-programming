function loadCommentsRatings(painting)
{
	loadComments(painting);
	loadRatings(painting);
}
function loadComments(Comments)
{
var xhttp;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        myFunction1(xhttp, Comments);
    }
};
xhttp.open("GET", "comments.xml", true);
xhttp.send();
}
function myFunction1(xml, Comments) {
    var x, i, txt, xmlDoc; 
    xmlDoc = xml.responseXML;
    txt = "";
    x = xmlDoc.getElementsByTagName(Comments);
    for (i = 0; i < x.length; i++) { 
        txt += x[i].childNodes[0].nodeValue + "<br>";
    }
    document.getElementById("display_comments").innerHTML = txt;
}

function loadRatings(Ratings)
{
var xhttp;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        myFunction(xhttp, Ratings);
    }
};
xhttp.open("GET", "ratings.xml", true);
xhttp.send();
}
function myFunction(xml, Ratings) {
    var x, i, xmlDoc, total=0, avg=0,txt=""; 
    xmlDoc = xml.responseXML;
    x = xmlDoc.getElementsByTagName(Ratings);
    for (i = 0; i < x.length; i++) { 
        total += Number(x[i].childNodes[0].nodeValue);
    }
	avg = Math.ceil(total/x.length);
	switch(avg)
	{
		case 1:txt="<img src=\"star.png\" style=\"width:20px;\">";break;
		case 2:txt="<img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\">";break;
		case 3:txt="<img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\">";break;
		case 4:txt="<img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\">";break;
		case 5:txt="<img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\">";break;
		default:"<img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\"><img src=\"star.png\" style=\"width:20px;\">";break;
	}
    document.getElementById("display_rating").innerHTML = txt;
}
function showComment(comment)
{
	str = document.getElementById("comment_user").value;
	 //document.getElementById("display_comments").innerHTML = str;
	
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		loadComments(comment);      
    }
  }
  xmlhttp.open("GET","handle_comments.php?comment_user="+str+"&comment="+comment,true);
  xmlhttp.send();
}

function showRating(rating)
{
	var rates = document.getElementsByName("rating");
	var str;
	for(var i = 0; i < rates.length; i++){
		if(rates[i].checked){
			str = rates[i].value;
		}
	}
	//str = document.getElementById("comment_user").value;
	 //document.getElementById("display_comments").innerHTML = str;
	
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
		loadRatings(rating);      
    }
  }
  xmlhttp.open("GET","handle_ratings.php?rating="+str+"&ratingno="+rating,true);
  xmlhttp.send();
}

