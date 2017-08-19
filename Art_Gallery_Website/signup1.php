<?php
//echo "Welcome<br>"; 
/*
if (!empty($_POST['Submit'])) 
{	*/
	if(isset($_GET["email"]) && !empty($_GET["email"]) && isset($_GET["username"]) && !empty($_GET["username"]) && isset($_GET["password"]) && !empty($_GET["password"]))
	{
		if(file_exists('signup.xml'))
		{
			echo "file exists .. so appending comments";	
			$xml = file_get_contents('signup.xml');

			$xmldoc = new DomDocument("1.0", "UTF-8");    
			$xmldoc->formatOutput = true;
			$xmldoc->loadXML($xml);
			$main = $xmldoc->firstChild;  
			
			$root = $xmldoc->createElement('info');
			$root = $main->appendChild( $root );
			
			$nameElement = $xmldoc->createElement('Emailid');
			$root->appendChild($nameElement);
			$nameText = $xmldoc->createTextNode($_GET["email"]);
			$nameElement->appendChild($nameText);

			$nameElement = $xmldoc->createElement('Username');
			$root->appendChild($nameElement);
			$nameText = $xmldoc->createTextNode($_GET["username"]);
			$nameElement->appendChild($nameText);
			
			$nameElement = $xmldoc->createElement('Password');
			$root->appendChild($nameElement);
			$nameText = $xmldoc->createTextNode($_GET["password"]);
			$nameElement->appendChild($nameText);
			
			$xmldoc->save('signup.xml');	
		}
		else
		{
			echo "file does not exists ..  creating comment file now";

			//create xml file for the first comment
			$xml = new DOMDocument("1.0", "UTF-8");
			
			$main = $xml->createElement('users');
			$main = $xml->appendChild( $main );
			
			$root = $xml->createElement('info');
			$root = $main->appendChild( $root );
			
			$email = $xml->createElement('Emailid');
			$email = $root->appendChild( $email );	
			$email->nodeValue = $_GET["email"];
			
			$username = $xml->createElement('Username');
			$username = $root->appendChild( $username );	
			$username->nodeValue = $_GET["username"];
			
			$pass = $xml->createElement('Password');
			$pass = $root->appendChild( $pass );	
			$pass->nodeValue = $_GET["password"];
			
			$xml->FormatOutput = true;
			$xml->save('signup.xml');
		}   
	}
	else
	{
		echo "empty fields!!";
	}
//}
/*
if (!empty($_POST['Login'])) 
{
	$flag = 0;
	$xml=simplexml_load_file("signup.xml") or die("Error: Cannot create object");
	foreach($xml->children() as $info) { 
		if(($info->Username == $_POST["username"]) && ($info->Password == $_POST["password"]))
		{
			echo "Match!!";
			$flag = 1;
			
			if(file_exists('login.xml'))
			{
				echo "file exists .. so appending comments";	
				$xml = file_get_contents('login.xml');

				$xmldoc = new DomDocument("1.0", "UTF-8");    
				$xmldoc->formatOutput = true;
				$xmldoc->loadXML($xml);
				$main = $xmldoc->firstChild;  
				
				$root = $xmldoc->createElement('info');
				$root = $main->appendChild( $root );
				
				$nameElement = $xmldoc->createElement('Username');
				$root->appendChild($nameElement);
				$nameText = $xmldoc->createTextNode($_POST["username"]);
				$nameElement->appendChild($nameText);
				
				$nameElement = $xmldoc->createElement('Password');
				$root->appendChild($nameElement);
				$nameText = $xmldoc->createTextNode($_POST["password"]);
				$nameElement->appendChild($nameText);
				
				$xmldoc->save('login.xml');	
			}
			else
			{
				echo "file does not exists ..  creating comment file now";

				//create xml file for the first comment
				$xml = new DOMDocument("1.0", "UTF-8");
				
				$main = $xml->createElement('users');
				$main = $xml->appendChild( $main );
				
				$root = $xml->createElement('info');
				$root = $main->appendChild( $root );
				
				$username = $xml->createElement('Username');
				$username = $root->appendChild( $username );	
				$username->nodeValue = $_POST["username"];
				
				$pass = $xml->createElement('Password');
				$pass = $root->appendChild( $pass );	
				$pass->nodeValue = $_POST["password"];
				
				$xml->FormatOutput = true;
				$xml->save('login.xml');
			}			
			break;
		}
	} 
	if($flag == 0)
		echo "No match found .. Please check username/password !!";
}*/

?>