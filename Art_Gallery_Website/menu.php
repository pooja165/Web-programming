<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="style2.css" />
    <script type="text/javascript" src="jquery-1.12.0.js"></script></head>
<div id="header">
<div id="sticky-anchor">
</div>
<nav  id="sticky">
   <div>
        <ul>
            <li><a href="home.php"><strong><i>Galerie d'Art</i></strong></a></li>
           
            <li class="fright" onclick="div_show()"><a href="#"><strong>Login</strong></a></li>
            <li class="fright" onclick="div_showsign()"><a href="#"><strong>Sign Up</strong></a></li>
            <li class="fright"><a href="contactUs.php"><strong>Contact Us</strong></a></li>
             <li class="fright"><a href="galleries.php"><strong>Galleries Near You</strong></a></li>
             <li class="dropdown fright"><a href="artist.php" class="dropbtn"><strong>Artists</strong></a>
                <div class="dropdown-content">
                    <a href="artistMatisse.php">Henri Matisse</a>
                    <a href="artistDaVinci.php">Leonardo da Vinci</a>
                    <a href="artistPicasso.php">Pablo Picasso</a>
                    <a href="artistRaphael.php">Raphael</a>
                    <a href="artistVanGogh.php">Vincent van Gogh</a>
                </div>
            </li>
            <li class="dropdown fright"><a href="painting.php" class="dropbtn"><strong>Paintings</strong></a>
                <div class="dropdown-content">
                    <a href="paintingBoyPipe.php">Boy with a Pipe</a>
                    <a href="paintingCafeTerrace.php">Cafe Terrace at Night</a>
                    <a href="paintingGuernica.php">Guernica</a>
                    <a href="paintingMonaLisa.php">Mona Lisa</a>
                    <a href="paintingGeorgeDragon.php">Saint George and the Dragon</a>
                    <a href="paintingDessert.php">The Dessert: Harmony in Red</a>
                    <a href="paintingLastSupper.php">The Last Supper</a>
                    <a href="paintingOpenWindow.php">The Open Window</a>
                    <a href="paintingSchoolAthens.php">The School of Athens</a>
                    <a href="paintingStarryNight.php">The Starry Night</a>
                </div>
            </li>
            <li class="fright"><a href="aboutUs.php"><strong>About Us</strong></a></li>
            <li class="fright"><a href="home.php"><strong>Home</strong></a></li>
            
        </ul>
       
    </div> 
        
</nav>
    </div>
<script>
function validateEmailid()
{
    var x = document.getElementById("email").value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
		div_showsign();
    }
	else
	{
		alert("Registered successfully!!");
	}
}

function check_empty() 
{
	if (document.getElementById('usrnm').value == "" || document.getElementById('pswd').value == "" || document.getElementById("email").value == "" || document.getElementById("pswdre").value == "" ) 
	{
		alert("Fill all fields!!");
		div_showsign();
	} 
	else if((document.getElementById('pswd').value) != (document.getElementById('pswdre').value))
	{				
		alert("Check re-entered password!!");
		div_showsign();				
	}
	else
	{
		validateEmailid();				
	}
}

function validateLogin()
{
var xhttp;
xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
        checkingLoginValidation(xhttp);
    }
};
xhttp.open("GET", "signup.xml", true);
xhttp.send();
}

function checkingLoginValidation(xml) {
    var x, i, txt, xmlDoc,flag=0; 
	var user_entered, pwd_entered, user, pwd;
    xmlDoc = xml.responseXML;
    
	user_entered = document.getElementById("usrnms").value;
	pwd_entered = document.getElementById("pswds").value;
    user = xmlDoc.getElementsByTagName("Username");
	pwd = xmlDoc.getElementsByTagName("Password");
	//alert(user_entered+"   "+pwd_entered);
    for (i = 0; i < user.length; i++)
	{ 		
        if((user_entered == user[i].childNodes[0].nodeValue) && (pwd_entered == pwd[i].childNodes[0].nodeValue))
		{
			flag=1;
		}
    }
	if(flag==0)
	{
		alert("Login failed!!");
		div_show();
	}
	else
	{
		alert("Login successful!!");
	}    
}

function check_empty_login() 
{
	if (document.getElementById('usrnms').value == "" || document.getElementById('pswds').value == "") 
	{
		alert("Fill all fields!!");
		div_show();
	} 
	else 
	{	
		validateLogin();
	}	
}

function signup_submission()
{
	str1 = document.getElementById("email").value;
	str2 = document.getElementById("usrnm").value;
	str3 = document.getElementById("pswd").value;

	if (window.XMLHttpRequest) {
	// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	} else {  // code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	check_empty();      
	}
	}
	xmlhttp.open("GET","signup1.php?email="+str1+"&username="+str2+"&password="+str3,true);
	xmlhttp.send();
}

function login_submission()
{
	str1 = document.getElementById("usrnms").value;
	str2 = document.getElementById("pswds").value;
	
	if (window.XMLHttpRequest) {
	// code for IE7+, Firefox, Chrome, Opera, Safari
	xmlhttp=new XMLHttpRequest();
	} else {  // code for IE6, IE5
	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
	if (xmlhttp.readyState==4 && xmlhttp.status==200) {
	check_empty_login();      
	}
	}
	xmlhttp.open("GET","login.php?username="+str1+"&password="+str2,true);
	xmlhttp.send();
}
    function div_show() 
        {
            document.getElementById('loginPopup').style.display = "block";
        }

    function div_hide()
        {
            document.getElementById('loginPopup').style.display = "none";
        }
    function div_showsign() 
        {
            document.getElementById('loginPopupSign').style.display = "block";
        }

    function div_hidesign()
        {
            document.getElementById('loginPopupSign').style.display = "none";
        }
        
    function sticky_relocate() 
        {
            var window_top = $(window).scrollTop();
            var div_top = $('#sticky-anchor').offset().top;
            if (window_top > div_top)   
                {
                    $('#sticky').addClass('stick');
                } 
            else 
                {
                    $('#sticky').removeClass('stick');
                }
        }

    (function () 
        {
            $(window).scroll(sticky_relocate);
            sticky_relocate();
    });
     
    </script>
    <!-- LOGIN -->
    <div id="loginPopup">
        <div id="popups">
            <form id="formS">
                <img id="closes" src="closeimg.png" onclick ="div_hide()" style="width:10px;" alt="close">
                <p>Enter your information to login!</p>
                <input type="text" name="username" id="usrnms" placeholder="Username">
                <input type="password" name="password" id="pswds" placeholder="Password">
                <br>
                <input type="checkbox" id="log" value="1" ><label>Keep me logged in</label>
                <br>
                <!--<a href="javascript:%20check_empty()" id="submits">Submit</a>-->
				<input type="submit" name="Login" value="Login" onclick="login_submission()">
                </form>
            </div>
    </div>
    
    <!-- SIGNUP -->
    
    <div id="loginPopupSign">
        <div id="popup" >
            <form id="formL">
                <img id="close" src="closeimg.png" onclick ="div_hidesign()" style="width:10px;" alt="close">
                <p>Enter your information to sign up!</p>
                <input type="text" name="email" id="email" placeholder="Email ID"><span id="email"></span>
                <input type="text" name="username" id="usrnm" placeholder="Username"><span id="name"></span>
                <input type="password" name="password" id="pswd" placeholder="Password">
                <input type="password" name="re_password" id="pswdre" placeholder="Re-Enter Password">
				<input type="submit" name="Submit" value="Submit" onclick="signup_submission()">
                <!--<a href="javascript:%20check_empty()" id="submit">Submit</a>-->
            </form>
        </div>
    </div>   
 <script>   
    
function newwindow()  
{  
    window.open('source/index.php','','width=500px,height=500px,resizable=no');  
    window.focus();
} 
    </script>

<div class="fixed">
 
	
    <a href="#" onclick="newwindow()"><p align="center">Click to chat!</p></a>
  
  </div> 
  